@extends('layout')

@section('title', 'My Projects')

@section('content')
    <h1 class="page-title">My Projects</h1>
    <p class="subtitle">A few things I’ve worked on.</p>

    <div class="projects-grid">
        @foreach($projects as $project)
            <div class="project-square">
                <div class="project-image">
                    <img src="{{ asset('assets/' . ($project['image'] ?? 'placeholder.jpg')) }}" 
                         alt="{{ $project['title'] }}">
                </div>

                <div class="project-content">
                    <h3>{{ $project['title'] }}</h3>
                    <p class="subtitle">{{ $project['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
