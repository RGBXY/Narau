@extends('layouts.layouts')

@section('content')

<section id="video">
    <div class="container pt-5">
        <div>
            <h3 class="title-con border-bottom border-2">Video yang mungkin membantu</h3>
        </div>
        <div class="row py-4">
            @foreach ($more as $item)
            <div class="col-lg-4 mb-5 d-flex flex-column">
                <div  style="border-radius: 13px">
                    <a href="https://www.youtube.com/embed/{{ $item->youtube_code }}?autoplay=1&=1">
                        <img class="img-fluid mb-3" style="border-radius: 13px" src="http://img.youtube.com/vi/{{ $item->youtube_code }}/maxresdefault.jpg" alt="">
                    </a>
                    <a class="video-title fw-semibold fs-5 text-black text-decoration-none" href="https://www.youtube.com/embed/{{ $item->youtube_code }}">{{$item->judul}}</a>
                    <div class="time-car fw-semibold mt-1"><i class="time-icon" data-feather="clock"></i>{{$item->created_at->diffForHumans()}}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        {{$more->links()}}
    </div>
</section>


@endsection
