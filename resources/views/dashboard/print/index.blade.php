<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- style css --}}
    <link rel="stylesheet" href="css/style.css">
    <title>TrackPack</title>

</head>

<style>
    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .form-registration input {
        border-radius: 0;
        margin-bottom: -1px;
    }

    .form-registration .form-floating:focus-within {
        z-index: 2;
    }
</style>

<body onload="window.print();">

    <div class="container">
        <div class="card my-4">
            <div class="card-body">
                <div class="d-flex justify-content-center align-items-center">
                    <div>
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="https://source.unsplash.com/200x200/?packaging" class="img-fluid">
                        </div>
                        <article class="my-3">
                            <h2>{{ $barang->nama_pemesan }}</h2>
                            <h6>{{ $barang->email_pemesan }}</h6>
                            <p>Ordered By. {{ $barang->nama_pemesan }},
                                Status {{ $barang->status }}
                            </p>
                            <p> Address : {{ $barang->alamat }}
                            </p>

                            {{-- buat barcode --}}
                            <div class="d-flex justify-content-center align-items-center">
                                {!! QrCode::size(200)->generate(url('/trackbarang/' . $barang->id)) !!}
                            </div>
                        </article>
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
