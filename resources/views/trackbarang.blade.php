@extends('layouts.main')

@section('container')
    <div class="container">
        @if ($found)
            <div class="card  my-4">

                <h5 class="card-header">TrackPack </h5>

                <div class="card-body">
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8">

                            <h5 class="card-header text-center">
                                Status Item from <br>{{ $barang->nama_pemesan }}
                            </h5>

                            <img src="https://source.unsplash.com/1200x400/?packaging" class="img-fluid">
                            <article class="my-3">
                                <h4 class="text-center my-4">{{ $barang->invoice }}</h4>

                                <div class="row ">
                                    <p>
                                        <b>Customer Address : </b>{{ $barang->alamat }}
                                    </p>
                                </div>
                                <div class="row ">
                                    <p>
                                        <b>Name of Goods : </b>{{ $barang->nama }}
                                    </p>
                                </div>
                                <div class="row ">
                                    <p>
                                        <b>Types of Goods : </b>{{ $barang->jenis }}
                                    </p>
                                </div>
                                <div class="row ">
                                    <p>
                                        <b>Qty : </b>{{ $barang->jumlah }} Pcs
                                    </p>
                                </div>
                                <div class="row  ">
                                    <p>
                                        <b>Status Item : </b>{{ $barang->status }}
                                    </p>
                                </div>

                                <div class="card-body justify-content-center">
                                    <div class="card mb-3 mt-2">
                                        <div class="card-body">
                                            <h6 class="text-center">
                                                History
                                            </h6>
                                            <hr />
                                            @foreach ($barang->trackers as $tracker)
                                                <div class="row my-4">
                                                    <div class="col-4">
                                                        <small>{{ $tracker->created_at }}</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <i class="bi bi-check-circle-fill"></i>
                                                    </div>
                                                    <div class="col-6">
                                                        <small>Status barang telah {{ $tracker->status }}, Dikerjakan oleh
                                                            {{ $tracker->name }} pada divisi {{ $tracker->divisi }}</small>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </article>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/home" class="btn btn-success my-4"><i class="bi bi-arrow-bar-left"></i> Back to orders</a>
        @else
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <h4 class="text-center">
                                Barang Tidak Ditemukan (No. Invoice salah)
                            </h4>
                            <div class="d-flex justify-content-center">
                                <a href="{{ url('/home') }}" class="btn btn-primary">
                                    Lacak Lagi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
