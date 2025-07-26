@extends('layouts.master')

@section('title', 'Numbers Analysis')

@section('content')
<h3>Numbers Table (1 - 20)</h3>
<table class="table table-bordered mt-3">
    <thead class="table-light">
        <tr>
            <th>Number</th>
            <th>Even/Odd</th>
            <th>Prime?</th>
            <th>Multiplication Table</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($numbers as $num)
            <tr>
                <td>{{ $num }}</td>
                <td>{{ $num % 2 == 0 ? 'Even' : 'Odd' }}</td>
                <td>
                    @php
                        $isPrime = true;
                        if ($num <= 1) $isPrime = false;
                        for ($i = 2; $i <= sqrt($num); $i++) {
                            if ($num % $i == 0) {
                                $isPrime = false;
                                break;
                            }
                        }
                    @endphp
                    {{ $isPrime ? 'Yes' : 'No' }}
                </td>
                <td>
                    @for ($i = 1; $i <= 3; $i++)
                        {{ $num }} x {{ $i }} = {{ $num * $i }}<br>
                    @endfor
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
