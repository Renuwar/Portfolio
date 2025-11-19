@extends('layouts.app')

@section('content')
<section class="about-me my-5">
    <div class="container d-flex flex-column align-items-center">

        <!-- Card + text animations -->
        <div class="card p-4 shadow-sm bg-dark w-100 animated-fade-up-delayed"
             style="max-width: 800px;">
            <p class="text-white text-center fs-5">
                {{ $biodata->deskripsi_singkat ?? 'Write a brief introduction about yourself here.' }}
            </p>
        </div>

    </div>
</section>

{{-- Animations --}}
<style>
/* Smooth Fade-Up Animation */
@keyframes fadeUp {
    0% {
        opacity: 0;
        transform: translateY(25px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Reusable animation class */
.animated-fade-up {
    animation: fadeUp 0.9s ease-out forwards;
    opacity: 0;
}

/* Slight delay for staggered effect */
.animated-fade-up-delayed {
    animation: fadeUp 1.2s ease-out forwards;
    opacity: 0;
}

/* Profile Image Styling */
.profile-photo {
    width: 160px;
    height: 160px;
    object-fit: cover;
    border: 3px solid #ffcc00;
    border-radius: 50%;
    box-shadow: 0px 4px 12px rgba(0,0,0,0.6);
}
</style>
@endsection
