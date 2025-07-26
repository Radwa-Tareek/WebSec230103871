@extends('layouts.master')

@section('title', 'Simple Form')

@section('content')
<h3>Student Info Form</h3>

<form method="POST" action="/form/submit">
    @csrf
    <div class="mb-3">
        <label>Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Age:</label>
        <input type="number" name="age" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Department:</label>
        <input type="text" name="department" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
