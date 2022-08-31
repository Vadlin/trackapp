@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Orders </h1>
        <h1 class="h2 margin-left 1000px">Divisi {{ auth()->user()->divisi }}</h1>
    </div>

    <div class="card">
        <h4 class="card-header">TrackPack</h4>
        <div class="card-body">

            <div class="table-responsive col-lg 8">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Invoice</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $barang)
                            <tr>
                                <td>{{ $barang->id }}</td>
                                <td>{{ $barang->invoice }}</td>
                                <td>{{ $barang->nama_pemesan }}</td>
                                <td>{{ $barang->nama }}</td>
                                <td>{{ $barang->alamat }}</td>
                                <td>{{ $barang->jenis }}</td>
                                <td>{{ $barang->jumlah }}</td>
                                <td>{{ $barang->status }}</td>
                                <td>
                                    <div class="d-flex justify-content-evenly">
                                        <button type="button" class="btn btn-sm btn-warning " data-bs-toggle="modal"
                                            data-bs-target="#updateBarangModal{{ $loop->iteration }}">
                                            <span data-feather="edit" class="align-text-bottom"></span>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="updateBarangModal{{ $loop->iteration }}" tabindex="-1"
                                            aria-labelledby="updateBarangModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        @foreach ($barang->trackers as $tracker)
                                                            <div class="card mb-3">
                                                                <div class="card-body">
                                                                    <h4>
                                                                        Tanggal : {{ $tracker->created_at }}
                                                                    </h4>
                                                                    <p>
                                                                        Status : {{ $tracker->status }}
                                                                    </p>
                                                                    <p>
                                                                        Dikerjakan Oleh : {{ $tracker->name }}
                                                                    </p>
                                                                    <p>
                                                                        Divisi : {{ $tracker->divisi }}
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        @endforeach

                                                        <form action="{{ url('/dashboard/input/' . $barang->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('put')

                                                            <label for="Status" class="form-label">Status</label>

                                                            <select name="status" class="form-select"
                                                                aria-label="Default select example" required>
                                                                <option selected>Pilih Status</option>
                                                                <option value="Dikerjakan">Dikerjakan</option>
                                                                <option value="Belum Dikerjakan">Belum Dikerjakan</option>
                                                                <option value="Selesai">Selesai</option>
                                                            </select>

                                                            <button class="btn btn-primary w-100 mt-3">Update</button>
                                                        </form>

                                                        <form action="{{ url('/dashboard/daftar/' . $barang->id) }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf

                                                            <button class="btn btn-danger w-100 mt-3"
                                                                onclick="return confirm('Are You Sure ?')">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#historyModal{{ $loop->iteration }}">
                                            History
                                        </button>
        
                                        <!-- Modal -->
                                        <div class="modal fade" id="historyModal{{ $loop->iteration }}" tabindex="-1"
                                            aria-labelledby="historyModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">History</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-start">
                                                        @foreach ($barang->trackers as $tracker)
                                                            <div class="card mb-3">
                                                                <div class="card-body">
                                                                    <h4>
                                                                        Tanggal : {{ $tracker->created_at }}
                                                                    </h4>
                                                                    <p>
                                                                        Status : {{ $tracker->status }}
                                                                    </p>
                                                                    <p>
                                                                        Divisi : {{ $tracker->divisi }}
                                                                    </p>
        
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}


                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#info{{ $loop->iteration }}">
                                            <span data-feather="eye" class="align-text-bottom"></span>
                                        </button>

                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="info{{ $loop->iteration }}" tabindex="-1"
                                        aria-labelledby="info" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Status</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="container">
                                                        <div class="card  my-4">
                                                            <h5 class="card-header">TrackPack</h5>
                                                            <div class="card-body">

                                                                <div class="row my-4 justify-content-center">
                                                                    <div class="col-lg-8">
                                                                        <img src="https://source.unsplash.com/200x200/?packaging"
                                                                            class="img-fluid">
                                                                        <article class="my-3">
                                                                            <h2>{{ $barang->nama_pemesan }}</h2>
                                                                            <h6>{{ $barang->email_pemesan }}</h6>
                                                                            <p>Ordered By. {{ $barang->nama_pemesan }},
                                                                            </p>
                                                                            <p>Status : {{ $barang->status }} </p>
                                                                            <p>Address : {{ $barang->alamat }}
                                                                            </p>

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
                                                    <a href="{{ url('/dashboard/print/' . $barang->id) }}" target="_blank"
                                                        class="btn btn-dark my-4">
                                                        <span data-feather="printer"></span> - Print to PDF</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

            </div>

        </div>
    </div>
    </tr>
    @endforeach
    </tbody>
    </table>

    <!-- Button trigger modal -->
@endsection
