@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="A lynda.com example of HTML5 and CSS3">
    <meta name="keywords" content="html5, css3, lynda, local storage, canvas, forms, semantics, web apps">
    <!--make sure mobile devices display the page at the proper scale	-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <link href="css/main.css" rel="stylesheet" type="text/css" media="screen, projection">
</head>

<body class="no-js">
    <div id="wrapper">
        <!-- <header id="mainHeader"> <a href="/" title="home" class="logo"> -->
                <!-- I need this div because IE is an affront to mankind-->

            </a>
            <nav id="siteNav">
                <h1></h1>
                <ul>
                    <li><a href="products.htm" title="Products">Products <br />.</a>
                        <ul>
                            <li><a href="/products.htm" title="Computers & tablets">Computers & tablets</a></li>
                            <li><a href="/products.htm" title="Phones">Phones</a></li>
                            <li><a href="/products.htm" title="Cameras">Cameras</a></li>
                            <li><a href="/products.htm" title="Consoles and Video Games">Consoles and Video Games</a></li>
                        </ul>
                    </li>


                    <li><a href="brands.htm" title="Brands">Brands <br />.</a>
                        <ul>
                            <li><a href="brands/Apple.htm" title="Apple">Apple</a></li>
                            <li><a href="brands/sony.htm" title="Sony">Sony</a></li>
                            <li><a href="brands/Microsoft.htm" title="terms and conditions">Microsoft</a></li>
                            <li><a href="brands/Samsung.htm" title="terms and conditions">samsung</a></li>
                        </ul>
                    </li>
                    <li><a href="deals.html" title="Deals">Deals <br /><span class="tagline">.</span></a>

                    </li>
                    <li><a href="contact.htm" title="contact us" class="last">Contact <br /><span class="tagline">.</span></a>
                        <ul>
                            <li><a href="support.htm" title="need help?">Support</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
