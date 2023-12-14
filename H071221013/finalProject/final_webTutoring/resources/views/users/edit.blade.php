@extends('adminlte::page')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <!-- User edit form goes here -->
            <form action="{{ route('admin.users.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')

                <!-- Form fields go here -->
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" class="form-control" required>
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="teacher" {{ $user->role === 'teacher' ? 'selected' : '' }}>Teacher</option>
                        <option value="student" {{ $user->role === 'student' ? 'selected' : '' }}>Student</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="Umur">Umur (20-40):</label>
                    <input type="number" name="Umur" value ="{{ $user->Umur }}"class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="Tempat_Lahir">Tempat Lahir:</label>
                    <input type="text" name="Tempat_Lahir" value ="{{ $user->Tempat_Lahir }}" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="Tempat_Tinggal">Tempat Tinggal:</label>
                    <input type="text" name="Tempat_Tinggal" value ="{{ $user->Tempat_Tinggal }}" class="form-control" required>
                </div>


                <!-- Add more fields as needed -->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update User</button>
                </div>
            </form>
        </div>
    </div>
@stop
