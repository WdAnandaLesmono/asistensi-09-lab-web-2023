@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <!-- Tambahkan button di sini -->
                    <a href="homepage" class="btn btn-primary" style="margin : 10px">go to homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

