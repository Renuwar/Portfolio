@extends('layouts.app')

@section('content')
<h2 class="section-title">Skills</h2>

<div class="row justify-content-center">
    @foreach($keahlian as $skill)
        <div class="col-md-6">
            <div class="card p-3">
                <!-- Skill name -->
                <p class="mb-1 text-white"><strong>{{ $skill->nama_skill }}</strong></p>

                <!-- Skill level -->
                <p class="text-warning mb-0">{{ $skill->tingkat }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
