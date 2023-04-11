@extends('layout.app')
@section('title', 'Admin panel')

@section('content')

    <div class="title-cms">
        <h1>Selamat <span class="waktu"></span> {{ Auth::user()->name }}</h1>
    </div>
    <div class="form-upload">
        {{-- <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form> --}}
        <!-- The sidebar -->
        <div class="sidebar-cms">
            <a class="active" href="#home">Add Project</a>
            <a href="#news">Posts</a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="logout" type="submit">Logout</button>
            </form>
        </div>

        <!-- Page content -->
        <div class="content-sb">

            <div class="row">

                <form action="{{ route('create_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <label for="name">Project Name:</label>
                        <input name="name" id="name" type="text" placeholder="Project Name" />
                    </div>
                    <div class="input-group">
                        <label for="desc">Deskripsi project:</label>
                        <textarea id="desc" name="deskripsi" id="" cols="30" rows="10" placeholder="Deskripsi project"></textarea>
                    </div>
                    <div class="input-group">
                        <label for="categ">Kategori project:</label>
                        <input id="categ" type="text" placeholder="Kategori" name="kategori" />
                    </div>
                    <div class="input-group">
                        <label for="img">Image project:</label>
                        <input id="img" name="image" type="file" placeholder="Image" />
                    </div>
                    <div class="input-group">
                        <label for="img">Image project:</label>
                        <input id="img" name="image1" type="file" placeholder="Image" />
                    </div>
                    <div class="input-group">
                        <label for="img">Image project:</label>
                        <input id="img" name="image2" type="file" placeholder="Image" />
                    </div>
                    <div class="input-group">
                        <label for="start">Project Start:</label>
                        <input id="start" name="project_start" type="date" placeholder="Project Start" />
                    </div>
                    <div class="input-group">
                        <label for="end">Project End</label>
                        <input id="end" name="project_end" type="date" placeholder="Project End" />
                    </div>
                    <div class="input-group">
                        <label for="tech">Tech</label>
                        <input name="tech" id="tech" type="text" placeholder="Technology" />
                    </div>
                    <div class="input-group">
                        <label for="link">Link Project</label>
                        <input name="link" id="link" type="text" placeholder="Link to your project" />
                    </div>
                    <button type="submit" class="btn">Upload your content</button>
                </form>
            </div>

        </div>

        <script>
            let waktu = document.querySelector(".waktu");
            let date = new Date();
            let hours = date.getHours();

            if (hours >= 6 && hours < 12) {
                waktu.textContent = "pagi";
                waktu.style.color = "#fff";
            } else if (hours >= 12 && hours < 15) {
                waktu.textContent = "siang";
                waktu.style.color = "#fff2cc";
            } else if (hours >= 15 && hours < 18) {
                waktu.textContent = "sore";
                waktu.style.color = "#cfe2f3";
            } else {
                waktu.textContent = "malam";
                waktu.style.color = "#000";
            }
        </script>
    @endsection
