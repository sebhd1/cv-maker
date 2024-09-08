<?php

namespace App\Livewire;

use App\Livewire\Forms\SkillEditorForm;
use App\Models\Skill;
use Livewire\Component;

class SkillEditor extends EditorComponent
{
    protected string $modelClass = Skill::class;

    public SkillEditorForm $form;

    public function beforeSave()
    {
        $this->form->setSkillId($this->editingEntryId);
    }


    public function render()
    {
        return view('livewire.skill-editor');
    }
}
