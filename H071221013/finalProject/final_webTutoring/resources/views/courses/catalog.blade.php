{{-- @extends('adminlte::page')

@section('content_header')
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Course List</h3>
        </div>
        <div class="box-body">
            <table class="table">
                <!-- Table headers go here -->
                <tbody>
                    <tr>
                        <td>nama Kursus</td>
                        <td>Deskripsi Kursus</td>
                        <td>tanggal Dimulai</td>
                        <td>Tanggal Berakhir</td>
                        <td>Pengajar</td>
                    </tr>
                    @foreach($courses as $course)
                        <tr>
                            <!-- Display course details -->
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->description }}</td>
                            <td>{{ $course->start_date }}</td>
                            <td>{{ $course->end_date }}</td>
                            <td>
                                <a href="https:/wa.me/6282177418098"  class="btn btn-info">
                                <img src="https://example.com/path/to/whatsapp_logo.png" alt="WhatsApp Logo" width="20" height="20"> {{ $course->instructor }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop --}}

@extends('adminlte::page')

@section('content_header')
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">List of Courses</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Course Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Teachers</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($courses as $course)
                        <tr>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->description }}</td>
                            <td>{{ $course->start_date }}</td>
                            <td>{{ $course->end_date }}</td>
                            <td>
                                <a href="https://wa.me/62{{ $course->instructor_number }}" class="btn btn-info" target="_blank">
                                    <i class="fab fa-whatsapp"></i> {{ $course->instructor }}
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No courses available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
