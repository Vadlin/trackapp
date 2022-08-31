@extends('layouts.main')

@section('container')
    <div class="container mt-5">

        <div class="row">
            <div class="col-4">
                <h5 style="color: black;">______ __ _</h5>
                <h6>LACAK PENGEMASAN BARANG</h6>
            </div>
            <div class="col-8">
                <form action="{{ url('/track_by_invoice') }}/" method="POST">
                    @csrf
                    {{-- @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif --}}
                    <h1>LACAK PENGEMASAN BARANG</h1>
                    <p>Please enter code Number (one Per line).
                        Then Click 'Search'. </p>
                    <div class="mb-3">
                        {{-- <input type="text" name="invoice" id="invoice" class="form-control"> --}}
                        <textarea class="form-control" name="invoice" id="invoice" rows="5" required></textarea>
                    </div>

                    <button class="btn btn-dark">Search</button>
                </form>
            </div>
        </div>
    </div>
@endsection
