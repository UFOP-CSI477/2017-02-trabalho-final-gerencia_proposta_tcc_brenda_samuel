<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/login.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}"/>

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">--}}
    {{--<script type="text/javascript" src="{{ URL::asset('js/jquerry.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ URL::asset('/js/login.js') }}"></script>--}}

    {{--<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.css') }}"/>--}}
    {{--<link rel="stylesheet" href="{{ URL::asset('/css/login.css') }}"/>--}}
    <![endif]-->
</head>
<body>

@yield('content')


</body>
</html>