<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="https://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />

    <title>{{ trans('adminlte_lang::message.landingdescriptionpratt') }}</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>adminlte-laravel</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#post" class="smoothScroll">{{ trans('Mensajes') }}</a></li>
                    <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container-fluid">
                @php
                $i = 1;
                @endphp
                <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4">
                    <h2>
                        {{ $post->title }}

                        @if ( $i % 3 == 1 )
                        @endif
                    </h2>
                    <p>
                        {{ $post->body }}
                    </p>
                </div>
                    @php $i++; @endphp
                    @if ($i % 3 == 1 && $i <> 1)
            </div><div class="row">
                    @endif
                @endforeach
            </div>

        </div><!--/ #headerwrap -->
    </section>


    <section id="contact" name="contact">
        <div id="footerwrap">
            <div class="container">
                <div class="col-lg-5">
                    <h3>{{ trans('adminlte_lang::message.address') }}</h3>
                    <p>
                        Av. Greenville 987,<br/>
                        New York,<br/>
                        90873<br/>
                        United States
                    </p>
                </div>

                <div class="col-lg-7">
                    <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
                    <br>
                    <form role="form" action="#" method="post" enctype="plain">
                        <div class="form-group">
                            <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                            <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                        </div>
                        <div class="form-group">
                            <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                            <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                            <textarea class="form-control" name="Message" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div id="c">
            <div class="container">
                <p>
                    <strong>Copyright &copy; 2020
                    <br/>
                    Prueba Blog
                    <br/>

                </p>

            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
