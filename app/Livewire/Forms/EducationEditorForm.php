<?php

namespace App\Livewire\Forms;

use App\Models\Education;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EducationEditorForm extends Form
{
    #[Validate('required|string|max:255')]
    public $school = '';

    #[Validate('required|string|max:255')]
    public $name = '';

    #[Validate('required|date')]
    public $start_date = '';

    #[Validate('nullable|date')]
    public $end_date = null;

    #[Validate('required|string|max:255')]
    public $city = '';

    #[Validate('required|string|max:255')]
    public $country = '';

    #[Validate('nullable|string|max:1000')]
    public $description = null;

    public function store() {

        $validatedData = $this->validate();

        return Education::create([
            'user_id' => auth()->id(),
            ...$validatedData
        ]);
    }

    public function update($id) {
        $validatedData = $this->validate();
       return Education::where('id', $id)->update($validatedData);
    }
}
