<?php

    namespace App\Livewire;

    use Livewire\Attributes\Computed;
    use Livewire\Component;

    class ResumeCreator extends Component
    {

        protected $listeners = [
            'refreshResume' => '$refresh'
        ];

        #[Computed]
        public function educations()
        {
            return auth()->user()->educations()
                ->orderBy('end_date', 'DESC')
                ->orderBy('start_date', 'DESC')
                ->get();
        }

        #[Computed]
        public function courses()
        {
            return auth()->user()->courses()
                ->orderBy('end_date', 'DESC')
                ->orderBy('start_date', 'DESC')
                ->get();
        }

        #[Computed]
        public function employments()
        {
            return auth()->user()->employments()
                ->orderBy('end_date', 'DESC')
                ->orderBy('start_date', 'DESC')
                ->get();
        }

        #[Computed]
        public function languages()
        {
            return auth()->user()->languages;
        }

        #[Computed]
        public function skills()
        {
            return auth()->user()->skills;
        }

        #[Computed]
        public function socialLinks()
        {
            return auth()->user()->socialLinks;
        }

        public function render()
        {
            return view('livewire.resume-creator');
        }
    }
