@extends('adminlte::page')

@section('content_header')
    <h1>Lesson Pages</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
        </div>
        <div class="box-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Teacher</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contents as $content)
                        <tr>
                            <!-- Display content details -->
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->content }}</td>
                            <td style="color: {{ in_array($content->teacher_name, ['haidah', 'gembul']) ? 'red' : 'black' }}">
                                {{ $content->teacher_name }}
                            </td>
                            
                            <td>
                                @if ($content->title == 'Kalkulus Dasar')
                                    <a href="https://youtu.be/kxtahZk67EY?si=KxYG_LpH6bX42Vkn" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Kalkulus Lanjut')
                                    <a href="https://youtu.be/TSHP0iK1Rtc?si=ss0dXf0rTY4Cli_m" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Persamaan Diferensial')
                                    <a href="https://youtu.be/JefNh485ZbU?si=Se6Lu2qhiQKhm812" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Kalkulus Vektor dan Ruang')
                                    <a href="https://youtu.be/QPR_SD4NLlI?si=GTUaZy1XpKPdgRoY" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Kalkulus Tensor dan Analisis')
                                    <a href="https://youtu.be/azjmlnXQK2A?si=-RTyeJjkPj7ict00" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Kalkulus Variasional')
                                    <a href="https://youtu.be/l7n8gQHHFyg?si=6d7AoihOae5Bitd2" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Kalkulus Dalam Fisika dan Teknik')
                                    <a href="https://www.youtube.com/channel/materi_b" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Kalkulus Pada Ruang Fungsi Kompleks')
                                    <a href="https://www.youtube.com/channel/materi_b" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Aljabar Linear')
                                    <a href="https://www.youtube.com/channel/materi_b" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Teori Graf')
                                    <a href="https://www.youtube.com/channel/materi_b" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Teori Bilangan')
                                    <a href="https://www.youtube.com/channel/materi_b" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Geometri Diferensial')
                                    <a href="https://www.youtube.com/channel/materi_b" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Teori Sistem Dinamika')
                                    <a href="https://www.youtube.com/channel/materi_b" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @elseif ($content->title == 'Kombinatorika')
                                    <a href="https://www.youtube.com/channel/materi_b" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @else
                                    <a href="#" class="btn btn-info" target="_blank">Watch on YouTube</a>
                                @endif
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
    <h1>Lesson Pages</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
        </div>
        <div class="box-body">
            <table class="table">
                <!-- Table headers go here -->
                <tbody>
                    <td>Title</td>
                    <td>ontent</td>
                    @foreach($contents as $content)
                    <tr>
                    </tr>
                        <tr>
                            <!-- Display content details -->
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->content }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop --}}
