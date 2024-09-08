<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Facades\Pdf;

class ResumeController extends Controller
{
    public function preview()
    {

        $user = auth()->user()->load([
            'profile',
            'educations' => fn ($query) => $query->sorted(),
            'courses' => fn ($query) => $query->sorted(),
            'employments' => fn ($query) => $query->sorted(),
            'languages',
            'skills',
            'socialLinks'
        ]);

        return Pdf::view('pdfs.resume', [
            'profile' => $user->profile,
            'educations' => $user->educations,
            'courses' => $user->courses,
            'employments' => $user->employments,
            'languages' => $user->languages,
            'skills' => $user->skills,
            'socialLinks' => $user->socialLinks,
        ])
            ->format(Format::A4)
            ->name('resume-' . date('Ymd_His') . '.pdf');
    }
}
