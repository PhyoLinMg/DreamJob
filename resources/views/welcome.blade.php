<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome from DreamJob</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="{{ route('job.index') }}">Jobs</a>
                        <a class="nav-item nav-link" href="{{ route('userindex') }}">Companies</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="btn btn-outline-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-outline-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @if(Auth::user()->role=="admin" ||Auth::user()->role=="company")
                            <a href="/admin" class="dropdown-item">Admin</a>
                            @endif
                            
                        </div>
                        
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <p class="">Featured Jobs</p>
            <div class="row" style="margin-bottom: 20px">
                @foreach($jobs as $job)
                <div class="col-md-6">
                    <div class="card">
                      <img class="card-img-top" src="{{ asset('image/suzuki.png') }}" style="height: 100px;" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('get',['id'=>$job->id]) }}" class="atag">{{$job->post}}</a></br>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <p>Featured Jobs</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                          <img class="card-img-top" src="{{ asset('image/mdg.png') }}" alt="Card image cap" style="height: 100px">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                      <img class="card-img-top" src="{{ asset('image/nibban.png') }}" alt="Card image cap" style="height: 100px">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('image/g&g.png') }}" alt="Card image cap" style="height: 100px">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="carousel-item">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
              <img class="card-img-top" src="{{ asset('image/lotteria.png') }}" alt="Card image cap" style="height: 100px">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('image/ykko.png') }}" alt="Card image cap" style="height: 100px">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card">
      <img class="card-img-top" src="{{ asset('image/cb.png') }}" alt="Card image cap" style="height: 100px">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
</div>
</div>
</div>
<div class="carousel-item">
  <div class="row">
    <div class="col-lg-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('image/pan_pacific.png') }}" alt="Card image cap" style="height: 100px">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card">
      <img class="card-img-top" src="{{ asset('image/nestle.png') }}" alt="Card image cap" style="height: 100px">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
</div>
<div class="col-lg-4">
    <div class="card">
      <img class="card-img-top" src="{{ asset('image/sein_gay_hr.png') }}" alt="Card image cap" style="height: 100px">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
</div>
</div>
</div>
</div>
{{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a> --}}
</div>
<p style="margin-top: 20px;">Participated Companies</p>
<div class="row">
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/cb.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/chevrolet.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/DKSH.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/duwun.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/g&g.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/heiniken.png') }}" alt="" style=" width: 150px;"></div>
</div>
<div class="row">
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/jcgv.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/lotteria.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/mdg.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/nestle.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/nibban.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/pan_pacific.png') }}" alt="" style=" width: 150px;"></div>
</div>
<div class="row">
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/pocari_sweat.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/royalD.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/sanparoo.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/sein_gay_hr.png') }}" alt=""></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/uni.png') }}" alt="" style=" width: 150px;"></div>
    <div class="col-lg-2 col-md-3 col-sm-4"><img src="{{ asset('image/suzuki.png') }}" alt="" style=" width: 150px;"></div>
</div>

</div>

</div>
</div>
</body>
{{-- <script>
    $('.carousel').carousel()
</script> --}}
</html>
