@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Supplier</h1>

        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="street">Street Address</label>
                <input type="text" name="street" class="form-control">
            </div>
            <!-- Other address fields (city, province/state, country, zipcode) -->
            <button type="submit" class="btn btn-primary">Create Supplier</button>
        </form>
    </div>
@endsection
