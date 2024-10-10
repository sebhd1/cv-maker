<div class="container mt-5">
    <!-- Profile Section -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h2>{{ $profile?->title ?? 'No Title' }}</h2>
        </div>
        <div class="card-body">
            <!-- Personal Info -->
            <h3 class="mb-4">Personal Information</h3>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>First Name:</strong> {{ $profile?->first_name ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Last Name:</strong> {{ $profile?->last_name ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Email:</strong> {{ $profile?->email ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Phone:</strong> {{ $profile?->phone ?? 'N/A' }}</p>
                </div>
            </div>

            <!-- Address -->
            <h3 class="mb-4">Address</h3>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Country:</strong> {{ $profile?->country ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>City:</strong> {{ $profile?->city ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Line 1:</strong> {{ $profile?->line1 ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Line 2:</strong> {{ $profile?->line2 ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Postal Code:</strong> {{ $profile?->postal_code ?? 'N/A' }}</p>
                </div>
            </div>

            <!-- Additional Information -->
            <h3 class="mb-4">Additional Information</h3>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nationality:</strong> {{ $profile?->nationality ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Driving License:</strong> {{ $profile?->driving_license ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Date of Birth:</strong> {{ $profile?->date_of_birth ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Place of Birth:</strong> {{ $profile?->place_of_birth ?? 'N/A' }}</p>
                </div>
            </div>

            <!-- Bio -->
            <h3 class="mb-4">Bio</h3>
            <p>{{ $profile?->bio ?? 'No bio available.' }}</p>
        </div>
    </div>

    <!-- Employment Section -->
    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">
            <h3>Employment History</h3>
        </div>
        <div class="card-body">
            @foreach($employments as $employment)
                <div class="mb-3">
                    <h5>{{ $employment->job_title ?? 'No Job Title' }}</h5>
                    <p><strong>Employer:</strong> {{ $employment->employer ?? 'N/A' }}</p>
                    <p><strong>Duration:</strong> {{ $employment->start_date }} - {{ $employment->end_date ?? 'Present' }}</p>
                    <p><strong>City:</strong> {{ $employment->city ?? 'N/A' }}</p>
                    <h6>Job Description</h6>
                    <p>{{ $employment->description ?? 'No description provided.' }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Education Section -->
    <div class="card mb-4">
        <div class="card-header bg-info text-white">
            <h3>Education History</h3>
        </div>
        <div class="card-body">
            @foreach($educations as $education)
                <div class="mb-3">
                    <h5>{{ $education->school ?? 'No School Info' }}</h5>
                    <p><strong>Degree/Program:</strong> {{ $education->name ?? 'N/A' }}</p>
                    <p><strong>Duration:</strong> {{ $education->start_date }} - {{ $education->end_date ?? 'Present' }}</p>
                    <p><strong>City:</strong> {{ $education->city ?? 'N/A' }}</p>
                    <p><strong>Country:</strong> {{ $education->country ?? 'N/A' }}</p>
                    <h6>Education Description</h6>
                    <p>{{ $education->description ?? 'No description provided.' }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Courses Section -->
    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            <h3>Courses</h3>
        </div>
        <div class="card-body">
            @foreach($courses as $course)
                <div class="mb-3">
                    <h5>{{ $course->course ?? 'No Course Info' }}</h5>
                    <p><strong>Institution:</strong> {{ $course->institution ?? 'N/A' }}</p>
                    <p><strong>Duration:</strong> {{ $course->start_date }} - {{ $course->end_date ?? 'Ongoing' }}</p>
                    <p><strong>Expires At:</strong> {{ $course->expires_at ?? 'N/A' }}</p>
                    <p><strong>Token:</strong> {{ $course->token ?? 'N/A' }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Language Section -->
    <div class="card mb-4">
        <div class="card-header bg-warning text-white">
            <h3>Languages</h3>
        </div>
        <div class="card-body">
            @foreach($languages as $language)
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Language:</strong> {{ $language->language ?? 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Level:</strong> {{ $language->level ?? 'N/A' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Skills Section -->
    <div class="card mb-4">
        <div class="card-header bg-danger text-white">
            <h3>Skills</h3>
        </div>
        <div class="card-body">
            @foreach($skills as $skill)
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Skill:</strong> {{ $skill->skill ?? 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Level:</strong> {{ $skill->level ?? 'N/A' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Social Links Section -->
    <div class="card mb-4">
        <div class="card-header bg-dark text-white">
            <h3>Social Links</h3>
        </div>
        <div class="card-body">
            @foreach($socialLinks as $socialLink)
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Label:</strong> {{ $socialLink->label ?? 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Link:</strong> <a href="{{ $socialLink->link }}" target="_blank">{{ $socialLink->link }}</a></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
