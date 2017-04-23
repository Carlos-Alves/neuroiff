<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistema | NeuroIFF') }}</title>


    <!--fontes google -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--Fonts-->
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">

    <!-- CSS Person-->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/reset.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/imgs/favicon/favicon3.ico')}}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

<body>

<nav class="navbar nav-header topo-grad">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/home')}}"><img src="{{url('assets/imgs/neurona22.png')}}" alt="logo site neuro iff" class="logo"> </a>
        </div>



        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav menu-itens">

                <li><a href="{{url('/home')}}" class="titulo-menu">NeuroIFF</a></li>

                @if(auth()->check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list" aria-hidden="true"></i><span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="#">Área Médica</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Doenças</a></li>
                        <li><a href="#">Equipes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Pacientes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{url('/pacientes')}}">Relação de pacientes</a></li>
                        <li><a href="{{url('/pacientes.create')}}">Cadastrar novo paciente</a></li>
                    </ul>
                </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="#">Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Doenças</a></li>
                            <li><a href="#">Equipes</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle" aria-hidden="true"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="#">Informações</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Sistema</a></li>
                            <li><a href="#">Manual</a></li>
                        </ul>
                    </li>


                @endif
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right menu-profile">

                    @if(auth()->check())
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        @if(auth()->user()->image != '')
                            <img src="{{url("uploads/users/".auth()->user()->image)}}" alt="profile" class="img-profile"> </a>
                        @else
                            <img src="{{url('assets/imgs/medico.png')}}" alt="profile" class="img-profile"> </a>
                        @endif


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{route('profile')}}">Meu Perfil</a></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true">Logout</i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                </li>
                                @else
                                <li><a href="{{ route('login') }}"><i class="fa fa-user-md" aria-hidden="true"> Entrar</i></a></li>

                    @endif
                </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="clear"></div>

<div class="container conteudo">
    @yield('content')
</div>

<div class="rodape">
<footer class="footer">
    <div class="container">
        <div class="col-md-6">
            <a href="http://www.iff.fiocruz.br/">
                <span style="color: #FFFFFF;"><marquee behavior=scroll>
                <img src="{{url('assets/imgs/logo-iff9.png')}}" alt="logo" class="logo-footer">
                IFF - Instituto Nacional de Saúde da Mulher, da Criança e do Adolescente Fernandes Figueira</marquee></span>
            </a>
        </div>
        <div class="col-md-6">
            <ul class="social">
                <li>
                    <a href="" class="facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="" class="twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="" class="google">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="" class="linkedin">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </li>

                <li>
                    <a href="" class="youtube">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</footer>

<div class="copy">
    <p>Todos os direitos reservados NeuroIFF  - <?=date('Y') ?> - by Carlos H Alves</p>
</div>
</div>


<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>