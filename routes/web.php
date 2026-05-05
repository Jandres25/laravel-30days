<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '$20,000'
            ],
            [
                'id' => 3,
                'title' => 'Designer',
                'salary' => '$10,000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Developer',
            'salary' => '$20,000'
        ],
        [
            'id' => 3,
            'title' => 'Designer',
            'salary' => '$10,000'
        ]
    ];

    // ensure proper type comparison
    $job = Arr::first($jobs, fn($job) => $job['id'] === (int) $id);

    // If job not found, return 404
    if (! $job) {
        abort(404);
    }

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
