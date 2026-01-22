<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $name = 'Carlos Fidel G Castro';
        $course = 'Bachelor of Science in Information Technology';
        $university = 'Central Mindanao University';

        return view('about', compact('name', 'course', 'university'));
    }

    public function projects()
    {
        $projects = [
            [
                'title' => 'Project 1',
                'description' => 'My first web project',
                'image' => 'project1.png'
            ],
            [
                'title' => 'Project 2',
                'description' => 'Supreme Student Council website',
                'image' => 'project2.png'
            ],
            [
                'title' => 'Project 3',
                'description' => 'Unified Foundation Day Website',
                'image' => 'project3.png'
            ],
        ];

        return view('projects', compact('projects'));
    }


    public function contact()
    {
        $email = 'carlosfidelcaatro@gmail.com';
        $phone = '09517999738';

        return view('contact', compact('email', 'phone'));
    }
}
