@extends('adminlte::page')

@section('content_header')
    <h1>Content Management</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
        </div>
        <div class="box-body">
            <table class="table">
                <!-- Table headers go here -->
                <tbody>
                    <a href="{{ route('contents.create') }}" class="btn btn-primary">Create content</a>
                    <td>title</td>
                    <td>content</td>
                    <td>aksi </td>
                    @foreach($contents as $content)
                    <tr>
                    </tr>
                        <tr>
                            <!-- Display content details -->
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->content }}</td>
                            <td>
                                <!-- Add edit and delete buttons -->
                                <a href="{{ route('contents.edit', $content->id) }}" class="btn btn-xs btn-warning">Edit</a>
                                <form action="{{ route('contents.destroy', $content->id) }}" method="post" style="display:inline;">
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

