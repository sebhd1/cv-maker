<?php

namespace App\Livewire;

use App\Livewire\Forms\SocialLinkEditorForm;
use App\Models\SocialLink;

class SocialLinkEditor extends EditorComponent
{
    protected string $model = SocialLink::class;

    public SocialLinkEditorForm $form;

    public function render()
    {
        return view('livewire.social-link-editor');
    }
}
