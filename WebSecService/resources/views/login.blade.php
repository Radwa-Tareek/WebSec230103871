@extends('layouts.master')

@section('title', 'Login')

@section('content')
<h3>Login Page</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif

<form method="POST" action="/login">
    @csrf
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Password:</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button class="btn btn-success">Login</button>
</form>
@endsection
