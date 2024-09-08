<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Component;

abstract class EditorComponent extends Component
{
    protected string $modelClass;

    public $entries;

    public $editingEntryId = null;

    public function updatedEditingEntryId()
    {
        if ($this->editingEntryId != null) {
            $entry = $this->modelClass::find($this->editingEntryId);

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

        $this->dispatch($this->loader);
    }


    public function delete($id) {

        $this->modelClass::where('id', $id)->delete();

        $this->dispatch($this->loader);
    }

    #[Computed]
    public function loader() {
        $path = explode('\\', $this->modelClass);
        $entityName = Str::plural(array_pop($path));

        return "load{$entityName}";
    }
}
