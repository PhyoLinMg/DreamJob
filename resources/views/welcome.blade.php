<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Welcome from DreamJob</title>
    

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="{{ asset('js/superfish.min.js') }}"></script> 

    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script> 
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>          
    
    <script src="{{ asset('js/main.js') }}"></script> 

    <!-- Fonts -->
    

    <!-- Styles -->
    <style>
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
             DreamJob
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
                <a class="nav-item nav-link" href="{{ route('about') }}">About Us</a>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <form class="form-inline" action="{{ route('search') }}" method="post">
                    @csrf
                    <input class="form-control mr-sm-2" type="search" placeholder="Search Job" name="job"
                    aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
<section class="banner-area relative" id="home">    
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <h1 class="text-white" style="font-size: 100px">
                    <span>DreamJob</span> At Your Service                
                </h1>   
                <!-- add jobs -->
                <p class="text-white" style="font-size: 50px">Launch Your Recruitment Careers</p>
            </div>                                          
        </div>
    </div>
</section>
<!-- End banner Area -->    

<!-- Start features Area -->
<section class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Searching</h4>
                    <p>
                        Find Your Job in an easy way.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Applying</h4>
                    <p>
                        Apply Your Job Easily.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Security</h4>
                    <p>
                        Your Personal Data will not be exposed.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Notifications</h4>
                    <p>
                       You will get the Notifications Real-Time.
                    </p>
                </div>
            </div>                                                                      
        </div>
    </div>  
</section>
<!-- End features Area -->

<!-- Start popular-post Area -->
<section class="popular-post-area pt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="active-popular-post-carusel">
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('image/mdg.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Yangon</h6>
                        <p>
                            We will guarantee that your job experience will become the best.We will try to be our best to give better experience to our employees.
                        </p>
                    </div>
                </div>  
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('image/pan_pacific.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Yangon</h6>
                        <p>
                            We will guarantee that your job experience will become the best.We will try to be our best to give better experience to our employees..
                        </p>
                    </div>
                </div>
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('image/DKSH.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Yangon</h6>
                        <p>
                            We will guarantee that your job experience will become the best.We will try to be our best to give better experience to our employees..
                        </p>
                    </div>
                </div>  
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('image/duwun.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Yangon</h6>
                        <p>
                            We will guarantee that your job experience will become the best.We will try to be our best to give better experience to our employees..
                        </p>
                    </div>
                </div>  
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('image/cb.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Yangon</h6>
                        <p>
                            We will guarantee that your job experience will become the best.We will try to be our best to give better experience to our employees..
                        </p>
                    </div>
                </div>  
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('image/royalD.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Yangon</h6>
                        <p>
                            We will guarantee that your job experience will become the best.We will try to be our best to give better experience to our employees..
                        </p>
                    </div>
                </div>                                                                                                                                                          
            </div>
        </div>
    </div>  
</section>
<!-- End popular-post Area -->

<!-- Start feature-cat Area -->
<section class="feature-cat-area pt-100" id="category">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Featured Job Categories</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>                      
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="">
                        <img src="{{ asset('image/o1.png') }}" alt="">
                    </a>
                    <p>Accounting</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="l">
                        <img src="{{ asset('image/o2.png') }}" alt="">
                    </a>
                    <p>Development</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="">
                        <img src="{{ asset('image/o3.png') }}" alt="">
                    </a>
                    <p>Technology</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="">
                        <img src="{{ asset('image/o4.png') }}" alt="">
                    </a>
                    <p>Media & News</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="">
                        <img src="{{ asset('image/o5.png') }}" alt="">
                    </a>
                    <p>Medical</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="">
                        <img src="{{ asset('image/o6.png') }}" alt="">
                    </a>
                    <p>Goverment</p>
                </div>          
            </div>                                                                                                          
        </div>
    </div>  
</section>
<!-- End feature-cat Area -->

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-lg-8 post-list">
                <ul class="cat-list">
                    <li><a href="#">Recent</a></li>
                    <li><a href="#">Full Time</a></li>
                    <li><a href="#">Intern</a></li>
                    <li><a href="#">part Time</a></li>
                </ul>
                
                <!--This is one post -->
                @foreach ($jobs as $job)
                <div class="single-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('image/post.png') }}" alt="">
                        <ul class="tags">
                            <li>
                                <a href="#">Art</a>
                            </li>
                            <li>
                                <a href="#">Media</a>
                            </li>
                            <li>
                                <a href="#">Design</a>                  
                            </li>
                        </ul>
                    </div>
                    <div class="details">
                        <div class="title d-flex flex-row justify-content-between">
                            <div class="titles">
                                <a href=""><h4>{{$job->post}}</h4></a>
                                <h6>Premium Labels Limited</h6>                 
                            </div>
                            <ul class="btns">
                                <li><a href="#"><span class="fas fa-fw fa-heart"></span></a></li>
                                <li><a href="{{ route('get',['id'=>$job->id]) }}">Apply</a></li>
                            </ul>
                        </div>
                        <p>
                           Job Requirements:Need at least 1 yr experience,
                                            Must pass the matriculation exam.
                        </p>
                        <h5>Job Nature: Full time</h5>
                        <p class="address"><span class="fas fa-fw fa-map"></span> 56/8, Yangon,Latha Township</p>
                        <p class="address"><span class="fas fa-fw fa-heart"></span> {{$job->salary}}</p>
                    </div>
                </div> 
                @endforeach     
                <!--end of one post -->
                

                <a class="text-uppercase loadmore-btn mx-auto d-block" href="/job">Load More job Posts</a>

            </div>
            <div class="col-lg-4 sidebar">
                <div class="single-slidebar">
                    <h4>Top rated job posts</h4>
                    <div class="active-relatedjob-carusel">
                        @for ($i = 0; $i <=2 ; $i++)
                        <div class="single-rated">
                            <img class="img-fluid" src="{{ asset('image/r1.jpg') }}" alt="">
                            <a href=""><h4>{{$jobs[$i]->post}}</h4></a>
                            <h6>Premium Labels Limited</h6>
                            <p>
                                Job Requirements:Need at least 1 yr experience,
                                            Must pass the matriculation exam.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="fas fa-fw fa-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="fas fa-fw fa-database"></span> {{$jobs[$i]->salary}}</p>
                            <a href="{{ route('get',['id'=>$jobs[$i]->id]) }}" class="btns text-uppercase">Apply job</a>
                        </div>
                        @endfor                                                            
                    </div>
                </div>                          

                <div class="single-slidebar">
                    <h4>Jobs by Category</h4>
                    <ul class="cat-list">
                        <li><a class="justify-content-between d-flex" href=""><p>Technology</p><span>37</span></a></li>
                        <li><a class="justify-content-between d-flex" href=""><p>Media & News</p><span>57</span></a></li>
                        <li><a class="justify-content-between d-flex" href=""><p>Goverment</p><span>33</span></a></li>
                        <li><a class="justify-content-between d-flex" href="l"><p>Medical</p><span>36</span></a></li>
                        <li><a class="justify-content-between d-flex" href=""><p>Restaurants</p><span>47</span></a></li>
                        <li><a class="justify-content-between d-flex" href=""><p>Developer</p><span>27</span></a></li>
                        <li><a class="justify-content-between d-flex" href=""><p>Accounting</p><span>17</span></a></li>
                    </ul>
                </div>

                <div class="single-slidebar">
                    <h4>Carrer Advice Blog</h4>
                    <div class="blog-list">
                        <div class="single-blog " style="background:#000 url({{ asset('image/blog2.jpg') }});">
                            <a href=""><h4>Home Audio Recording <br>
                            For Everyone</h4></a>
                            <div class="meta justify-content-between d-flex">
                                <p>
                                    02 Hours ago
                                </p>
                                <p>
                                    <span class="fas fa-fw fa-heart"></span>
                                    06
                                    <span class="fas fa-fw fa-comment"></span>
                                    02
                                </p>
                            </div>
                        </div>
                        <div class="single-blog " style="background:#000 url({{ asset('image/blog1.jpg') }});">
                            <a href="l"><h4>Home Audio Recording <br>
                            For Everyone</h4></a>
                            <div class="meta justify-content-between d-flex">
                                <p>
                                    02 Hours ago
                                </p>
                                <p>
                                    <span class="fas fa-fw fa-heart"></span>
                                    06
                                    <span class="fas fa-fw fa-comment"></span>
                                    02
                                </p>
                            </div>
                        </div>
                        <div class="single-blog " style="background:#000 url({{ asset('image/blog2.jpg') }});">
                            <a href=""><h4>Home Audio Recording <br>
                            For Everyone</h4></a>
                            <div class="meta justify-content-between d-flex">
                                <p>
                                    02 Hours ago
                                </p>
                                <p>
                                    <span class="fas fa-fw fa-heart"></span>
                                    06
                                    <span class="fas fa-fw fa-comment"></span>
                                    02
                                </p>
                            </div>
                        </div>                                                                      
                    </div>
                </div>                          

            </div>
        </div>
    </div>  
</section>
<!-- End post Area -->


<!-- Start callto-action Area -->
<section class="callto-action-area section-gap" id="join">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <a class="primary-btn" href="#">I am a Candidate</a>
                    <a class="primary-btn" href="#">Request Free Demo</a>
                </div>
            </div>
        </div>  
    </div>  
</section>
<!-- End calto-action Area -->

<!-- start footer Area -->      
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-12">
                <div class="single-footer-widget">
                    <h6>Top Products</h6>
                    <ul class="footer-nav">
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://dreamjobagency.herokuapp.com" target="_blank">DreamJob</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
{{-- scripts --}}


</body>
{{-- <script>
    $('.carousel').carousel()
</script> --}}
</html>
