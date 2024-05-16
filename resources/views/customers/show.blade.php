@extends('layouts.app')

@section('content')
    <h1>Customer Details</h1>

    <div>
        <p><strong>Name:</strong> {{ $customer->fullname }}</p>
        <p><strong>Gender:</strong> {{ $customer->gender }}</p>
        <p><strong>Date of Birth:</strong> {{ $customer->date_of_birth }}</p>
        <p><strong>Address:</strong> {{ $customer->address }}</p>
    </div>

    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Edit</a>

    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
@endsection
