@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Supplier</h1>

        <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control" value="{{ $supplier->firstname }}" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" class="form-control" value="{{ $supplier->lastname }}" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="Male" {{ $supplier->gender === 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $supplier->gender === 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" value="{{ $supplier->date_of_birth }}" required>
            </div>
            <div class="form-group">
                <label for="street">Street Address</label>
                <input type="text" name="street" class="form-control" value="{{ $supplier->street }}">
            </div>
            <!-- Other address fields (city, province/state, country, zipcode) -->
            <button type="submit" class="btn btn-primary">Update Supplier</button>
        </form>
    </div>
@endsection
