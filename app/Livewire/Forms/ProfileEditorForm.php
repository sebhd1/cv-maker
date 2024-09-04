<?php

    namespace App\Livewire\Forms;

    use App\Models\Profile;
    use Livewire\Attributes\Validate;
    use Livewire\Form;

    class ProfileEditorForm extends Form
    {
        #[Validate('required|string|max:255')]
        public $job_title = '';

        #[Validate('required|string|max:255')]
        public $first_name = '';

        #[Validate('required|string|max:255')]
        public $last_name = '';

        #[Validate('required|email')]
        public $email = '';

        #[Validate('required|string|max:15')]
        public $phone = '';

        #[Validate('required|string|max:255')]
        public $country = '';

        #[Validate('required|string|max:255')]
        public $city = '';

        #[Validate('required|string|max:255')]
        public $nationality = '';

        #[Validate('required|integer|exists:users,id')]
        public $user_id = '';

        #[Validate('required|string|max:255')]
        public $line1 = '';

        #[Validate('nullable|string|max:255')]
        public $line2 = '';

        #[Validate('required|string|max:10')]
        public $postal_code = '';

        #[Validate('nullable|string|max:255')]
        public $driving_license = '';

        #[Validate('required|date')]
        public $date_of_birth = '';

        #[Validate('required|string|max:255')]
        public $place_of_birth = '';

        #[Validate('nullable|string')]
        public $bio = '';


        /**
         * Save the profile.
         *
         * @return Profile
         */
        public function store(): Profile
        {
            $validatedData = $this->validate();

            return Profile::updateOrCreate([
                'id' => auth()->user()->profile?->id,
            ], $validatedData);

        }
    }

