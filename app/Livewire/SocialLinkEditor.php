<?php

namespace App\Livewire;

use App\Livewire\Forms\SocialLinkEditorForm;
use App\Models\SocialLink;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SocialLinkEditor extends Component
{

    public SocialLinkEditorForm $form;

    public $editingSocialLinkId = null;


    #[Computed]
    public function socialLinks() {
        return auth()->user()->socialLinks;
    }

    public function updatededitingSocialLinkId() {

        if($this->editingSocialLinkId != null) {

            $socialLink = SocialLink::find($this->editingSocialLinkId);

            $this->form->fill($socialLink->toArray());
        }
    }


    public function save(){

        if ($this->editingSocialLinkId != null) {
            $this->form->update($this->editingSocialLinkId);
        }
        else {
            $this->form->store();
        }

        $this->form->reset();
        $this->reset('editingSocialLinkId');
    }


    public function delete($id) {
        SocialLink::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.social-link-editor');
    }
}
