@extends('layouts.master')

@section('title', 'Form Result')

@section('content')
<h3>Form Submitted Data</h3>

<table class="table table-bordered">
    <tr><th>Name</th><td>{{ $data['name'] }}</td></tr>
    <tr><th>Age</th><td>{{ $data['age'] }}</td></tr>
    <tr><th>Department</th><td>{{ $data['department'] }}</td></tr>
</table>
@endsection
