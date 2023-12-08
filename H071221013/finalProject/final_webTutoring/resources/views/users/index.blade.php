@extends('adminlte::page')

@section('content_header')
    <h1>User Management</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
        </div>
        <div class="box-body">
            <table class="table">
                <!-- Table headers go here -->
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Create User</a>
                <br>
                <br>
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td>Action</td>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <!-- Display user details -->
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <!-- Add edit and delete buttons -->
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-xs btn-warning">Edit</a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop


{{-- @extends('adminlte::page')

@section('content_header')
    <h1>User Management</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
        </div>
        <div class="box-body">
            <table class="table">
                <!-- Table headers go here -->
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Create User</a>
                <br>
                <br>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>email</td>
                        <td>role</td>
                        <td>aksi</td>
                    </tr>
                    <br>
                    @foreach($users as $user)
                        <tr>
                            <!-- Display user details -->
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <!-- Add edit and delete buttons -->
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-xs btn-warning">Edit</a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop --}}
