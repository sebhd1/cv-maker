<?php

    namespace App\Livewire;

    use Livewire\Attributes\Computed;
    use Livewire\Component;
    use Spatie\LaravelPdf\Enums\Format;
    use Spatie\LaravelPdf\Facades\Pdf;

    class ResumeCreator extends Component
    {

        protected $listeners = [
            'refreshResume' => '$refresh',
            'loadEducations',
            'loadCourses',
            'loadEmployments',
            'loadLanguages',
            'loadSkills',
            'loadSocialLinks',
        ];

        public $educations = null;
        public $courses = null;
        public $employments = null;
        public $languages = null;
        public $skills = null;
        public $socialLinks = null;

        public function mount() {
            $this->loadEducations();
            $this->loadCourses();
            $this->loadEmployments();
            $this->loadLanguages();
            $this->loadSkills();
            $this->loadSocialLinks();
        }

        public function loadEducations()
        {
            $this->educations = auth()->user()->educations()->sorted()->get();
        }


        public function loadCourses()
        {
            $this->courses = auth()->user()->courses()->sorted()->get();
        }


        public function loadEmployments()
        {
            $this->employments = auth()->user()->employments()->sorted()->get();
        }


        public function loadLanguages()
        {
            $this->languages = auth()->user()->languages;
        }


        public function loadSkills()
        {
            $this->skills = auth()->user()->skills;
        }


        public function loadSocialLinks()
        {
            $this->socialLinks = auth()->user()->socialLinks;
        }

        public function render()
        {
            return view('livewire.resume-creator');
        }
    }
