<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Southern Virtual Open Day</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style.css" rel="stylesheet" />

    </head>
    <body id="page-top">

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/first">Southern Virtual Open Day</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="font-size:15px;">
                <ul class="navbar-nav mX-auto">
                    <li class="nav-item"><a class="nav-link" href="download">Download Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="map">Map</a></li>
                    <li class="nav-item"><a class="nav-link" href="forum">Forum</a></li>
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">School</a>
                            <div class="dropdown-menu">
                                <a href="/club/view"class="dropdown-item">Club</a>
                                <a href="/course/view" class="dropdown-item">Course</a>
                                <a href="/faculty/view" class="dropdown-item">Faculty</a>
                            </div>
                            </li>
                        </ul>
                    </div>
                    {{-- <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Award</a>
                                <div class="dropdown-menu">
                                    <a href="recordaward" class="dropdown-item">Record Award</a>
                                    <a href="show_award" class="dropdown-item">Show Award</a>
                                    <a href="video" class="dropdown-item">Video Record</a>
                                    <a href="calendar" class="dropdown-item">Calendar</a>
                                </div>
                            </li>
                        </ul>
                    </div> --}}

                    <ul class="navbar-nav ml-auto">
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login/Register</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                            <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                        </div>
                    </li>
                    @endif
                    @else

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                            {{ Auth::user()->name }}


                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('user.logout') }}" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                    @endguest
                    </ul>

                </ul>
            </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>


        <div id="feedback">
          <a href="/feedback"><div id="feedback-tab">Feedback</div></a>
        </div>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
