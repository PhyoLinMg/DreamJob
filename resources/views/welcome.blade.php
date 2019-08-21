<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome from Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .atag {
          display: inline-block;
          padding-left:20px;
          transition: .3s;
          font-weight:bold;
          text-decoration:none;
      }
      .atag:hover {
         -webkit-transform: scale(1.2);
         transform: scale(1.2);
     }
 </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">DreamJob</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="{{ route('job.index') }}">Job</a>
          <a class="nav-item nav-link" href="#">Companies</a>
          @if (Route::has('login'))
          <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-outline-success">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>Available Jobs</p>
            @foreach($jobs as $job)
            <a href="{{ route('get',['id'=>$job->id]) }}" class="atag">{{$job->post}}</a></br>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
