@extends('layouts.app')

@section('content')
    <h1>Edit Customer</h1>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" class="form-control" value="{{ $customer->fullname }}" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" required>
                <option value="Male" {{ $customer->gender === 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $customer->gender === 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" value="{{ $customer->date_of_birth }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control" required>{{ $customer->address }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
