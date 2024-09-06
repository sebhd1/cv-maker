<?php

namespace App\Livewire;

use App\Livewire\Forms\SocialLinkEditorForm;
use App\Models\SocialLink;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SocialLinkEditor extends Component
{

    public SocialLinkEditorForm $form;

    public $editingSocialLinksId = null;


    #[Computed]
    public function socialLinks() {
        return auth()->user()->socialLinks;
    }

    public function updatedEditingSocialLinksId() {

        if($this->editingSocialLinksId != null) {

            $socialLink = SocialLink::find($this->editingSocialLinksId);

            $this->form->fill($socialLink->toArray());
        }
    }


    public function save(){

        if ($this->editingSocialLinksId != null) {
            $this->form->update($this->editingSocialLinksId);
        }
        else {
            $this->form->store();
        }

        $this->form->reset();
        $this->reset('editingSocialLinksId');
    }


    public function delete($id) {
        SocialLink::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.social-link-editor');
    }
}
