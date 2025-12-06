@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to Your Dashboard</h1>
    <p>Hello, {{ Auth::user()->name }}! Here you can manage your profile and view your activities.</p>

    <div class="card">
        <div class="card-header">Your Activities</div>
        <div class="card-body">
            <p>No activities to display at the moment.</p>
        </div>
    </div>
</div>
@endsection