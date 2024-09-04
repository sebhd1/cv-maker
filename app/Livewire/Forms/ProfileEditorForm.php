<?php

    namespace App\Livewire\Forms;

    use Livewire\Attributes\Validate;
    use Livewire\Form;

    class ProfileEditorForm extends Form
    {
        #[Validate('required|string|max:255')]
        public $jobTitle = '';

        #[Validate('required|string|max:255')]
        public $firstName = '';

        #[Validate('required|string|max:255')]
        public $lastName = '';

        #[Validate('required|email|unique:users,email')]
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
        public $userId = '';

        #[Validate('required|string|max:255')]
        public $line1 = '';

        #[Validate('nullable|string|max:255')]
        public $line2 = '';

        #[Validate('required|string|max:10')]
        public $postalCode = '';

        #[Validate('nullable|string|max:255')]
        public $drivingLicense = '';

        #[Validate('required|date')]
        public $dateOfBirth = '';

        #[Validate('required|string|max:255')]
        public $placeOfBirth = '';

        #[Validate('nullable|string')]
        public $bio = '';

        #[Validate('nullable|date')]
        public $deletedAt = '';


    }

