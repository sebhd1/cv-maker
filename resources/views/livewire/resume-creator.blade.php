<div class="grid grid-cols-2 gap-4 py-8 px-4 relative">
    <div>
        <livewire:profile-editor :key="uniqid('profile-')" />
        <livewire:employment-editor :entries="$this->employments" :key=" uniqid('employments-')" />
        <livewire:education-editor :entries="$this->educations" :key="uniqid('educations-')" />
        <livewire:course-editor :entries="$this->courses" :key="uniqid('courses-')" />
        <livewire:language-editor :entries="$this->languages" :key="uniqid('languages-')" />
        <livewire:skill-editor :entries="$this->skills" :key="uniqid('skills-')" />
        <livewire:social-link-editor  :entries="$this->socialLinks" :key="uniqid('social-links-')" />
    </div>

    <iframe
        src="{{ route('resume.preview') }}"
        class="h-screen w-full py-8"
    ></iframe>
</div>
