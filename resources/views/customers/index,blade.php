@extends('layouts.app')

@section('content')
    <h1>List of Customers</h1>

    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Add New Customer</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->fullname }}</td>
                    <td>{{ $customer->gender }}</td>
                    <td>{{ $customer->date_of_birth }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
