@extends('layouts.layouts')

@section('content')
<section id="video">
    <div class="container py-5">
        <div>
            <h3 class="title-con border-bottom border-2">Video yang pasti membantu</h3>
        </div>
        <div class="row py-4">
            @foreach ($more as $item)
            <div class="col-lg-4">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/{{ $item->youtube_code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection