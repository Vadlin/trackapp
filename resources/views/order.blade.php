@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="card  my-4">
            <h5 class="card-header">TrackPack</h5>
            <div class="card-body">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-8">
                        <img src="https://source.unsplash.com/1200x400/?packaging" class="img-fluid">
                        <article class="my-3">

                            <h4>INV . {{ $barang->invoice }}</h4>
                            <p>Order By. {{ $barang->nama_pemesan }}
                            </p>
                            <h6>{{ $barang->email_pemesan }}</h6>
                            <h6>{{ $barang->alamat }}</h6>


                            {{-- buat barcode --}}
                            {{-- buat barcode --}}
                            {!! QrCode::size(200)->generate(url('/trackbarang/' . $barang->id)) !!}

                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <article>

    </article>
    <a href="/orders" class="btn btn-success my-4"><i class="bi bi-arrow-bar-left"></i> Back to orders</a>
@endsection
