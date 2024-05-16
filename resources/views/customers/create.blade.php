@extends('layouts.app')

@section('content')
    <h1>Add New Customer</h1>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" class="form-control" required>
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
            <label for="address">Address</label>
            <textarea name="address" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
