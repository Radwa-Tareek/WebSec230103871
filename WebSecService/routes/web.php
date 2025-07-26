<?php

use Illuminate\Support\Facades\Route;

Route::get('/minitest', function () {
    $bill = [
        ['item' => 'Apples', 'qty' => 3, 'price' => 5],
        ['item' => 'Bananas', 'qty' => 2, 'price' => 4],
        ['item' => 'Milk', 'qty' => 1, 'price' => 10],
    ];
    return view('minitest', compact('bill'));
});
Route::get('/transcript', function () {
    $student = [
        'name' => 'Radwa Tarek',
        'faculty' => 'Computer Science',
        'id' => '230103871',
        'courses' => [
            ['name' => 'Web Security', 'grade' => 95],
            ['name' => 'Networks', 'grade' => 88],
            ['name' => 'Operating Systems', 'grade' => 79],
            ['name' => 'Data Structures', 'grade' => 91],
        ],
    ];

    // نحسب الـ GPA بناءً على الدرجات
    $gpa = 0;
    foreach ($student['courses'] as $course) {
        $gpa += $course['grade'];
    }
    $gpa = $gpa / count($student['courses']);

    return view('transcript', compact('student', 'gpa'));
});
