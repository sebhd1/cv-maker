<?php

namespace App\Livewire\Forms;

use App\Models\Language;
use Illuminate\Validation\Rule;
use Livewire\Form;

class LanguageEditorForm extends Form
{
    protected $languageId = null;

    public string $language = '';

    public string $level = '';

    public function rules() {
        return [
            'language' => [
                'required',
                'string',
                Rule::unique(Language::class, 'language')
                    ->ignore($this->languageId),
            ],
            'level' => 'required|string'
        ];
    }

    public function setLanguageId(?int $id) {
        $this->languageId = $id;
    }

    public function store() {

        $validatedData = $this->validate();

        return Language::create([
            'user_id' => auth()->id(),
            ...$validatedData
        ]);
    }

    public function update($id) {
        $validatedData = $this->validate();
        return Language::find($id)->update($validatedData);
    }
}
