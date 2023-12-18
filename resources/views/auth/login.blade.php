@extends('layouts.loglay')

@section('content')
    <section class="log d-flex justify-content-center align-items-center">
        <div class="cen-log ">
            <div class="log-wrap container">
                <h3 class="log-title fw-bold mb-3">Welcome back <br> Sign in to continue</h3>
                <div class="mb-3">
                    <i class="icon-hero" data-feather="github"></i>
                    <i class="icon-hero" data-feather="facebook"></i>
                    <i class="icon-hero" data-feather="twitter"></i>
                </div>
                <h3 class="fw-medium text-secondary fs-5 mb-4">or use your email for login :</h3>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email"> 
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" class="but-log mb-2">Sign in</button>
                </form>
                <a class="text-decoration-none" href="/">Kembali Keberanda</a>
            </div>
        </div>
    </section>
@endsection