<?php

namespace App\Livewire;

use App\Livewire\Forms\EmploymentEditorForm;
use App\Models\Employment;
use Livewire\Attributes\Computed;
use Livewire\Component;

class EmploymentEditor extends Component
{

    public EmploymentEditorForm $form;

    public $editingEmploymentId = null;

    #[Computed]
    public function employments() {
        return auth()->user()->employments;
    }

    public function updatedEditingEmploymentId()
    {
        if ($this->editingEmploymentId != null) {
            $employment = Employment::find($this->editingEmploymentId);

            $this->form->fill($employment->toArray());
        }
    }

    public function save(): void
    {
        if ($this->editingEmploymentId != null) {
            $this->form->update($this->editingEmploymentId);
        }
        else {
            $this->form->store();
        }

        $this->form->reset();
        $this->reset('editingEmploymentId');

        session()->flash('message', 'Employment saved successfully.');
    }

    public function delete($id)
    {
        Employment::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.employment-editor');
    }
}
