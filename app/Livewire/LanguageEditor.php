<?php

namespace App\Livewire;

use App\Livewire\Forms\LanguageEditorForm;

use App\Models\Language;

class LanguageEditor extends EditorComponent
{
    protected string $model = Language::class;

    public LanguageEditorForm $form;

    public function beforeSave()
    {
        $this->form->setLanguageId($this->editingEntryId);
    }

    public function render()
    {
        return view('livewire.language-editor');
    }
}
