<?php

    namespace App\Livewire\Forms;

    use App\Models\Employment;
    use Livewire\Attributes\Validate;
    use Livewire\Form;

    class EmploymentEditorForm extends Form
    {
        #[Validate('required|string|max:255')]
        public $job_title = '';

        #[Validate('required|string|max:255')]
        public $employer = '';

        #[Validate('required|date')]
        public $start_date = '';

        #[Validate('nullable|date|after_or_equal:start_date')]
        public $end_date = null;

        #[Validate('required|string|max:255')]
        public $city = '';

        #[Validate('nullable|string|max:500')]
        public $description = null;

        public function store(): Employment
        {
            $validatedData = $this->validate();

            return Employment::create([
                'user_id' => auth()->id(),
                ...$validatedData
            ]);
        }

        public function update($id): bool
        {
            $validatedData = $this->validate();

            return Employment::where('id', $id)
                ->update($validatedData);
        }
    }
