<?php

namespace App\Livewire;

use App\Livewire\Forms\CourseEditorForm;
use App\Models\Course;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CourseEditor extends Component
{

    public CourseEditorForm $form;

    public $editingCourseId = null;


    #[Computed]
    public function courses() {
        return auth()->user()->courses;
    }

    public function updatedEditingCourseId() {

        if($this->editingCourseId != null) {
            $course = Course::find($this->editingCourseId);

            $this->form->fill($course->toArray());
        }
    }

    public function save() {

        if($this->editingCourseId != null) {
            $this->form->update($this->editingCourseId);
        }

        else {
            $this->form->store();
        }
        $this->form->reset();
        $this->reset('editingCourseId');

        session()->flash('message', 'Course created successfully.');
    }

    public function delete($id)
    {
        return Course::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.course-editor');
    }
}
