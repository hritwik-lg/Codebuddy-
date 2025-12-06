@extends('layouts.app')

@section('content')
<div class="container col-6">
    <h1>{{ isset($category) ? 'Edit Category' : 'Create Category' }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ isset($category) ? route('admin.categories.update', $category->id) : route('admin.categories.store') }}" method="POST">
    @csrf
    @if(isset($category))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" class="form-control" value="{{ $category->name ?? old('name') }}" required>
    </div>

    <div class="form-group">
        <label for="parent_id">Parent Category</label>
        <select name="parent_id" class="form-control">
            <option value="">-- Select Parent --</option>
            @foreach($categories as $parent)
                <option value="{{ $parent->id }}" 
                    {{ (isset($category) && $category->parent_id == $parent->id) ? 'selected' : '' }}>
                    {{ $parent->name }}
                </option>
            @endforeach
        </select>
    </div>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
    <button type="submit" class="btn btn-primary">
        {{ isset($category) ? 'Update' : 'Create' }}
    </button>
</form>
</div>
@endsection