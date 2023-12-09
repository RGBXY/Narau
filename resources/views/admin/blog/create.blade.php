@extends('layouts.layouts')

@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">

        <div class="d-flex">
            <a href="{{route('blog')}}">Blog</a>
            <div class="mx-1"> . </div>
            <a href="">Buat Artikel</a>
        </div>

        <h4 class="fw-bold mb-3">Halaman buat artikel</h4>

        <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="">Masukan Judul Artikel</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{old('judul')}}">

                @error('judul')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="form-group mb-4">
                <label for="">Pilih Foto Kegiatan</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                @error('image')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="">Artikel Berita</label>
                <textarea name="desc" id="summernote">
                    {{old('desc')}}
                </textarea>

                @error('desc')
                <div class="text-danger">
                    {{$message}}                    
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</section>
@endsection
