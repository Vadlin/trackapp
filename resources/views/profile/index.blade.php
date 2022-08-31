@extends('layouts.main')

@section('container')
    <div class="card  my-4">
        <h5 class="card-header">Profile</h5>
        <div class="card-body">

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <div class="container my-2 justify-content-center text-center">

                <img src="{{ Auth::user()->photo }}" class="rounded-circle mx-auto d-block my-3" id="currentPhoto"
                    style="height:200px;width:200px;object-fit:cover">

                <form action="{{ url('/profile') }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="my-3 row">
                        <label for="picture" class="col-sm-2 col-form-label">Profile Picture</label>
                        <div class="col-sm-10">
                            <input type="file" name="photo" id="photo" class="form-control" accept="image/*"
                                onchange="document.getElementById('currentPhoto').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                    </div>

                    <div class="my-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="email" readonly class="form-control-plaintext" id="email"
                                value="{{ auth()->user()->name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username"
                                value="{{ auth()->user()->username }}">
                        </div>


                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ auth()->user()->email }}">
                        </div>


                    </div>
                    <div class="mb-3 row">
                        <label for="karyawan_ID" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="karyawan_ID"
                                name="karyawan_ID" value="{{ auth()->user()->karyawan_ID }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Division</label>
                        <div class="col-sm-10">
                            <input type="email" readonly class="form-control-plaintext" id="email"
                                value="{{ auth()->user()->divisi }}">
                        </div>
                    </div>

                    <button class="btn btn-dark w-100 mt-3" type="submit">Save</button>
                </form>

            </div>


        </div>
    </div>
@endsection
