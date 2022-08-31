@extends('layouts.main')

@section('container')

    <div class="container mt-5">
        <h1 class="mb-5">{{ $title }}</h1>

        @if ($barangs->count())
            <div class="card mb-3">
                <img src="https://source.unsplash.com/1200x400/?packaging" class="card-img-top">
                <div class="card-body text-center">
                    <h3 class="card-title">
                        {{ $barangs[0]->invoice }}
                    </h3>
                    <p>
                        <small class="text-muted">Order By. {{ $barangs[0]->nama_pemesan }}, Status
                            {{ $barangs[0]->status }}
                            {{ $barangs[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    {{-- buat alamat jing --}}
                    <p class="card-text">{{ $barangs[0]->alamat }}</p>

                    <a href="/orders/{{ $barangs[0]->id }}" class="text-decoration-none btn btn-warning">See Details</a>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    @foreach ($barangs->skip(1) as $barang)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="position-absolute px-3 py-2 text-white"
                                    style="background-color: rgba(0, 0, 0, 0.5)"> {{ $barang->status }}</div>
                                <img src="https://source.unsplash.com/500x400/?packaging" class="card-img-top">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $barang->invoice }}</h5>
                                    <p>
                                        <small class="text-muted">Order By. {{ $barang->nama_pemesan }}
                                            {{ $barang->created_at->diffForHumans() }}
                                        </small>
                                    </p>
                                    {{-- buat alamat jing --}}
                                    {{-- <p class="card-text">Address : {{ $post->excerpt }}</p> --}}

                                    <a href="/orders/{{ $barang->id }}" class="text-decoration-none btn btn-warning">See
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


            {{-- @foreach ($posts->skip(1) as $post)
        <article class="mb-5 border-bottom pb-3" >
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->invoice }}</a>
            </h2>

            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in 
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <h6>{{ $post->email }}</h6>
            <p class="mt-3">Alamat : {{ $post->excerpt}}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
        </article>
        @endforeach --}}
            <div class="d-flex justify-content-end my-4">
                {{-- {{ $barangs->links() }} --}}
            </div>
    </div>
@else
    <p class="text-center fs-4">Not found</p>
    @endif


@endsection
