<!-- layout -> layout.blade.php -->
@extends('layout')

@section('content')
<h1>Customers</h1>

<ul>
    @foreach($customers as $customers)
        <li>{{ $customers }}</li>
    @endforeach
</ul>

@endsection