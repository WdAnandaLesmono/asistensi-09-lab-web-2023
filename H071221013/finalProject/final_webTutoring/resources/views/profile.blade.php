
@extends('adminlte::page')

@section('content_header')
    <h1>User Profile</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
        </div>
        <div class="box-body">
            <table class="table">
                <!-- Table headers go here -->
                <br>
                <br>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>email</td>
                        <td>role</td>
                        <td>Umur</td>
                        <td>Tempat Lahir</td>
                        <td>Tempat Tinggal</td>
                    </tr>
                    <br>
                    @php
                        $user = auth()->user();
                    @endphp
                    <tr>
                        <!-- Display user details -->
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->Umur }}</td>
                        <td>{{ $user->Tempat_Lahir }}</td>
                        <td>{{ $user->Tempat_Tinggal }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
