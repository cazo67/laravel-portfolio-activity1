<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function() {
    $name = 'Carlos Fidel G Castro';
    $course = 'Bachelor of Science in Information Technoplogy';
    $university = 'Central Mindano University';

    return view('about', [
        'name' => $name,
        'course' => $course,
        'university' => $university
    ]);

})->name('about');



Route::get('/projects', function () {

    $projects = [
        ['title' => 'Project 1', 'description' => 'My first web project'],
        ['title' => 'Project 2', 'description' => 'E-commerce website'],
        ['title' => 'Project 3', 'description' => 'Mobile app design'], 
    ];

    return view('projects', ['projects' => $projects]);
})->name('projects');



Route::get('/contact', function () {
    $email = 's.castro.carlosfidel@cmu.edu.ph';
    $phone = '09517999738'; 
return view('contact', [
    'email' => $email,
    'phone' => $phone
    ]);
})->name('contact');
