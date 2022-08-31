@extends('dashboard.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat Datang, {{ auth()->user()->name }} {{ auth()->user()->karyawan }}</h1>
        <h1 class="h2 margin-left 1000px">Divisi {{ auth()->user()->divisi }}</h1>
    </div>
@endsection
