@extends('adminlte::page')

@section('content_header')
    <h1>Edit Content</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <!-- Content edit form goes here -->
            <form action="{{ route('contents.update', $content->id) }}" method="post">
                @csrf
                @method('PUT')

                <!-- Form fields go here -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $content->title }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" required>{{ $content->content }}</textarea>
                </div>

                <!-- Add more fields as needed -->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Content</button>
                </div>
            </form>
        </div>
    </div>
@stop
