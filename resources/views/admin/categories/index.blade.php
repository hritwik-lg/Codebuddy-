@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categories Tree</h1>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mb-3">Back</a>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3">Add New Category</a>
    
    @if ($categories->isEmpty())
        <div class="alert alert-warning">No categories found.</div>
    @else
        <ul class="list-group">
            @foreach ($categories as $category)
                @include('admin.categories.tree_item', ['category' => $category])
            @endforeach
        </ul>
    @endif
</div>
@endsection