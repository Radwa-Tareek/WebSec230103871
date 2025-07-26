@extends('layouts.master')

@section('title', 'Mini Supermarket Bill')

@section('content')
<div class="container mt-4">
    <h3>Mini Supermarket Bill</h3>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp
            @foreach ($bill as $entry)
                <tr>
                    <td>{{ $entry['item'] }}</td>
                    <td>{{ $entry['qty'] }}</td>
                    <td>{{ $entry['price'] }} EGP</td>
                    <td>{{ $entry['qty'] * $entry['price'] }} EGP</td>
                </tr>
                @php $grandTotal += $entry['qty'] * $entry['price']; @endphp
            @endforeach
            <tr class="table-success">
                <td colspan="3"><strong>Grand Total</strong></td>
                <td><strong>{{ $grandTotal }} EGP</strong></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
