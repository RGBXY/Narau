@extends('layouts.layouts')

@section('content')
<section id="hero" class="hero">
    <div class="hero-wrap container">
        <div class="hero-con">
            <h1>Gak Ada Kata Terlambat Untuk Orang Yang Mau Belajar.</h1>
            <p>Kita gak cuma ngajarin pelajaran, tapi cara berpikir. Tanya aja ke jutaan alumni yang udah masuk kampus idaman!</p>
            <a class="text-center fw-bold" href="{{ '/.#content' }}" href="">
                <div class="hero-but bg-warning shadow">
                    Ayo Mulai!
                </div>
            </a>
        </div>
        <div class="hero-img-wrap">
            <img src="{{ asset('assets/img/ban-img.png') }}" alt="">
        </div>
    </div>
</section>

{{-- <div style="margin-top: -30px;">
    <div class="scroll container">
        <div class="row">
            <div class=" col-lg-3">
                <div class="box bg-white rounded-3 p-4 d-flex justify-content-between align-items-center shadow">
                    <h5>Materi Berkualitas</h5>
                    <img src="{{asset('assets/icon/ic-book.png')}}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="box col-lg-3">
                <div class="bg-white rounded-3 p-4 d-flex justify-content-between align-items-center shadow">
                    <h5>Terverifikasi Ahli</h5>
                    <img src="{{asset('assets/icon/ic-book.png')}}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="box col-lg-3">
                <div class="bg-white rounded-3 p-4 d-flex justify-content-between align-items-center shadow">
                    <h5>Mudah Dipahami</h5>
                    <img src="{{asset('assets/icon/ic-book.png')}}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="box col-lg-3">
                <div class="bg-white rounded-3 p-4 d-flex justify-content-between align-items-center shadow">
                    <h5>Pendidikan Berkualitas</h5>
                    <img src="{{asset('assets/icon/ic-book.png')}}" height="55" width="55" alt="">
                </div>
            </div>
        </div>
    </div>
</div> --}}

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
                <div class="text-center">
                    <a href="{{'berita'}}" class="btn btn-outline-warning">Artikel Lainnya</a>
                </div>
            </div>
        </section>
    </div>

    {{-- Side Content --}}
    <aside id="side">
        <div id="side-content" class="side-content sticky-top">
            <h3 class="title-con border-bottom border-2">Artikel Trending <i data-feather="coffee"></i></h3>
            <div class="side-con d-flex flex-column-reverse">
                @foreach($artikels as $item)
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

{{-- Vid --}}
<section id="video">
    <div class="container py-5">
        <div>
            <h3 class="title-con border-bottom border-2">Video yang mungkin membantu</h3>
        </div>
        <div class="row py-4">
            @foreach ($videos as $item)
            <div class="col-lg-4">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/{{ $item->youtube_code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            @endforeach
        </div>

        <div class="text-center">
            <a href="{{route('more-video')}}" class="btn btn-outline-warning">Video Lainnya</a>
        </div>

    </div>
</section>
{{-- Vid --}}

{{-- Prom--}}
{{-- <section id="join" class="mt-4">
    <div class="halo container text-black d-flex flex-wrap justify-content-center">
        <div class="hero-img">
            <img src="{{asset('assets/img/join.jpg')}}" alt="">
</div>
<div class="hero-title text-start">
    <div class="hero-text">
        <span class="fw-bold">Mau nulis artikel juga</span> <br><span class="fw-bolder">Join Sekarang!</span>

    </div>
    <h4 class="text-secondary text-start mb-5">Kalo kamu merasa sepuh, bisa kali dibagi-bagi ilmunya</h4>
    <a href="{{route('login')}}" class="read py-3 px-4 fw-semibold rounded-pill bg-none text-decoration-none">Join Now</a>
</div>
</div>
</section> --}}
{{-- Prom --}}
@endsection
