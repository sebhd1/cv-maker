<?php

namespace App\Livewire;

use App\Livewire\Forms\EducationEditorForm;
use App\Models\Education;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Computed;
use Livewire\Component;

class EducationEditor extends Component
{

    public EducationEditorForm $form;

    public $editingEducationId = null;

    #[Computed]
    public function educations() {
        return auth()->user()->educations;
    }

    public function updatedEditingEducationId(): void
    {
        if($this->editingEducationId !== null){
            $education = Education::find($this->editingEducationId);
            $this->form->fill($education);
        }
    }

    public function save(): void
    {

        if($this->editingEducationId !== null){
            $this->form->update($this->editingEducationId);
        }

        else {
            $this->form->store();
        }

        $this->form->reset();
        $this->reset('editingEducationId');


        session()->flash('message', 'Education created successfully.');
    }

    public function delete($id)
    {
        Education::find($id)->delete();
    }


    public function render(): Application|Factory|View|\Illuminate\View\View
    {
        return view('livewire.education-editor');
    }
}
