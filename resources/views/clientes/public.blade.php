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
        <div class="card border-0 shadow my-5">
            <div class="p-5">
                <div class="row">
                    <div class="col-sm-2">
                        <img class="mr-4" width="200"src="<?php echo Storage::disk('local')->url($cliente->url . '/' . $cliente->logo); ?>">
                    </div>
                    <div class="col-sm-10">
                        <h1 class="fw-light m-4">
                            {!! $cliente->titulo !!}
                        </h1>
                    </div>
                </div>



                <p class="text-left">
                    {!! $cliente->descricao !!}
                    @if (!is_null($cliente->endereco))
                        <p> Endereço: {!! $cliente->endereco !!}</p>
                    @endif
                    @if (!is_null($cliente->telefone))
                        <p> Telefone: {!! $cliente->telefone !!} </p>
                    @endif

                <p class="mb-0">
                <div class="btnLinks row">
                    <div class="col">
                        @if (!is_null($cliente->whatsapp))
                            <a class="btn btn-outline-light btn-lg" href="https://wa.me/{{ $cliente->whatsapp }}"
                                role="button" rel="nofollow" target="_blank"> <i
                                    style="font-size:20px !important;"class="fa fa-whatsapp"></i>
                                Chame no whatsapp</a>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        @if (!is_null($cliente->instagram))
                            <a class="mt-4 mr-4" href="https://{{ $cliente->instagram }}"
                                alt="perfil no Instagram"role="button" rel="nofollow" target="_blank"><i
                                    class="fa-brands fa-instagram"
                                    style="font-size:2em; color: {{ $cliente->button_color }}"></i></a>
                        @endif
                        @if (!is_null($cliente->facebook))
                            <a class="mt-4  mr-4" href="https://{{ $cliente->facebook }}" alt="perfil no facebook"
                                role="button" rel="nofollow" target="_blank"><i class="fa-brands fa-facebook"
                                    style="font-size:2em; color: {{ $cliente->button_color }}"></i></a>
                        @endif
                        @if (!is_null($cliente->linkedin))
                            <a class="mt-4  mr-4" href="https://{{ $cliente->linkedin }}" alt="perfil no linkedin"
                                role="button" rel="nofollow" target="_blank"><i class="fa-brands fa-linkedin"
                                    style="font-size:2em;; color: {{ $cliente->button_color }}"></i></a>
                        @endif
                        @if (!is_null($cliente->site))
                            <a class="mt-4  mr-4" href="https://{{ $cliente->site }}" alt="site" role="button"
                                rel="nofollow" target="_blank"><i class="fa-solid fa-globe"
                                    style="font-size:2em; color: {{ $cliente->button_color }}"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            </p>
        </div>


        <div class="container-fluid fixed-bottom d-flex flex-wrap justify-content-end container-p-x pb-2"
            style="background-color: rgba(0, 0, 0, 0.2)">
            <div class="pt-2">
                <span class="footer-text small">
                    Nano - Ecossistema de Inovação e Empreendedorismo da <strong>Ípsillon®</strong>.
                </span> <a class="text-white small" href="https://nano.ipsillon.cc" target="_blank">Faça parte.</a>
            </div>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dafdf19f34.js" crossorigin="anonymous"></script>
</body>

</html>
