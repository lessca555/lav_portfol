@extends('layout.app')
@section('title', 'Admin panel')

@section('content')
    <div class="form-upload">

        <form method="POST" action="{{ route('create_post') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="name">Nama Project:</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="kategori">Kategori:</label>
                <input type="text" name="kategori" id="kategori">
            </div>
            <div>
                <label for="image">Gambar:</label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <label for="project_start">Tanggal Mulai:</label>
                <input type="date" name="project_start" id="project_start">
            </div>
            <div>
                <label for="project_end">Tanggal Selesai:</label>
                <input type="date" name="project_end" id="project_end">
            </div>
            <div>
                <label for="tech">Teknologi:</label>
                <input type="text" name="tech" id="tech">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
