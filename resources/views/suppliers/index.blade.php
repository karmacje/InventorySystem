@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Suppliers</h1>

        <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-3">Create New Supplier</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Supplier ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->firstname }} {{ $supplier->lastname }}</td>
                        <td>{{ $supplier->gender }}</td>
                        <td>{{ $supplier->date_of_birth }}</td>
                        <td>{{ $supplier->street }}, {{ $supplier->city }}, {{ $supplier->province_or_state }}, {{ $supplier->country }}, {{ $supplier->zipcode }}</td>
                        <td>
                            <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <!-- Add delete button if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
