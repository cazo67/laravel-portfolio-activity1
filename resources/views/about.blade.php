@extends('layout')

@section('title', 'About Me')

@section('content')
    <h1 class="page-title">About Me</h1>
    <p class="subtitle">A short introduction and background.</p>

    <div class="about-card">
        {{-- Image --}}
        <div class="about-image">
            <img src="{{ asset('assets/image.png') }}" alt="Profile photo">
        </div>

        {{-- Info --}}
        <div class="about-info">
            <span class="badge">{{ $name }}</span>

            <div class="kv">
                <div class="kv-row">
                    <strong>Course:</strong> <span>{{ $course }}</span>
                </div>
                <div class="kv-row">
                    <strong>University:</strong> <span>{{ $university }}</span>
                </div>
            </div>

            <div class="box">
                I am learning web development with Laravel.
                I am passionate about UI/UX since I am a graphic designer.
                I enjoy building web applications and solving problems through code.
                My goal is to become a full-stack developer and create impactful digital solutions.
            </div>
        </div>
    </div>
@endsection
