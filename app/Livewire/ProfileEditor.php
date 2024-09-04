<?php

    namespace App\Livewire;

    use App\Livewire\Forms\ProfileEditorForm;
    use App\Models\Profile;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Foundation\Application;
    use Livewire\Component;

    class ProfileEditor extends Component
    {
        public ProfileEditorForm $profileEditorForm;


        /**
         * Save the profile.
         *
         * @return void
         */
        public function save(): void
        {
            $validatedData = $this->profileEditorForm->validate();

            Profile::create([$validatedData]);
        }

        public function render(): Application|Factory|View|\Illuminate\View\View
        {
            return view('livewire.profile-editor');
        }
    }
