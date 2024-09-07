<?php

namespace App\Livewire;

use App\Livewire\Forms\CourseEditorForm;
use App\Models\Course;

class CourseEditor extends EditorComponent
{
    protected string $model = Course::class;

    public CourseEditorForm $form;

    public function render()
    {
        return view('livewire.course-editor');
    }
}
