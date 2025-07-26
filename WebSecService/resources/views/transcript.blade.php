@extends('layouts.master')

@section('title', 'Student Transcript')

@section('content')
<h3>Student Transcript</h3>

<p><strong>Name:</strong> {{ $student['name'] }}</p>
<p><strong>Faculty:</strong> {{ $student['faculty'] }}</p>
<p><strong>Student ID:</strong> {{ $student['id'] }}</p>

<h5 class="mt-4">Courses and Grades:</h5>
<table class="table table-bordered mt-2">
    <thead class="table-dark">
        <tr>
            <th>Course</th>
            <th>Grade</th>
            <th>Evaluation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($student['courses'] as $course)
            <tr>
                <td>{{ $course['name'] }}</td>
                <td>{{ $course['grade'] }}</td>
                <td>
                    @if ($course['grade'] >= 90)
                        Excellent
                    @elseif ($course['grade'] >= 80)
                        Very Good
                    @elseif ($course['grade'] >= 70)
                        Good
                    @elseif ($course['grade'] >= 60)
                        Pass
                    @else
                        Fail
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="alert alert-success mt-3">
    <strong>GPA:</strong> {{ number_format($gpa, 2) }}
</div>
@endsection
