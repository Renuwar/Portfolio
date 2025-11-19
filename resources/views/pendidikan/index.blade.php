@extends('layouts.app')

@section('content')
<h2 class="section-title text-center mb-4">Education</h2>

<div class="education-list">
    @foreach($pendidikan as $edu)
        <div class="education-card">

            <!-- Left: Year -->
            <div class="edu-year">
                <span>{{ $edu->tahun_mulai ?? 'N/A' }}</span>
                <span class="divider"></span>
                <span>{{ $edu->tahun_selesai ?? 'Current' }}</span>
            </div>

            <!-- Right: Details -->
            <div class="edu-content">
                <h5 class="edu-title">
                    {{ $edu->jenjang }}
                </h5>

                <p class="edu-institution mb-1">
                    {{ $edu->institusi }}
                </p>

                @if($edu->jurusan)
                    <p class="edu-major mb-0">
                        {{ $edu->jurusan }}
                    </p>
                @endif
            </div>

        </div>
    @endforeach
</div>

<style>
/* Container */
.education-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Card */
.education-card {
    display: flex;
    padding: 20px;
    background: #1f1f1f;
    border-radius: 12px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.3);
    transition: transform .2s, box-shadow .2s;
    border-left: 4px solid #ffc107; /* yellow */
}

/* Hover effect */
.education-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.4);
}

/* Year section */
.edu-year {
    min-width: 90px;
    color: #ffc107; /* yellow */
    font-weight: bold;
    text-align: right;
    padding-right: 20px;
    border-right: 2px solid #ffc10740; /* transparent yellow */
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.edu-year .divider {
    width: 100%;
    height: 2px;
    background: #ffc107;
    opacity: .4;
}

/* Content Section */
.edu-content {
    flex: 1;
    padding-left: 20px;
}

/* Title */
.edu-title {
    color: #fff;
    font-size: 1.1rem;
    margin-bottom: 6px;
}

/* Institution name */
.edu-institution {
    color: #ffc107;
    font-size: 1rem;
    font-weight: 500;
}

/* Major */
.edu-major {
    color: #bbb;
    font-size: 0.95rem;
}

/* Mobile */
@media (max-width: 768px) {
    .education-card {
        flex-direction: column;
        text-align: left;
    }

    .edu-year {
        border-right: none;
        border-bottom: 2px solid #ffc10740;
        padding-right: 0;
        padding-bottom: 10px;
    }

    .edu-content {
        padding-left: 0;
        margin-top: 10px;
    }
}
</style>
@endsection
