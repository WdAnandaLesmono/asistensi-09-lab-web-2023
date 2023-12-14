@extends('adminlte::page')

@section('content_header')
    <h1>Edit Course</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <!-- Course edit form goes here -->
            <form action="{{ route('courses.update', $course->id) }}" method="post">
                @csrf
                @method('PUT')

                <!-- Form fields go here -->
                <div class="form-group">
                    <label for="course_name">Course Name</label>
                    <input type="text" name="course_name" value="{{ $course->course_name }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" required>{{ $course->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" value="{{ $course->start_date }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" name="end_date" value="{{ $course->end_date }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="instructor">Instructor</label>
                    <input type="text" name="instructor" value="{{ $course->instructor }}" class="form-control" required>
                </div>

                <!-- Add more fields as needed -->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Course</button>
                </div>
            </form>
        </div>
    </div>
@stop
