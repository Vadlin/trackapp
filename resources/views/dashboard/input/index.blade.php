@extends('dashboard.layouts.main')


@section('container')
    <style>
        .form-registration input {
            border-radius: 0;
            margin-bottom: -1px;
        }

        .form-registration .form-floating:focus-within {
            z-index: 2;
        }
    </style>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Orders</h1>
        <h1 class="h2 margin-left 1000px">Divisi {{ auth()->user()->divisi }}</h1>
    </div>

    <main class="form-registration w-100 m-auto">
        <div class="col-lg px-5">
            <div class="card my-4 ">
                <h5 class="card-header">TrackPack</h5>
                <div class="card-body">
                    {{-- <form method="post" action="{{ url('/dashboard/input') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="Nama Barang" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror"
                            id="nama_pemesan" name="nama_pemesan" required>
                        @error('nama_pemesan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Email Pemesan" class="form-label">Email Pemesan</label>
                        <input type="email" class="form-control @error('email_pemesan') is-invalid @enderror"
                            id="email_pemesan" name="email_pemesan" required>
                        @error('email_pemesan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Nama Barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            name="alamat" required>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Jenis Barang" class="form-label">Jenis Barang</label>
                        <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis"
                            name="jenis" required>
                        @error('jenis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Jumlah Barang" class="form-label">Jumlah Barang</label>
                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"
                            name="jumlah" required>
                        @error('jumlah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Invoice" class="form-label">Invoice</label>
                        <input type="text" class="form-control @error('invoice') is-invalid @enderror" maxlength="8"
                            minlength="8" id="invoice" name="invoice" required>
                        @error('invoice')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> --}}

                    <form method="post" action="{{ url('/dashboard/input') }}">
                        @csrf
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('nama_pemesan') is-invalid @enderror"
                                name="nama_pemesan" id="nama_pemesan" placeholder="Full Name" required
                                value="{{ old('nama_pemesan') }}">
                            <label for="nama_pemesan">Customer Name</label>
                            @error('nama_pemesan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email_pemesan') is-invalid @enderror"
                                name="email_pemesan" id="email_pemesan" placeholder="name@example.com" required
                                value="{{ old('email_pemesan') }}">
                            <label for="email_pemesan">Email address</label>
                            @error('email_pemesan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                id="nama" placeholder="Example" required value="{{ old('nama') }}">
                            <label for="nama">Name of Goods</label>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                id="alamat" placeholder="Address" required value="{{ old('alamat') }}">
                            <label for="alamat">Address</label>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis"
                                id="jenis" placeholder="Types Item" required value="{{ old('jenis') }}">
                            <label for="jenis">Types Item</label>
                            @error('jenis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('invoice') is-invalid @enderror" name="invoice"
                                id="invoice" placeholder="Types Item" required value="{{ old('invoice') }}"
                                maxlength="8">
                            <label for="invoice">Invoice</label>
                            @error('invoice')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-bottom @error('jumlah') is-invalid @enderror"
                                name="jumlah" id="jumlah" placeholder="Qty" required>
                            <label for="jumlah">Qty</label>
                            @error('jumlah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
