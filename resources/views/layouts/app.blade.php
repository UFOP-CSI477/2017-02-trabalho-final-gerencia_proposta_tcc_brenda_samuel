<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
{{--<link rel="stylesheet" href="style5.css">--}}
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style5.css') }}">
</head>

<body>

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Gerenciador de Proposta de TCC</h3>
        </div>

        <ul class="list-unstyled components">
            <!-- <p>Dummy Heading</p> -->
            @if (Auth::user()->isAdmin)
                <li class="@yield('active1')">
                    <a href="{{ route('login') }}">Início</a>
                </li>
                <li class="@yield('active2')">
                    <a href="{{ url('aprovarpropostas') }}">Aprovar Propostas</a>
                </li>
                <li class="@yield('active3')">
                    <a href="{{ url('todaspropostas') }}">Visualizar Todas as  Propostas</a>
                </li>
                <li class="@yield('active4')">
                    <a href="{{ url('registrarAluno') }}">Cadastrar Aluno</a>
                </li>
                <li >
                    <a href="{{ route('logout') }}">Sair</a>
                </li>


            @else
                <li class="@yield('active1')">
                    <a href="{{ route('login') }}">Início</a>
                </li>
                <li class="@yield('active2')">
                    <a href="{{ url('cadastrarproposta') }}">Cadastro de Proposta</a>
                </li>
                <li class="@yield('active3')">
                    <a href="{{ url('verificaStatus') }}">Visualizar Estado da proposta</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">Sair</a>
                </li>
            @endif
        </ul>


    </nav>


    <div class="container" id="content">

        <nav class="navbar navbar-default container-fluid">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><a href="#">Page</a></li> -->
                        <li><a href="{{ route('logout') }}">Sair</a></li>
                    </ul>
                </div>

                <div class="line "></div>
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>
        </nav>


        <!--<div class="width=100$"></div>-->
    </div>


    <!-- jQuery CDN -->
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
{{--<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>--}}
<!-- Bootstrap Js CDN -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });


        });
    </script>


</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
