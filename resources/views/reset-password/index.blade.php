@extends('layouts.main')

@section('container')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TrackPack | Reset Password</title>
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

                                <h3 class="mb-5">ACCOUNT RECOVERY</h3>


                                <form action="{{ url('/reset-password') }}" method="post">
                                    @csrf
                                    <p>Please Enter Your New Password</p>
                                    <input type="hidden" name="resetToken" value="{{ $resetPasswordToken->token }}">
                                    <div class="form-group mt-4">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="New Password" name="password">
                                    </div>

                                    <div class="form-group mt-4">
                                        <input type="password" class="form-control" id="password_confirmation"
                                            placeholder="New Password Confirmation" name="password_confirmation">
                                    </div>

                                    <div class="form-group my-3">
                                        <button class="btn btn-dark form-control">Reset Password</button>
                                    </div>



                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection
