<?php

    namespace App\Livewire;

    use App\Livewire\Forms\ProfileEditorForm;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Foundation\Application;
    use Livewire\Component;

    class ProfileEditor extends Component
    {
        public ProfileEditorForm $form;

        public function mount() {
            $this->form->fill(
                auth()->user()->profile?->toArray() ?? []
            );
        }

        /**
         * Save the profile.
         *
         * @return void
         */
        public function updatedForm(): void
        {
            $this->form->store();
            session()->flash('message', 'Profile created successfully.');
        }

        public function render(): Application|Factory|View|\Illuminate\View\View
        {
            return view('livewire.profile-editor');
        }
    }
