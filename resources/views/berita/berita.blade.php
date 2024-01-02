@extends('layouts.layouts')

@section('content')

<div id="content" class="content container d-flex">
    <div class="content-wrap d-flex flex-column">
        <h3 class="title-con border-bottom border-2">Materi Belajar Yang Bikin #Berkembang</h3>

        {{-- Carousel--}}
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-controls">
                <div class="carousel-indicators">
                    @foreach($carausel as $item)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-image: url('{{ asset('storage/artikel/' . $item->image) }}');"></button>
                    @endforeach
                    @foreach($carausel2 as $item)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="background-image: url('{{ asset('storage/artikel/' . $item->image) }}');"></button>
                    @endforeach
                    @foreach($carausel3 as $item)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="background-image: url('{{ asset('storage/artikel/' . $item->image) }}');"></button>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="carousel-inner">
                @foreach($carausel as $item)
                <div class="c-img carousel-item active" data-bs-interval="10000" style="background-image: url('{{ asset('storage/artikel/' . $item->image) }}')">
                    <a class="car-cap-1 container text-decoration-none text-white" href="/detail/{{ $item->slug }}">
                        <h3 class="container title-con-car">{{ $item->judul }}</h3>
                        <div class="time-car container article-desc fw-semibold"><i class="time-icon" data-feather="clock"></i>{{$item->created_at->diffForHumans()}}</div>
                    </a>
                </div>
                @endforeach
                @foreach($carausel2 as $item)
                <div class="c-img carousel-item" data-bs-interval="2000" style="background-image: url('{{ asset('storage/artikel/' . $item->image) }}')">
                    <a class="car-cap-1 container text-decoration-none text-white" href="/detail/{{ $item->slug }}">
                        <h3 class="container title-con-car">{{ $item->judul }}</h3>
                        <div class="time-car container fw-semibold"><i class="time-icon" data-feather="clock"></i>{{$item->created_at->diffForHumans()}}</div>
                    </a>
                </div>
                @endforeach
                @foreach($carausel3 as $item)
                <div class="c-img carousel-item" style="background-image: url('{{ asset('storage/artikel/' . $item->image) }}')">
                    <a class="car-cap-1 container text-decoration-none text-white" href="/detail/{{ $item->slug }}">
                        <h3 class="container title-con-car">{{ $item->judul }}</h3>
                        <div class="time-car container article-desc fw-semibold"><i class="time-icon" data-feather="clock"></i>{{$item->created_at->diffForHumans()}}</div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
        {{-- Carousel --}}


        {{-- berita --}}
        <section id="berita" style="margin-top: 7rem">
            <div class="mb-4 d-flex">
                <h3 class="title-con title border-bottom border-2">Artikel Terbaru <i data-feather="book-open"></i></h3>
            </div>

            <div>
                @foreach($artikels as $item)
                <div id="article-con" class="article-con d-flex mb-4">
                    <img class="rounded" src="{{ asset('storage/artikel/' . $item->image) }}" height="200" width="280px" alt="">
                    <div class="ms-4">
                        <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-black">
                            <h3 class="artikel-title">{{ $item->judul }}</h3>
                        </a>
                        <p>by <span class="text-warning fw-semibold">Derren</span></p>
                        <div class="article-desc fw-semibold">{{$item->created_at->diffForHumans()}}</div>
                    </div>
                </div>

                @endforeach
                <div>

                </div>
                {{$artikels->links()}}
            </div>
        </section>
    </div>

    {{-- Side Content --}}
    <aside id="side">
        <div id="side-content" class="side-content sticky-top">
            <h3 class="title-con border-bottom border-2">Artikel Trending <i data-feather="coffee"></i></h3>
            <div class="side-con d-flex flex-column-reverse">
                @foreach($side as $item)
                <div class="side-con-wrap d-flex flex-row-reverse justify-content-between">
                    <img class="rounded" height="100px" width="150px" src="{{ asset('storage/artikel/' . $item->image) }}" alt="">
                    <div class="side-text">
                        <a href="/detail/{{ $item->slug }}" class="text-decoration-none">
                            <h3 class="title-con fs-6 text-black">{{ $item->judul }}</h3>
                        </a>
                        <p>by <span class="text-warning semibold">Derren</span></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </aside>
    {{-- Side Content --}}
</div>

@endsection
