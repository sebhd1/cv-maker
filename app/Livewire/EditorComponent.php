<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

abstract class EditorComponent extends Component
{
    protected string $model;

    public $entries;

    public $editingEntryId = null;

    public function updatedEditingEntryId()
    {
        if ($this->editingEntryId != null) {
            $entry = $this->model::find($this->editingEntryId);

            $this->form->fill($entry->toArray());
        }
    }

    public function save() {
        if (method_exists($this, 'beforeSave')) {
            $this->beforeSave();
        }

        if($this->editingEntryId !== null) {

            $this->form->update($this->editingEntryId);
        }
        else {
            $this->form->store();
        }

        if (method_exists($this, 'afterSave')) {
            $this->afterSave();
        }

        $this->form->reset();
        $this->reset('editingEntryId');

        $this->dispatch('refreshResume');
    }


    public function delete($id) {

        $this->model::where('id', $id)->delete();

        $this->dispatch('refreshResume');
    }
}
