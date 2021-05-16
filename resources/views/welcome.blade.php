<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- SITE TITLE -->
    <title>Ultra Profile HTML5 Template</title>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{asset('template')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('template')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('template')}}/css/templatemo-style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>
    <!-- 

Ultra Profile

https://templatemo.com/tm-464-ultra-profile

-->
</head>

<body data-spy="scroll" data-target="#rock-navigation">
    <!-- START NAVIGATION -->
    <div class="navbar navbar-default bs-dos-nav navbar-fixed-top sticky-navigation" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Ultra Profile</a>
            </div>
            <nav class="collapse navbar-collapse" id="rock-navigation">
                <ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#work" class="smoothScroll">My Work</a></li>
                    <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
                    <li><a href="#resume" class="smoothScroll">Resume</a></li>
                    <li><a href="#about" class="smoothScroll">About</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>


                    @guest

                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <br>
                            <a href="{{route('admin.dashboard')}}" class="dropdown-item">Dashboard</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </nav>

        </div>
    </div>
    <!-- END NAVIGATION -->

    <!-- START HOME -->
    <section id="home" class="templatemo-home">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-8 col-sm-10">
                    <h1 class="tm-home-title"><strong>{{$profile->name}}</strong></h1>
                    <h2 class="tm-home-subtitle">{{$profile->job}}</h2>
                    <p>{{$profile->intro}}</p>
                    <a href="#work" class="btn btn-default smoothScroll tm-view-more-btn">Let's Begin</a>
                </div>
                <div class="col-md-2 col-sm-1"></div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START work -->
    <section id="work" class="tm-padding-top-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-11">
                    <h2 class="title">My <strong>Work</strong></h2>
                </div>
                @if (count($works) >= 1)
                <div class="col-md-4 col-sm-4">
                    <div class="work-wrapper">
                        <i class="fa fa-link"></i>
                        <h3 class="text-uppercase tm-work-h3">{{$works[0]->name}}</h3>
                        <hr>
                        <p>{{$works[0]->description}}</p>
                    </div>
                </div>
                @endif
                @if (count($works) >= 2)
                <div class="col-md-4 col-sm-4">
                    <div class="work-wrapper">
                        <i class="fa fa-flash"></i>
                        <h3 class="text-uppercase tm-work-h3">{{$works[1]->name}}</h3>
                        <hr>
                        <p>{{$works[1]->description}}</p>
                    </div>
                </div>
                @endif
                @if (count($works) >= 3)
                <div class="col-md-4 col-sm-4">
                    <div class="work-wrapper">
                        <i class="fa fa-dashboard"></i>
                        <h3 class="text-uppercase tm-work-h3">{{$works[2]->name}}</h3>
                        <hr>
                        <p>{{$works[2]->description}}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    <!-- END work -->

    <!-- START PORTFOLIO -->
    <section id="portfolio" class="tm-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow bounce">
                    <div class="title">
                        <h2 class="tm-portfolio-title">My <strong>Portfolio</strong></h2>
                    </div>

                    <!-- START ISO SECTION -->
                    <div class="iso-section">
                        <ul class="filter-wrapper clearfix">
                            <li><a href="#" class="opc-main-bg selected" data-filter="*">All</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".laravel">LARAVEL</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".certi">CERTIFICATIONS</a></li>
                        </ul>
                        <div class="iso-box-section">
                            <div class="iso-box-wrapper col4-iso-box">
                                <div class="iso-box laravel col-md-3 col-sm-3 col-xs-12">
                                    <div class="portfolio-thumb">
                                        <img style="width:317px;height:200px"
                                            src="{{asset('template')}}/images/portfolio-img1.jpg" class="fluid-img"
                                            alt="portfolio img">
                                        <div class="portfolio-overlay">
                                            <h3 class="portfolio-item-title">Nobel Dent</h3>
                                            <p>An Ecommerce website for a dental supplies company</p>
                                            <a href="" style="color:black;text-decoration:none;">
                                                <i class="fas fa-location-arrow"></i>
                                                visit site
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="iso-box certi col-md-3 col-sm-3 col-xs-12">
                                    <div class="portfolio-thumb">
                                        <img style="width:317px;height:200px"
                                            src="{{asset('images/certifications/1.png')}}" class="fluid-img"
                                            alt="portfolio img">
                                        <div class="portfolio-overlay">
                                            <h3 class="portfolio-item-title">Js</h3>
                                            <p>Got this from a website called free code camp</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="iso-box certi col-md-3 col-sm-3 col-xs-12">
                                    <div class="portfolio-thumb">
                                        <img style="width:317px;height:200px"
                                            src="{{asset('images/certifications/2.jpg')}}" class="fluid-img"
                                            alt="portfolio img">
                                        <div class="portfolio-overlay">
                                            <h3 class="portfolio-item-title">C#</h3>
                                            <p>Got this from a website called Udemy</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="iso-box certi col-md-3 col-sm-3 col-xs-12">
                                    <div class="portfolio-thumb">
                                        <img style="width:317px;height:200px"
                                            src="{{asset('images/certifications/3.png')}}" class="fluid-img"
                                            alt="portfolio img">
                                        <div class="portfolio-overlay">
                                            <h3 class="portfolio-item-title">HTML / CSS</h3>
                                            <p>Got this from a website called free code camp</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PORTFOLIO -->

    <!-- START RESUME -->
    <section id="resume" class="tm-padding-top-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="title">My <strong>Profile</strong></h2>
                    <p><span class="tm-info-label">Name</span> Mohammed Emad Makhlouf</p>
                    <p><span class="tm-info-label">Birthday</span> Augest 7, 1996</p>
                    <p><span class="tm-info-label">Address</span> Meet - Elwan - kafr ElSheikh</p>
                    <p><span class="tm-info-label">Phone</span> 01013792632</p>
                    <p><span class="tm-info-label">Email</span> mohammedmakhlouf78@gmail.com</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h2 class="title"><strong>Some</strong> Skills</h2>
                    <p>Iam a laravel Back end Web Dev who is looking to master and specialize in Backend Development</p>
                    <h4 class="tm-progress-label">Laravel <small class="progress-percent-small">60%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                    </div>
                    <h4 class="tm-progress-label">Bootstrap <small class="progress-percent-small">100%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                    <h4 class="tm-progress-label">HTML5 <small class="progress-percent-small">100%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                    <h4 class="tm-progress-label">CSS <small class="progress-percent-small">80%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                    </div>
                    <h4 class="tm-progress-label">JavaScript <small class="progress-percent-small">60%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                    </div>
                    <h4 class="tm-progress-label">Jquery <small class="progress-percent-small">70%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                    </div>
                    <h4 class="tm-progress-label">AJAX <small class="progress-percent-small">60%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                    </div>
                    <h4 class="tm-progress-label">PHP <small class="progress-percent-small">70%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                    </div>
                    <h4 class="tm-progress-label">C# <small class="progress-percent-small">70%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END RESUME -->

    <!-- START ABOUT -->
    <section id="about" class="tm-about">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-7">
                    <div class="title">
                        <h2>This is <strong>me</strong></h2>
                        <h1 class="tm-red-text">
                            Backend Web Developer
                        </h1>
                    </div>
                    <p>
                        I was porn in El mansora i live now in kafr-el-sheikh i'm in my second year of a computer
                        science institute i like to learn new things and to aquire new skills.Right now i'm a Junior web
                        dev i'm about a year in learning how to code and about 8 months in learning web dev .I know alot
                        of things about front end but i don't like or enjoy making front end .I like back end more and i
                        want to specialize in it.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

    <!-- START SOCIAL -->
    <section id="social" class="tm-social">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.3s">
                    <div class="media facebook">
                        <a href="https://www.facebook.com/profile.php?id=100054414038292" target="_blank">
                            <div class="media-object pull-left">
                                <i style="width: 60px;height:60px;font-size:3.3em" class="fab fa-facebook"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading tm-social-title">Follow me on</h4>
                                <h3>Social Facebook</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.6s">
                    <div class="media twitter">
                        <a href="#">
                            <div class="media-object pull-left">
                                <i style="width: 60px;height:60px;font-size:3.3em" class="fab fa-twitter"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading tm-social-title">Tweet me on</h4>
                                <h3>Social Twitter</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.9s">
                    <div class="media pinterest">
                        <a href="#">
                            <div class="media-object pull-left">
                                <i style="width: 60px;height:60px;font-size:3.3em" class="fab fa-pinterest"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading tm-social-title">Pin me on</h4>
                                <h3>Social Pinterest</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SOCIAL -->

    <!-- START CONTACT -->
    <section id="contact" class="tm-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Drop <strong>me a line</strong></h2>
                    <hr>
                </div>
                <div class="col-md-1 col-sm-1"></div>
                <div class="col-md-10 col-sm-10">
                    <form action="{{route('mail.message')}}" method="post">
                        @csrf
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" placeholder="Your Name" name="name">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="email" placeholder="Your Email" name="email">
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <input class="form-control" type="text" placeholder="Your Subject" name="subj">
                            <textarea class="form-control" placeholder="Your Message" rows="6" name="mesg"></textarea>
                        </div>
                        <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                            <input class="form-control" type="submit" value="SHOOT MESSAGE">
                        </div>
                    </form>
                </div>
                <div class="col-md-1 col-sm-1"></div>
                <div class="col-md-12 col-sm-12">
                    <p>Copyright &copy; 2018 Ultra Profile
                        . design: <a rel="nofollow noopener" href="https://templatemo.com">template mo</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->
    <script src="{{asset('template')}}/js/jquery.js"></script>
    <script src="{{asset('template')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('template')}}/js/smoothscroll.js"></script>
    <script src="{{asset('template')}}/js/jquery.nav.js"></script>
    <script src="{{asset('template')}}/js/isotope.js"></script>
    <script src="{{asset('template')}}/js/imagesloaded.min.js"></script>
    <script src="{{asset('template')}}/js/custom.js"></script>
</body>

</html>