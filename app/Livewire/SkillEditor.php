<?php

namespace App\Livewire;

use App\Livewire\Forms\SkillEditorForm;
use App\Models\Skill;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SkillEditor extends Component
{

    public SkillEditorForm $form;

    public $EditingSkillId = null;


    #[Computed]
    public function skills() {
        return auth()->user()->skills;
    }

    public function updatedEditingSkillId() {

        if($this->EditingSkillId != null) {

            $skill = Skill::find($this->EditingSkillId);

            $this->form->fill($skill->toArray());
        }
    }


    public function save(){

        if ($this->EditingSkillId != null) {
            $this->form->update($this->EditingSkillId);
        }
        else {
            $this->form->store();
        }

        $this->form->reset();
        $this->reset('EditingSkillId');
    }


    public function delete($id) {
        Skill::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.skill-editor');
    }
}
