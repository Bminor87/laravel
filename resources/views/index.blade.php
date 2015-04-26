<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style>

    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">Käytät <strong>vanhentunutta</strong> selainta. Ole hyvä ja <a href="http://browsehappy.com/">päivitä selaimesi</a> saadaksesi sivuista täyden hyödyn.</p>
<![endif]-->
<div id="loading">
    <div id="floatingCirclesG">
        <div class="f_circleG" id="frotateG_01">
        </div>
        <div class="f_circleG" id="frotateG_02">
        </div>
        <div class="f_circleG" id="frotateG_03">
        </div>
        <div class="f_circleG" id="frotateG_04">
        </div>
        <div class="f_circleG" id="frotateG_05">
        </div>
        <div class="f_circleG" id="frotateG_06">
        </div>
        <div class="f_circleG" id="frotateG_07">
        </div>
        <div class="f_circleG" id="frotateG_08">
        </div>
    </div>
    <h2>&nbsp;Loading</h2>
</div>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">{{ $company }}</a>
            <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div>
        <div id="navbar" class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Oma Kaappi</a></li>
                <li><a href="#">Reseptit</a></li>
                <li><a href="#">Keskustelu</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <img id="testimage" src="img/015.png" alt="test"/>
        <div id="breadcrumbs" class="row">
            <ol class="breadcrumb">
                <li><a href="#">Make</a></li>
                <li><a href="#">These</a></li>
                <li class="active">Dynamic</li>
            </ol>
        </div>
        <h1>{{ $h1 }}</h1>
        <p>This should also be something dynamic, perhaps explaining the nature of the current page, or including some nice photos or something else.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>
@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Something</h3>
                <img src="http://placehold.it/150x150" alt="placeholder image"/>
            </div>
            <div class="col-sm-4">
                <h3>Kuivakaappi</h3>
                <div class="form-group">
                {!! Form::open(['action' => 'HomeController@index']) !!}
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                </div>
            </div>
            <div class="col-sm-4">
                <h3>About</h3>
                <p>Copyright &copy; {{ $company }} {{ date("Y") }}</p>
            </div>
        </div>
    </div>
</footer>
</div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>
<script>

    $(document).ready(function(){
        $('#loading').hide();
        $('.list-group div').click(function(){
            var getIt=encodeURIComponent($(this).attr('id'));
            $('#omaKaappi').load('{{ action('HomeController@add') }}?add='+getIt);
            $(this).hide();
        });
        $('#reset').click(function(){
            $('#omaKaappi').load('{{ action('HomeController@reset') }}');
        });
    });
    /*
     function addIng(name,getadd) {
     var xmlhttp;
     if(window.XMLHttpRequest){
     xmlhttp = new XMLHttpRequest();
     } else{
     xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
     }
     xmlhttp.onreadystatechange = function(){
     if(xmlhttp.readyState==4 && xmlhttp.status==200){
     document.getElementById('omaKaappi').innerHTML = xmlhttp.responseText;
     }
     }
     var url = 'index.php?'+getadd+'='+name;
     xmlhttp.open("GET",url,true);
     xmlhttp.send();
     }
     */

</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
