<?php

namespace App\Livewire\Forms;

use App\Models\Skill;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SkillEditorForm extends Form
{
    protected $skillId = null;
    public string $skill = '';

    public string $level = '';

    public function rules() {
        return [
            'language' => [
                'required',
                'string',
                Rule::unique(Skill::class, 'skill')
                    ->ignore($this->skillId),
            ],
            'level' => 'required|string'
        ];
    }

    public function setSkillId(?int $id) {
        $this->skillId = $id;
    }


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
