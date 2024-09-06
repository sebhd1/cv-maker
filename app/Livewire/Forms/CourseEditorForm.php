<?php

    namespace App\Livewire\Forms;

    use App\Models\Course;
    use Livewire\Attributes\Validate;
    use Livewire\Form;

    class CourseEditorForm extends Form
    {
        #[Validate('required|string|max:255')]
        public $course = '';

        #[Validate('required|string|max:255')]
        public $institution = '';

        #[Validate('required|date')]
        public $start_date = '';

        #[Validate('nullable|date|after_or_equal:start_date')]
        public $end_date = null;

        #[Validate('nullable|date')]
        public $expires_at = null;

        #[Validate('nullable|string|max:255')]
        public $token = '';

        #[Validate('nullable|date')]
        public $deleted_at = null;

        /**
         * Save the course.
         *
         * @return Course
         */
        public function store(): Course
        {
            $validatedData = $this->validate();

            return Course::create(
                [ 'user_id' => auth()->id(),
                    ...$validatedData
                ]);
        }

        public function update($id): bool{

            $validatedData = $this->validate();

            return Course::where('id', $id)
                ->update($validatedData);
        }
    }
