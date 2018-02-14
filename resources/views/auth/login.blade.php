@extends('layouts.empty')

@section('content')


    <hgroup>
        <h1>Gerência de propostas de TCC</h1>
        <h3>Por favor efetue o login para utilizar o sistema:</h3>
    </hgroup>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--Esqueceu a senha?                                </a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}


                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="group">
                            <input type="email" name="email"><span class="highlight"></span><span class="bar"></span>
                            <label>Email</label>
                        </div>



                        <div class="group">
                            <input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
                            <label>Password</label>

                        </div>




                        <button type="submit" class="button buttonBlue">Login
                            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                        </button>
                    </form>
                    <footer>
                        <a href="http://www.ufop.br"><img src="img/logo.png"></a>
                        <p>  <a href="http://www.ufop.br" target="_blank">Ufop</a> 2018</p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
