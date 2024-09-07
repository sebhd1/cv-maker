<div class="grid grid-cols-2">
    <div class="p-8">
        <livewire:profile-editor  />
        <livewire:employment-editor :entries="$this->employments" />
        <livewire:education-editor :entries="$this->educations" />
        <livewire:course-editor :entries="$this->courses" />
        <livewire:language-editor :entries="$this->languages" />
        <livewire:skill-editor :entries="$this->skills" />
        <livewire:social-link-editor  :entries="$this->socialLinks" />
    </div>
    <div class="p-8">

    </div>
</div>
