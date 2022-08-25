<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>{{ $cliente->nome }} </title>
        <!-- Font Awesome -->
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" /> -->
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
        <!--Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <base url="/">
        <!-- MDB -->
        <!--
        <link rel="stylesheet" href="{{asset('assets/public/css/mdb.min.css')}}" />-->
        <!-- Custom styles -->
        <link rel="stylesheet" href="{{asset('assets/public/css/style.css')}}" />
    </head>

<body>
    <!--Main Navigation-->
    <header>
        <style>
            #intro {
                background-image: url("<?php echo Storage::disk('local')->url($cliente->url . '/' . $cliente->fundo); ?>");
                background-repeat: no-repeat !important;
                background-attachment: fixed !important;
                background-position: center !important;
                background-size: cover;
            }

            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
                #intro {}
            }

            body {
                color: {{ $cliente->font_color }};
            }

            .btn {
                color: {{ $cliente->button_font_color }};
                background-color: {{ $cliente->button_color }};
                border: none;
            }
        </style>


        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);">
                <div class="container">
                    <img src="<?php echo Storage::disk('local')->url($cliente->url . '/' . $cliente->logo); ?>">
                </div>
                <div class="container">
                    <div>
                        <h1 class="mb-3">{!! $cliente->titulo !!}</h1>
                        <h5 class="mb-4 col-lg-8 col-md-12">{!! $cliente->descricao !!}</h5>
                        <div class="btnLinks">
                            <a class="btn btn-outline-light btn-lg m-2" href="https://wa.me/{{ $cliente->telefone }}"
                            role="button" rel="nofollow" target="_blank">Fale conosco</a>
                            <div class="socialButtons">
                                <a class="mb-4" href="https://{{ $cliente->instagram }}"
                                    role="button" rel="nofollow" target="_blank"><i class="fa-brands fa-instagram" style="color: {{ $cliente->button_color}}"></i></a>
                                
                                <a class="mb-4" href="https://{{ $cliente->facebook }}"
                                    role="button" rel="nofollow" target="_blank"><i class="fa-brands fa-facebook" style="color: {{ $cliente->button_color}}"></i></a>
                                
                                <a class="mb-4" href="https://{{ $cliente->linkedin }}"
                                    role="button" rel="nofollow" target="_blank"><i class="fa-brands fa-linkedin" style="color: {{ $cliente->button_color}}"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dafdf19f34.js" crossorigin="anonymous"></script>

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('assets/public/js/mdb.min.js') }}" ></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('assets/public/js/script.js') }}" /></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
