@extends('layout')

@section('title', 'Home - My Portfolio')

@section('content')
    {{-- Hero Image --}}
    <div class="hero-image">
        <img src="{{ asset('assets/coverpage.png') }}" alt="Landscape Hero">
        {{-- If you want to use your Unsplash link instead, replace src with the URL --}}
    </div>

    {{-- Title Section --}}
    <div class="title-section">
        <h1>Welcome to My Portfolio</h1>
        <p>A dedicated professional passionate about creating exceptional digital experiences.</p>
    </div>

    {{-- Skills Grid --}}
    <div class="skills-container">
        <div class="skills-grid">
            <div class="skill-card">
                <h3>Design</h3>
                <p>Creating beautiful and functional user interfaces with attention to detail.</p>
            </div>

            <div class="skill-card">
                <h3>Development</h3>
                <p>Building responsive web applications using modern technologies.</p>
            </div>

            <div class="skill-card">
                <h3>Strategy</h3>
                <p>Planning and executing projects with clear goals and measurable outcomes.</p>
            </div>
        </div>
    </div>
@endsection
