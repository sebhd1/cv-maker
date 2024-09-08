<?php

namespace App\Livewire;

use App\Livewire\Forms\EmploymentEditorForm;
use App\Models\Employment;
use Livewire\Attributes\Computed;
use Livewire\Component;

class EmploymentEditor extends EditorComponent
{
    protected string $modelClass = Employment::class;

    public EmploymentEditorForm $form;

    public function render()
    {
        return view('livewire.employment-editor');
    }
}
