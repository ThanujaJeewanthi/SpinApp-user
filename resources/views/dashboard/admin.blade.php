@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h6 class="h5 mb-4">Admin Dashboard</h6>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dcards-card text-center bg-primary bg-opacity-10 h-100">
                        <div class="dcards-card-body">
                            <h3 class="dcards-card-title h5 mb-2">Total Users</h3>
                            <h6 class="dcards-card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="display-5 fw-bold">{{ $totalUsers }}</p>
                            <a href="#" class="dcards-card-link">Card link</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dcards-card text-center bg-primary bg-opacity-10 h-100">
                        <div class="dcards-card-body">
                            <h3 class="h5 mb-2">Active Users</h3>
                            <p class="display-5 fw-bold">{{ $activeUsers }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dcards-card text-center bg-primary bg-opacity-10 h-100">
                        <div class="dcards-card-body">
                            <h3 class="h5 mb-2">Total Orders</h3>
                            <p class="display-5 fw-bold">0</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dcards-card text-center bg-primary bg-opacity-10 h-100">
                        <div class="dcards-card-body">
                            <h3 class="h5 mb-2">Completed Orders</h3>
                            <p class="display-5 fw-bold">0</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3 class="h5 mb-0">System Management</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                {{-- <li class="mb-2"><a href="{{ route('users.index') }}" class="text-primary d-flex align-items-center"><i class="fas fa-users me-2"></i> User Management</a></li> --}}
                                {{-- <li class="mb-2"><a href="{{ route('roles.index') }}" class="text-primary d-flex align-items-center"><i class="fas fa-user-tag me-2"></i> Role Management</a></li> --}}
                                <li class="mb-2"><a href="{{ route('admin.roles.index') }}" class="text-primary d-flex align-items-center"><i class="fas fa-key me-2"></i> Permission Management</a></li>
                                {{-- <li class="mb-2"><a href="{{ route('pages.index') }}" class="text-primary d-flex align-items-center"><i class="fas fa-file me-2"></i> Page Management</a></li> --}}
                                {{-- <li><a href="{{ route('page-categories.index') }}" class="text-primary d-flex align-items-center"><i class="fas fa-folder me-2"></i> Page Categories</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3 class="h5 mb-0">Recent Activity</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-muted fst-italic">No recent activity to display</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

