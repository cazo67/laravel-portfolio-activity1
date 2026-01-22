@extends('layout')

@section('title', 'Contact Me')

@section('content')
    <h1 class="page-title">Contact Me</h1>
    <p class="subtitle">You can reach me using the details below.</p>

    <div class="box">
        <p>
            <strong>Email:</strong>
            <a href="mailto:{{ $email }}">{{ $email }}</a>
        </p>
        <p>
            <strong>Phone:</strong> {{ $phone }}
        </p>
    </div>
@endsection
