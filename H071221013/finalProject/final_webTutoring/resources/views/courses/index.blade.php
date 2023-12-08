@extends('adminlte::page')

@section('content_header')
    <h1>Course Management</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
        </div>
        <div class="box-body">
            <table class="table">
                <a href="{{ route('courses.create') }}" class="btn btn-primary">Create course</a>
                <br>
                <br>
                <!-- Table headers go here -->
                <tbody>
                    <tr>
                        <td>nama Kursus</td>
                        <td>Deskripsi Kursus</td>
                        <td>tanggal Dimulai</td>
                        <td>Tanggal Berakhir</td>
                        <td>Pengajar</td>
                        <td>Aksi</td>
                    </tr>
                    @foreach($courses as $course)
                        <tr>
                            <!-- Display course details -->
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->description }}</td>
                            <td>{{ $course->start_date }}</td>
                            <td>{{ $course->end_date }}</td>
                            <td>{{ $course->instructor }}</td>
                            @if (Auth::user()->name == 'Admin')
                            <td>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-xs btn-warning">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                </form>
                            </td> 
                            @else
                            @if ($course->instructor == Auth::user()->name)
                            <td>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-xs btn-warning">Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                </form>
                            </td>
                            @else
                                <td>Not Auth</td>
                            @endif
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
