<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
        'faculty' => 'Cyber Security',
        'id' => '230103871',
        'courses' => [
            ['name' => 'Web Security', 'grade' => 95],
            ['name' => 'Networks', 'grade' => 88],
            ['name' => 'Operating Systems', 'grade' => 79],
            ['name' => 'Data Structures', 'grade' => 91],
        ],
    ];
    $gpa = array_sum(array_column($student['courses'], 'grade')) / count($student['courses']);
    return view('transcript', compact('student', 'gpa'));
});

Route::get('/numbers', function () {
    $numbers = range(1, 20);
    return view('numbers', compact('numbers'));
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/form/submit', function (\Illuminate\Http\Request $request) {
    $data = $request->all();
    return view('form_result', compact('data'));
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'radwa@gmail.com' && $password === '1234') {
        return redirect('/transcript');
    } else {
        return back()->withErrors(['Invalid credentials']);
    }
});
