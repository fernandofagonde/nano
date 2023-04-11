<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! $cliente->titulo !!} | Nano | Y</title>
    <meta name="description" content="{!! $cliente->titulo !!}">
    <meta name="author" content="Ípsillon">
    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <base url="/">
    <style>
        /* Set a background image by replacing the URL below */
        body {
            background: url("<?php echo Storage::disk('local')->url($cliente->url . '/' . $cliente->fundo); ?>") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
            color: <?php echo $cliente->font_color; ?>;
        }

        .btn {
            color: <?php echo $cliente->button_font_color; ?>;
            background-color: <?php echo $cliente->button_color; ?>;
            border: none;
        }

        .card {
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));

        }
    </style>
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow mx-2 my-2 p-2">
            <div class="p-4">
                <div class="row align-items-center">
                    <div class="col-sm-3 text-center">
                        <img class="" src="<?php echo Storage::disk('local')->url($cliente->url . '/' . $cliente->logo); ?>">
                    </div>
                    <div class="col-sm-9 text-left">
                        <h1 class="my-4">
                            {!! $cliente->titulo !!}
                        </h1>
                        {!! $cliente->descricao !!}
                        @if (!is_null($cliente->endereco))
                            <p> <strong>Endereço:</strong> {!! $cliente->endereco !!}</p>
                        @endif
                        @if (!is_null($cliente->telefone))
                            <p> Telefone: {!! $cliente->telefone !!} </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                @if (!is_null($cliente->whatsapp))
                    <div class="col-md-3 col-12 text-center mb-2">
                        <a class="btn w-100" href="https://wa.me/{{ $cliente->whatsapp }}" role="button" rel="nofollow"
                            target="_blank"> <i
                                style="font-size:20px !important;"class="fa fa-whatsapp"></i>Whatsapp</a>
                    </div>
                @endif
                @if (!is_null($cliente->instagram))
                    <div class="col-md-3 col-12 text-center  mb-2">
                        <a class="btn w-100" href="{{ $cliente->instagram }}" alt="perfil no Instagram"role="button"
                            rel="nofollow" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a>
                    </div>
                @endif
                @if (!is_null($cliente->facebook))
                    <div class="col-md-3 col-12 text-center  mb-2">
                        <a class="btn w-100" href="{{ $cliente->facebook }}" alt="perfil no facebook" role="button"
                            rel="nofollow" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a>
                    </div>
                @endif
                @if (!is_null($cliente->linkedin))
                    <div class="col-md-3 col-12 text-center  mb-2">
                        <a class="btn w-100" href="{{ $cliente->linkedin }}" alt="perfil no linkedin" role="button"
                            rel="nofollow" target="_blank"><i class="fa-brands fa-linkedin"></i> Linkedin</a>
                    </div>
                @endif
                @if (!is_null($cliente->site))
                    <div class="col-md-3 col-12 text-center  mb-2">
                        <a class="btn w-100 " href="{{ $cliente->site }}" alt="site" role="button" rel="nofollow"
                            target="_blank"><i class="fa-solid fa-globe"> </i> Site</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <span class="small w-100">
                    Nano - Ecossistema de Inovação e Empreendedorismo da <strong>Ípsillon®</strong>.
                </span> <a class="text-white small" href="https://nano.ipsillon.cc" target="_blank">Faça parte.</a>
            </div>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dafdf19f34.js" crossorigin="anonymous"></script>
</body>

</html>
