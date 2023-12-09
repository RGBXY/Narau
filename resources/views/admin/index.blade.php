@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold mb-3 text-center">Halaman Dashboard Admin</h3>
            <p class="text-center">Selamat datang di halaman dashboard admin</p>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0 mb-3 bg-warning" style=" height: 380px;">
                        <img src="{{ asset('assets/img/dashboard-art.jpg') }}" height="210px" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Artikel</h5>
                          <p class="card-text">Tambah, edit, atau hapus artikel</p>
                          <a href="{{route('blog')}}" class="btn btn-dark">Detail</a>
                        </div>
                      </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm border-0 bg-danger" style=" height: 380px;">
                        <img src="{{ asset('assets/img/dashboard-youtube.png') }}" height="210px" class="card-img-top" alt="...">
                        <div class="card-body text-white">
                          <h5 class="card-title">Video</h5>
                          <p class="card-text">Tambah, edit, atau hapus video youtube</p>
                          <a href="{{route('video')}}" class="btn btn-light" style="background-color: rgb(255, 255, 255);">Detail</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection