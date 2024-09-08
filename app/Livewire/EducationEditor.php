<?php

namespace App\Livewire;

use App\Livewire\Forms\EducationEditorForm;
use App\Models\Education;

class EducationEditor extends EditorComponent
{
    protected string $modelClass = Education::class;

    public EducationEditorForm $form;

    public function render()
    {
        return view('livewire.education-editor');
    }
}
