@extends('layout.app')

@section('content')
    <div>
        <a href="{{ route('home') }}">Go to Home</a>
    </div>
    <div class="container mt-5">
        <h1>Admin Dashboard</h1>
        
        <!-- Role Management Section -->
        <div class="card mt-4">
            <div class="card-header">
                Role Management
            </div>
            <div class="card-body">
                <!-- Role management form and actions -->
                <p>Placeholder for role management features</p>
            </div>
        </div>

        <!-- Company Requests Section -->
        <div class="card mt-4">
            <div class="card-header">
                Company Requests
            </div>
            <div class="card-body">
                <!-- Company requests statistics and actions -->
                <p>Pending: </p>
                <p>Accepted:</p>
                <p>Action Required: </p>
            </div>
        </div>

        <!-- Candidate Activities Section -->
        <div class="card mt-4">
            <div class="card-header">
                Candidate Activities
            </div>
            <div class="card-body">
                <!-- Candidate activities statistics and actions -->
                <p>Pending: </p>
                <p>Accepted: </p>
                <p>Action Required: </p>
            </div>
        </div>
    </div>
@endsection
