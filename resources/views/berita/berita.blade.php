@extends('layouts.layouts')

@section('content')
<div class="container d-flex" style="margin-top: 3rem">

    <div id="new-artk" class="d-flex flex-column w-75">
        {{-- berita --}}
        <section id="berita">
            <div class="mb-4 d-flex">
                <h2 id="title" class="fw-bold border-bottom border-2">Artikel Terbaru <i data-feather="book-open"></i></h2>
            </div>

            <div>
                @foreach($artikels as $item)
                <div id="content-artik" class="d-flex mb-4">
                    <img class="rounded" src="{{ asset('storage/artikel/' . $item->image) }}" height="200" width="280px" alt="">
                    <div class="ms-4">
                        <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-black">
                            <h1 class="artikel-title">{{ $item->judul }}</h1>
                        </a>
                        <p>by <span class="text-warning fw-semibold">Rusdi Jawir</span></p>
                        <p class="fw-medium">Arknights Tier List — Seperti yang kita ketahui, Arknights telah banyak merilis update dengan side story event, contingency contract, dan masih banyak lagi. Ini merupakan</p>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- berita --}}

            {{-- Tanya --}}
            
            {{-- <section id="tanya">
                <div class="my-4">
                    <h2 id="title" class="fw-bold border-bottom border-2">Tanya<i data-feather="book-open"></i></h2>
                </div>
                @foreach($artikels as $item)
                <div class="d-flex flex-wrap">
                    <div class="card border-none me-4 mb-4" style="width: 24.5rem;">
                        <img src="{{ asset('storage/artikel/' . $item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-semibold fs-5">{{ $item->judul }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </section> --}}
            {{-- Tanya --}}
    </div>

    <aside id="side">
        <div id="sticky-side" class="sticky-top">
            <h2 class="fw-bold border-bottom border-2">Artikel Trending <i data-feather="coffee"></i></h2>

            @foreach($artikels as $item)
            <div class="d-flex flex-row-reverse justify-content-between pt-4">
                <img class="rounded" height="100px" width="px" src="{{ asset('storage/artikel/' . $item->image) }}" alt="">
                <div class="w-75">
                    <a href="" class="text-decoration-none">
                        <h1 class="fs-6 text-black">{{ $item->judul }}</h1>
                    </a>
                    <p>by <span class="text-warning semibold">Derren</span></p>
                </div>
            </div>

            @endforeach
        </div>
    </aside>
</div>
@endsection
