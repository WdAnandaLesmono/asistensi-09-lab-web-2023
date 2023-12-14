@extends('layouts.main')

@section('container')

<div class="container">
    <h1 class="text-center">Login Page</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text" id="addon-wrapping">Password</span>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection
