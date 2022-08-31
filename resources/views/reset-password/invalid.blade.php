@extends('layouts.main')

@section('container')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TrackPack | Invalid Token</title>
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


                                <h4 class="text-danger">
                                    Invalid Token for Reset Password
                                </h4>

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
