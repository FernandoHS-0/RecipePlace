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
            .imgLogo{
                width: 25%;
                position: absolute;
                left: -10%;
                bottom: -10%;
            }
        </style>
    </head>
<body>
    <div class="container">
        <div class="card cardLogin text-white mt-5">
            <div class="card-body">
                <h1 class="card-title text-center mb-5">Registrarse</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo eléctronico') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Constraseña') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="col-6">
                            <button type="submit" class="btn btnBrightR text-white" style="width: 100%;">
                                {{ __('Regstrarse') }}
                            </button>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <a href="{{route('login')}}" class="text-white text-center">¿Ya tienes una cuenta? Inicia sesión.</a>
                    </div>
                </form>
            </div>
            <img src="{{asset('img/logo.png')}}" alt="ReciPlace" class="img-fluid imgLogo">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
