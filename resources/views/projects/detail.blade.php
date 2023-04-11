@extends('layout.app')

@section('content')
    <div class="project-detail">
        <div class="detail-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ url('images') }}/{{ $projects->image }}" alt="{{ $projects->name }}" width="200">
                </div>
                <div class="swiper-slide">
                    <img src="{{ url('images') }}/{{ $projects->image1 }}" alt="{{ $projects->name }}" width="200">
                </div>
                <div class="swiper-slide">
                    <img src="{{ url('images') }}/{{ $projects->image2 }}" alt="{{ $projects->name }}" width="200">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="carousel">
        </div>

        <div class="content">
            <table>
                <tr>
                    <td>Nama Project</td>
                    <td>:</td>
                    <td>{{ $projects->name }}</td>
                </tr>
                <tr>
                    <td>Deskripsi Project</td>
                    <td>:</td>
                    <td>{{ $projects->deskripsi }}</td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>:</td>
                    <td>{{ $projects->kategori }}</td>
                </tr>
                <tr>
                    <td>Project Start - End</td>
                    <td>:</td>
                    <td>{{ $projects->project_start }} until {{ $projects->project_end }}</td>
                </tr>
                <tr>
                    <td>Technology</td>
                    <td>:</td>
                    <td>{{ $projects->tech }}</td>
                </tr>
            </table>
            <a href="{{ $projects->link }}" class="demo" target="_blank">Demo</a>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".detail-slide", {
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
