@extends('layouts.app')

@section('title', 'Edit user')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">Edit User</div>
                </div>
            </div>

            <div class="card">
                <form action="{{ route('user.update', $user) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text"
                                class="form-control @error('name')
                                is-invalid
                            @enderror"
                                name="name" value="{{ $user->name }}">
                            @error('name')
                                <div class="invalid-feecback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email"
                                class="form-control @error('email')
                                is-invalid
                            @enderror"
                                name="email" value="{{ $user->email }}">
                            @error('email')
                                <div class="invalid-feecback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="string" class="form-control" name="phone" value="{{ $user->phone }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Roles</label>
                            <div class="selectgroup w-100">
                                <label class="selectgroup-item">
                                    <input type="radio" name="roles" value="admin" class="selectgroup-input"
                                        @if ($user->roles == 'admin') checked @endif>
                                    <span class="selectgroup-button">Admin</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="roles" value="dosen" class="selectgroup-input"
                                        @if ($user->roles == 'dosen') checked @endif>
                                    <span class="selectgroup-button">Dosen</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="roles" value="mahasiswa" class="selectgroup-input"
                                        @if ($user->roles == 'mahasiswa') checked @endif>
                                    <span class="selectgroup-button">Mahasiswa</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Domicile</label>
                            <input type="string" class="form-control" name="address" value="{{ $user->address }}">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
