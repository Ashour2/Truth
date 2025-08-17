@extends('cms.parent')

@section('title', 'Show Admin')
@section('main-title', 'Admin Profile')
@section('sub-title', 'Admin Personal Information')

@section('styles')
<style>
    .profile-card {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }
    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.15);
    }
    .profile-header {
        background: linear-gradient(135deg, #007bff, #0056b3);
        padding: 30px;
        text-align: center;
        color: #fff;
    }
    .profile-header img {
        border-radius: 50%;
        border: 4px solid #fff;
        margin-bottom: 15px;
    }
    .profile-body {
        padding: 30px;
    }
    .profile-body .form-control {
        background: #f9f9f9;
        border: none;
        border-radius: 10px;
        box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.05);
    }
    .profile-body label {
        font-weight: 600;
        color: #444;
    }
    .card-footer {
        background: #fafafa;
        border-top: none;
        text-align: center;
        padding: 20px;
    }
</style>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card profile-card">
            <!-- Header -->
            <div class="profile-header">
                <img src="{{ asset('storage/images/admin/' . $admins->user->image) }}"
                     alt="User Image" width="120" height="120">
                <h3 class="mb-0">{{ $admins->user->first_name.' '.$admins->user->last_name }}</h3>
                <p class="mb-0 text-light">{{ $admins->user->city->name }}</p>
            </div>

            <!-- Body -->
            <div class="profile-body">
                <form>
                    <div class="form-group mb-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" disabled
                               value="{{ $admins->user->first_name }}">
                    </div>

                    <div class="form-group mb-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" disabled
                               value="{{ $admins->user->last_name }}">
                    </div>

                    <div class="form-group mb-3">
                        <label>Mobile</label>
                        <input type="text" class="form-control" disabled
                               value="{{ $admins->user->mobile }}">
                    </div>

                    <div class="form-group mb-3">
                        <label>Address</label>
                        <input type="text" class="form-control" disabled
                               value="{{ $admins->user->address }}">
                    </div>

                    <div class="form-group mb-3">
                        <label>Date</label>
                        <input type="date" class="form-control" disabled
                               value="{{ $admins->user->date }}">
                    </div>

                    <div class="form-group mb-3">
                        <label>Gender</label>
                        <input type="text" class="form-control" disabled
                               value="{{ $admins->user->gender }}">
                    </div>

                    <div class="form-group mb-3">
                        <label>Status</label>
                        <input type="text" class="form-control" disabled
                               value="{{ $admins->user->status }}">
                    </div>

                    <div class="form-group mb-3">
                        <label>City</label>
                        <input type="text" class="form-control" disabled
                               value="{{ $admins->user->city->name }}">
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <div class="card-footer">
                <a href="{{ route('admins.index') }}" class="btn btn-info px-4">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
@endsection
