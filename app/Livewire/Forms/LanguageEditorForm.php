<?php

namespace App\Livewire\Forms;

use App\Models\Language;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LanguageEditorForm extends Form
{
    #[Validate('required|string')]
    public string $language = '';

    #[Validate('required|string')]
    public string $level = '';


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
