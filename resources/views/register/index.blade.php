{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrackPack | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="mb-5">REGISTRATION TrackPack</h3>

                            <form action="/register" method="post">

                                @csrf


                                <div class="form-group mt-4">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nama Lengkap">
                                </div>

                                <div class="form-group mt-4">
                                    <input type="text" name="divisi" class="form-control" id="divisi"
                                        placeholder="Divisi Bidang">
                                </div>
                                <div class="form-group mt-4">
                                    <input type="number" name="karyawan" class="form-control" id="karyawan"
                                        placeholder="Nomor Induk Karyawan">
                                </div>

                                <div class="form-group mt-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email">
                                </div>

                                <div class="form-group mt-4">
                                    <input type="text" name="username" class="form-control" id="username"
                                        placeholder="Username">
                                </div>

                                <div class="form-group mt-4">
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password">
                                </div>

                                <div class="form-group mt-4">
                                    <button class="btn btn-dark form-control" type="submit">Create an Account</button>
                                </div>


                            </form>

                            <div class="row mt-2">
                                <p>Already Have an Account? <a href="/login">Login</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration w-100 m-auto">

                <div class="card  my-4">
                    <div class="card-body">
                        <h1 class="h3 mb-3 fw-normal text-center">Registration TrackPack</h1>

                        <form action="/register" method="POST">
                            @csrf
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror"
                                    name="name" id="name" placeholder="Full Name" required
                                    value="{{ old('name') }}">
                                <label for="name">Name</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" id="username" placeholder="Username" required
                                    value="{{ old('username') }}">
                                <label for="username">Username</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="name@example.com" required
                                    value="{{ old('email') }}">
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control @error('karyawan_ID') is-invalid @enderror"
                                    name="karyawan_ID" id="karyawan_ID" placeholder="ID" required
                                    value="{{ old('karyawan_ID') }}">
                                <label for="karyawan_ID">ID</label>
                                @error('karyawan_ID')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control @error('divisi') is-invalid @enderror"
                                    name="divisi" id="divisi" placeholder="Divisi" required value="{{ old('divisi') }}">
                                <label for="divisi">Division</label>
                                @error('divisi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password"
                                    class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Registration</button>
                        </form>
                        <small class="d-block text-center mt-3">Already have account? <a href="/login">Please
                                Login!</a></small>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
