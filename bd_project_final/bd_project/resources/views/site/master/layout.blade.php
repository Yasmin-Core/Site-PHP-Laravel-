<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afrodite Beauty</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink&family=Italiana&family=Ms+Madi&family=Quicksand&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Robot:300,400,500,700&display=swap" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

</head>

<body>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <header>
        <style>
        @media (min-width: 992px) {
            #intro {
                margin-top: -58.59px;
                height: 50vh !important;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }
        </style>
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block"
            style="z-index: 4000; background-color: #D3D3D3;">
            <div class="container-fluid">

                <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
                    <strong style="font-family: 'Ms Madi', cursive; color: black"> Afrodite Beauty</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="{{route('site.home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.portifolio')}}" rel="nofollow"
                                target="_blank">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.sobre')}}" target="_blank">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.cadastro')}}" target="_blank">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.agendamento')}}" target="_blank">Agendamento</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.login')}}" target="_blank">Login</a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                                rel="nofollow" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div id="intro" class="bg-image vh-100 shadow-1-strong">
            <div class="mask">

                <div class="container d-flex align-items-center justify-content-center text-center h-100">
                    <div class="text-white">
                        <h1 class="mb-0" style="font-family: 'Ms Madi', cursive; color: black"><strong>Afrodite
                                Beauty</strong></h1>
                        <h6 class="mb-0" style="color: black">A sua autoestima é a nossa prioridade</h6>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main class="mt-5">
        @yield('content')


        <footer class="text-center text-white " style="background-color: #D3D3D3;">
            <div class="container p-4">
                <section class="">
                    <div class="row">
                        <div class="col-lg-2 col-md-12 mb-8 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                data-ripple-color="light">
                                <img src="https://e3ba6e8732e83984.cdn.gocache.net/uploads/image/file/756830/regular_logol-ore-cc-81al.png"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="color: #D3D3D3;"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-8 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                data-ripple-color="light">
                                <img src="https://seeklogo.com/images/H/haskell-logo-186AE50C74-seeklogo.com.png"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="color: #D3D3D3;"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                data-ripple-color="light">
                                <img src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/0004/2950/brand.gif?itok=3uOdTWZc"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="color: #D3D3D3;"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                data-ripple-color="light">
                                <img src="https://seeklogo.com/images/P/pantene-pro-v-logo-381766D1A8-seeklogo.com.png"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="color: #D3D3D3;"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                data-ripple-color="light">
                                <img src="https://logosmarcas.net/wp-content/uploads/2020/11/Wella-Logo-650x366.png"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="color: #D3D3D3;"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-2 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                data-ripple-color="light">
                                <img src="https://raichu-uploads.s3.amazonaws.com/logo_eico-cosmeticos_utjBFe.png"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask" style="color: #D3D3D3;"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
</body>

</html>