<head>
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

        .socialButtons i {
            margin-left: 0;
            margin: 30px;
            margin-top: 1em;
        }
    </style>
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">

                <h1 class="fw-light"><img width="200"src="<?php echo Storage::disk('local')->url($cliente->url . '/' . $cliente->logo); ?>">{!! $cliente->titulo !!}</h1>

                <p class="lead">
                    {!! $cliente->descricao !!}
                    @if (!is_null($cliente->endereco))
                        <p> Endereço: {!! $cliente->endereco !!}</p>
                    @endif
                    @if (!is_null($cliente->telefone))
                        <p> Telefone: {!! $cliente->telefone !!} </p>
                    @endif

                <p class="lead mb-0">
                <div class="btnLinks row">
                    <div class="col">
                        @if (!is_null($cliente->whatsapp))
                            <a class="btn btn-outline-light btn-lg m-2" href="https://wa.me/{{ $cliente->whatsapp }}"
                                role="button" rel="nofollow" target="_blank"> <i
                                    style="font-size:20px !important;"class="fa fa-whatsapp"></i>
                                Chame no whatsapp</a>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        @if (!is_null($cliente->instagram))
                            <a class="mb-4 mx-4" href="https://{{ $cliente->instagram }}"
                                alt="perfil no Instagram"role="button" rel="nofollow" target="_blank"><i
                                    class="fa-brands fa-instagram"
                                    style="font-size:2em; color: {{ $cliente->button_color }}"></i></a>
                        @endif
                        @if (!is_null($cliente->facebook))
                            <a class="mb-4  mx-4" href="https://{{ $cliente->facebook }}" alt="perfil no facebook"
                                role="button" rel="nofollow" target="_blank"><i class="fa-brands fa-facebook"
                                    style="font-size:2em; color: {{ $cliente->button_color }}"></i></a>
                        @endif
                        @if (!is_null($cliente->linkedin))
                            <a class="mb-4  mx-4" href="https://{{ $cliente->linkedin }}" alt="perfil no linkedin"
                                role="button" rel="nofollow" target="_blank"><i class="fa-brands fa-linkedin"
                                    style="font-size:2em;; color: {{ $cliente->button_color }}"></i></a>
                        @endif
                        @if (!is_null($cliente->site))
                            <a class="mb-4  mx-4" href="https://{{ $cliente->site }}" alt="site" role="button"
                                rel="nofollow" target="_blank"><i class="fa-solid fa-globe"
                                    style="font-size:2em; color: {{ $cliente->button_color }}"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>

    <div class="container-fluid fixed-bottom d-flex flex-wrap justify-content-end container-p-x pb-3" style="background-color: rgba(0, 0, 0, 0.2)">
        <div class="pt-3">            
            <span class="footer-text ">
                Nano - Ecossistema de Inovação e Empreendedorismo da <a class="text-white" href="https://ipsillon.cc/">
                    <strong>Ípsillon®</strong>
                </a>.
                </span>
        </div>
    </div>

    <div class=" " >
        <h6>
        
           
       
        </h6>
    </div>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dafdf19f34.js" crossorigin="anonymous"></script>
</body>
