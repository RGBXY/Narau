@extends('layouts.layouts')

@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">

        <h3 class="fw-bold mb-3">Halaman Blog Artikel</h3>

        <a href="{{route('blog.create')}}" class="btn btn-primary mb-3">Buat Artikel</a>

        {{-- Pesan Sukses --}}
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Informasi</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive py-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>image</th>
                        <th>judul</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($artikels as $artikel)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <img src="{{asset('storage/artikel/'. $artikel->image)}}" height="100" alt="">
                        </td>
                        <td>
                            {{$artikel->judul}}
                        </td>
                        <td>
                            <a href="{{route('blog.edit', $artikel->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('blog.destroy', $artikel->id )}}" method="POST" class="d-inline">
                                @csrf
                                <button onclick="deleteModal()" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal{{$artikel->id}}" class="btn btn-danger">Hapus</button>

                                <div class="modal" id="deleteModal{{$artikel->id}}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{__('Delete')}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{__('Are You Sure to Delete Post ')}}<b>{{$artikel->judul}}.</b>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    function deleteModal() {

    }

</script>
@endsection
