@extends('layouts.layouts')

@section('content')

<div id="content" class="content container d-flex">
    <div class="content-wrap d-flex flex-column">
        <h3 class="title-con border-bottom border-2">Materi Belajar Yang Bikin #Berkembang</h3>

        {{-- Carousel--}}
        <section class="carousel mt-1">
            <div id="carouselExampleAutoplaying" class="car-wrap carousel slide w-100" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        @foreach($carausel as $item)
                        <img src="{{ asset('storage/artikel/' . $item->image) }}" class="c-img d-block w-100" height="400px" alt="...">
                        <div class="car-cap-1 carousel-caption d-md-block">
                            <div class="carousel-caption">
                                <a class="text-center text-decoration-none text-white" href="/detail/{{ $item->slug }}">
                                    <h3 class="title-con-car">{{ $item->judul }}</h3>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="carousel-item">
                        @foreach($carausel2 as $item)
                        <img src="{{ asset('storage/artikel/' . $item->image) }}" class="c-img d-block w-100" height="400px" alt="...">
                        <div class="car-cap-1 carousel-caption d-md-block">
                            <div class="carousel-caption">
                                <a class="text-center text-decoration-none text-white" href="/detail/{{ $item->slug }}">
                                    <h3 class="title-con-car">{{ $item->judul }}</h3>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="carousel-item">
                        @foreach($carausel3 as $item)
                        <img src="{{ asset('storage/artikel/' . $item->image) }}" class="c-img d-block w-100" height="400px" alt="...">
                        <div class="car-cap-1 carousel-caption d-md-block">
                            <div class="carousel-caption">
                                <a class="text-center text-decoration-none text-white" href="/detail/{{ $item->slug }}">
                                    <h3 class="title-con-car">{{ $item->judul }}</h3>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="carousel-icon">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- Carousel --}}


        {{-- berita --}}
        <section id="berita" class="mt-5">
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
