@extends('layouts.app')

@section('content')
<h2 class="section-title text-center mb-4">Experience</h2>

<div class="experience-list">
    @foreach($pengalaman as $exp)
        <div class="experience-card">

            <!-- Left Side: Year -->
            <div class="exp-year">
                <span>{{ $exp->tahun_mulai ?? 'N/A' }}</span>
                <span class="divider"></span>
                <span>{{ $exp->tahun_selesai ?? 'Current' }}</span>
            </div>

            <!-- Right Side: Details -->
            <div class="exp-content">
                <h5 class="exp-title">
                    {{ $exp->nama_pengalaman }}
                    @if($exp->posisi)
                        <span class="exp-position">— {{ $exp->posisi }}</span>
                    @endif
                </h5>

                @if($exp->deskripsi)
                    <p class="exp-description">{{ $exp->deskripsi }}</p>
                @endif
            </div>

        </div>
    @endforeach
</div>

<style>
/* Container */
.experience-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Each Card */
.experience-card {
    display: flex;
    padding: 20px;
    background: #1f1f1f;
    border-radius: 12px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.3);
    transition: transform .2s, box-shadow .2s;
    border-left: 4px solid #ffc107;
}

/* Hover effect */
.experience-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.4);
}

/* Year Section */
.exp-year {
    min-width: 90px;
    color: #ffc107;
    font-weight: bold;
    text-align: right;
    padding-right: 20px;
    border-right: 2px solid #ffc10740;
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.exp-year .divider {
    width: 100%;
    height: 2px;
    background: #ffc107;
    opacity: .4;
}

/* Content Section */
.exp-content {
    flex: 1;
    padding-left: 20px;
}

/* Titles */
.exp-title {
    color: #fff;
    font-size: 1.1rem;
    margin-bottom: 6px;
}

.exp-position {
    color: #ffc107;
    font-weight: 400;
}

/* Description */
.exp-description {
    color: #bbb;
    font-size: 0.95rem;
    margin: 0;
}

/* Responsive (Mobile) */
@media (max-width: 768px) {
    .experience-card {
        flex-direction: column;
        text-align: left;
    }

    .exp-year {
        border-right: none;
        border-bottom: 2px solid #ffc10740;
        padding-right: 0;
        padding-bottom: 10px;
    }

    .exp-content {
        padding-left: 0;
        margin-top: 10px;
    }
}
</style>
@endsection
