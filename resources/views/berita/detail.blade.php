@extends('layouts.layouts')

@section('content')
<section id="detail" class="detail">
    <div class="detail-wrap container">
        <div class="detail-con-wrap mb-4">
            
            <h1 class="mb-3">{{$artikel->judul}}</h1>
            <img class="shadow-sm rounded-circle mb-2" width="50px" src="{{ asset('assets/icon/profile.jpeg') }}" alt="">
            <p class="mb-3 fs-5">by <span class="text-warning fw-bold">Derren</span></p>
            <img class="img-con rounded mb-3" src="{{ asset('storage/artikel/' . $artikel->image) }}" width="100%" height="450px">
            <div>
                <p>{!! $artikel->desc !!}</p>
            </div>
        </div>


        <aside id="side">
            <div id="side-content" class="side-content sticky-top">
                <h2 class="fw-bold border-bottom border-2">Artikel Lainnya <i data-feather="coffee"></i></h2>
                <div class="side-con d-flex flex-column-reverse">
                    @foreach($artikels as $item)
                    <div class="side-con-wrap d-flex flex-row-reverse justify-content-between">
                        <img class="rounded" height="100px" width="150px" src="{{ asset('storage/artikel/' . $item->image) }}" alt="">
                        <div class="side-text">
                            <a href="/detail/{{ $item->slug }}" class="text-decoration-none">
                                <h1 class="fs-6 fw-bold text-black">{{ $item->judul }}</h1>
                            </a>
                            <p>by <span class="text-warning semibold">Derren</span></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
</section>
@endsection
