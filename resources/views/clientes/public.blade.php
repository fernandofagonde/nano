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
        <!-- Custom styles -->
        <link rel="stylesheet" href="{{asset('public/assets/public/css/style.css')}}" />

        <!-- MDB -->
        <!--
        <link rel="stylesheet" href="{{asset('public/assets/public/css/mdb.min.css')}}" />-->
    </head>

<body>
    <!--Main Navigation-->
    <header>
        <style>

            body {
                background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("<?php echo Storage::disk('local')->url($cliente->url . '/' . $cliente->fundo); ?>");
                background-size: cover;
                background-attachment: fixed;
            }

            /*
            .mask{
                height: 100vh;
            }*/

            /* Espaçamento Superior e inferior da logo */
            .container img ,btn {
                margin-top: 50px;
                margin-bottom: 80px;
                max-width: 100%;
            }

            /*Alinhamento da descrição do cliente*/
            p{
                text-align: justify;
            }

            /* Espaçamento inferior do paragrafo Cliente Descrição */
            .mb-3 {
                margin-bottom: 2rem !important;
            }

            /* Tamanho ícones redes sociais */
            i{
                font-size: 2.7em !important;
                margin-left: 1em !important;
            }

            /* Alinhamento dos botões */
            .btnLinks{
                margin-top: 4em;
                padding-bottom: 2em;
                display: flex;
                align-items: center;
                align-content: center;
            }

            /* Responsividade */

            @media screen and (max-width: 767px) {

                body {
                background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("<?php echo Storage::disk('local')->url($cliente->url . '/' . $cliente->fundo); ?>");
                background-size: cover;
                background-attachment: fixed;
                }

                .container {
                    text-align: center;
                    padding: 2em;
                }

                .btnLinks{
                    display: inline-grid;
                }

                .socialButtons i{
                    margin-left: 0;
                    margin: 30px;
                    margin-top: 1em;
                }
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
            <div class="mask">
                <div class="container">
                    <img src="<?php echo Storage::disk('local')->url($cliente->url . '/' . $cliente->logo); ?>">
                </div>
                <div class="container content">
                    <div>
                        <h1 class="mb-3">{!! $cliente->titulo !!}</h1>
                        <h5 class="mb-4 col-lg-10 col-md-12">{!! $cliente->descricao !!}</h5>
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
    <script type="text/javascript" src="{{ asset('public/assets/public/js/mdb.min.js') }}" ></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('public/assets/public/js/script.js') }}" /></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
