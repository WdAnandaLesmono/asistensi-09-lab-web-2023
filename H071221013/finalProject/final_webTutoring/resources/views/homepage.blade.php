@extends('adminlte::page')

@push('css')
    <link rel="stylesheet" href="{{ asset('path/to/your/custom.css') }}">
@endpush

@section('content_header')
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h1 class="box-title">Course</h1>
        </div>
        <div class="box-body">
            <div class="row justify-content-end">
                <div class="col-md-6 ml-auto">
                    <form action="{{ route('homepage') }}" method="GET" class="form-inline">
                        <div class="form-group" style="justify-content: right;">
                            <label for="search">Search Course:</label>
                            <input type="text" class="form-control" id="search" name="search" value="{{ request('search') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
            <!-- Tambahkan bagian untuk menampilkan hasil pencarian -->
            @if(count($courses) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{ $course->course_name }}</td>
                                <!-- Ubah link sesuai dengan link yang sesuai dengan setiap mata pelajaran -->
                                <td>
                                    @if ($course->course_name == 'Kalkulus Dasar')
                                        <a href="https://people.usd.ac.id/~dosen/repository/febi/bukuajar-kalkulus.pdf" class="btn btn-info" target="_blank">Teori</a>
                                    @elseif ($course->course_name == 'Kalkulus Vektor dan Ruang')
                                        <a href="https://informatika.stei.itb.ac.id/~rinaldi.munir/AljabarGeometri/2020-2021/Algeo-14-Ruang-vektor-umum-Bagian1.pdf" class="btn btn-info" target="_blank">Teori</a>
                                    @elseif ($course->course_name == 'Aljabar Linier')
                                        <a href="https://pustaka.ut.ac.id/lib/wp-content/uploads/pdfmk/PEMA4420-M1.pdf" class="btn btn-info" target="_blank">Teori</a>
                                    @elseif ($course->course_name == 'Geometri Diferensial')
                                        <a href="https://id.wikipedia.org/wiki/Geometri_diferensial" class="btn btn-info" target="_blank">Teori</a>
                                    @elseif ($course->course_name == 'Teori Sistem Dinamika')
                                        <a href="https://www.researchgate.net/publication/368426885_PENGANTAR_PEMODELAN_SISTEM_DINAMIK" class="btn btn-info" target="_blank">Teori</a>
                                    @else
                                        <a href="#" class="btn btn-info" target="_blank">Teori</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No results found.</p>
            @endif
            {{-- {{ $courses->links() }} --}}
        </div>
    </div>
@stop




{{-- @extends('adminlte::page')

@push('css')
    <link rel="stylesheet" href="{{ asset('path/to/your/custom.css') }}">
@endpush

@section('content_header')
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h1 class="box-title">Course</h1>
        </div>
        <div class="box-body">
            <div class="row justify-content-end">
                <div class="col-md-6 ml-auto">
                    <form action="{{ route('homepage') }}" method="GET" class="form-inline">
                        <div class="form-group" style="justify-content: right;">
                            <label for="search">Search Course:</label>
                            <input type="text" class="form-control" id="search" name="search" value="{{ request('search') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
            <!-- Tambahkan bagian untuk menampilkan hasil pencarian -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->course_name }}</td>
                            <!-- Ubah link sesuai dengan link yang sesuai dengan setiap mata pelajaran -->
                            <td>
                                @if ($course->course_name == 'Kalkulus Dasar')
                                    <a href="https://people.usd.ac.id/~dosen/repository/febi/bukuajar-kalkulus.pdf" class="btn btn-info" target="_blank">Teori</a>
                                @elseif ($course->course_name == 'Kalkulus Vektor dan Ruang')
                                    <a href="https://informatika.stei.itb.ac.id/~rinaldi.munir/AljabarGeometri/2020-2021/Algeo-14-Ruang-vektor-umum-Bagian1.pdf" class="btn btn-info" target="_blank">Teori</a>
                                @elseif ($course->course_name == 'Aljabar Linier')
                                    <a href="https://pustaka.ut.ac.id/lib/wp-content/uploads/pdfmk/PEMA4420-M1.pdf" class="btn btn-info" target="_blank">Teori</a>
                                @elseif ($course->course_name == 'Geometri Diferensial')
                                    <a href="https://id.wikipedia.org/wiki/Geometri_diferensial" class="btn btn-info" target="_blank">Teori</a>
                                @elseif ($course->course_name == 'Teori Sistem Dinamika')
                                    <a href="https://www.researchgate.net/publication/368426885_PENGANTAR_PEMODELAN_SISTEM_DINAMIK" class="btn btn-info" target="_blank">Teori</a>
                                @else
                                    <a href="#" class="btn btn-info" target="_blank">Teori</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $courses->links() }} --}}
        {{-- </div>
    </div>
@stop --}} 




{{-- @extends('adminlte::page')

@push('css')
    <link rel="stylesheet" href="{{ asset('path/to/your/custom.css') }}">
@endpush

@section('content_header')
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h1 class="box-title">Course</h1>
        </div>
        <div class="box-body">
            <div class="row justify-content-end">
                <div class="col-md-6 ml-auto">
                    <form action="{{ route('homepage') }}" method="GET" class="form-inline">
                        <div class="form-group" style="justify-content: right;">
                            <label for="search">Search Course:</label>
                            <input type="text" class="form-control" id="search" name="search" value="{{ request('search') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
            <!-- Tambahkan bagian untuk menampilkan hasil pencarian -->
            <table class="table">
                <!-- Table headers go here -->
                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <!-- Display course details -->
                            <td>{{ $course->course_name }}</td>
                            <!-- Add other columns as needed -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $courses->links() }} --}}
        {{-- </div>
    </div>
@stop --}} 
