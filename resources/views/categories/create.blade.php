@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Category</h1>

        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" name="category_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
@endsection
