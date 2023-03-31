@extends('layout.app')

@section('content')

<div class="project-detail">
    <img src="{{ url('images') }}/{{ $projects->image }}" alt="{{ $projects->name }}" width="200">

    <div class="content">
        <table>
            <tr>
                <td>Nama Project</td>
                <td>:</td>
                <td>{{ $projects->name }}</td>
            </tr>
            <tr>
                <td>Category</td>
                <td>:</td>
                <td>{{ $projects->kategori }}</td>
            </tr>
            <tr>
                <td>Project Start</td>
                <td>:</td>
                <td>{{ $projects->project_start }}</td>
            </tr>
            <tr>
                <td>Nama Project</td>
                <td>:</td>
                <td>{{ $projects->project_end }}</td>
            </tr>
        </table>
        <a href="#" class="demo" target="_blank">Demo</a>
    </div>
</div>

@endsection
