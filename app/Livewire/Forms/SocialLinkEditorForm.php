<?php

namespace App\Livewire\Forms;

use App\Models\SocialLink;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SocialLinkEditorForm extends Form
{
    #[Validate('required|string|max:255')]
    public $label = '';

    #[Validate('nullable|url')]
    public $link = '';


    public function store() {

        $validatedData = $this->validate();

        return SocialLink::create([
            'user_id' => auth()->id(),
            ...$validatedData
        ]);
    }

    public function update($id) {
        $validatedData = $this->validate();

        return SocialLink::where('id', $id)->update($validatedData);
    }
}
