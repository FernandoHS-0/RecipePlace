<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>ReciPlace</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100;1,300&display=swap');
        *{
            font-family: 'Josefin Sans', sans-serif;
        }
        body{
            background-color: #181926;
        }
        .btnBrightR{
            background-color: #D90404;
        }
        .cardLogin{
            background-color: #731224;
            padding-top: 10%;
            padding-bottom: 10%;
        }
        .btnGoogle{
            background-color: white;
            color: #181926;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-7">
                <div class="row">
                    <img src="{{asset('img/logo.png')}}" alt="ReciPlace logo" class="img-fluid mt-3">
                </div>
                <div class="row">
                    <div class="btn btn-outline-danger">Explorar recetas</div>
                </div>
            </div>
            <div class="col-5 mt-5">
                <div class="card cardLogin text-white mt-5">
                    <div class="card-body">
                        <h1 class="text-center mb-5">Iniciar sesión</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="container">
                                <div class="row mb-1">
                                    <label for="email" class="form-label text-center">{{ __('Correo electronico') }}</label>
                                </div>
                                <div class="row mb-3">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="row mb-1">
                                    <label for="password" class="form-label text-center">{{ __('Contraseña') }}</label>
                                </div>
                                <div class="row mb-5">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>

                            <div class="container">
                                <div class="row mb-1">
                                    <button type="submit" class="btn btnBrightR text-white">
                                        {{ __('Iniciar sesión') }}
                                    </button>
                                </div>
                                <div class="row mb-5">
                                    <a href="#" class="btn btnGoogle"><i class="bi bi-google align-middle" aria-hidden="true"></i> <span class="align-middle">Continuar con Google</span> </a>
                                </div>
                                <div class="row mb-5">
                                    <a href="{{ route('register') }}" class="text-center text-white">¿Aún no eres usuario? Registrate.</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
