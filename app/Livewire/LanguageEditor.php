<?php

namespace App\Livewire;

use App\Livewire\Forms\LanguageEditorForm;
use App\Models\Employment;
use App\Models\Language;
use Livewire\Attributes\Computed;
use Livewire\Component;

class LanguageEditor extends Component
{
    public LanguageEditorForm $form;

    public $editingLanguageId = null;

    #[Computed]
    public function languages() {
        return auth()->user()->languages;
    }

    public function updatededitingLanguageId()
    {
        if ($this->editingLanguageId != null) {
            $language = Language::find($this->editingLanguageId);

            $this->form->fill($language->toArray());
        }
    }

    public function save() {

        $this->form->store();
    }


    public function delete($id) {

        Language::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.language-editor');
    }
}
