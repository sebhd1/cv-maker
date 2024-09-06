<?php

namespace App\Livewire\Forms;

use App\Models\Skill;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SkillEditorForm extends Form
{
    #[Validate('required|string')]
    public string $skill = '';

    #[Validate('required|string')]
    public string $level = '';


    public function store() {

        $validatedData = $this->validate();

        return Skill::create([
            'user_id' => auth()->id(),
            ...$validatedData
        ]);
    }

    public function update($id) {
        $validatedData = $this->validate();
        return Skill::find($id)->update($validatedData);
    }
}
