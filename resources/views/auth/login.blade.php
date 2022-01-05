<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VC Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background:#ffb521;box-shadow: 0px 0px 4px 2px grey;">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><img src="img/DF-blue.webp" class="img-fluid"></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i>
                </span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item link-decoration">
                        <a class="nav-link" href="#">Students</a>
                    </li>
                    <li class="nav-item link-decoration">
                        <a class="nav-link" href="#">Recruiters</a>
                    </li>
                    <li class="nav-item link-decoration">
                        <a class="nav-link" href="#">Institutions</a>
                    </li>
                    <li class="nav-item link-decoration">
                        <a class="nav-link" href="#">Information Hub</a>
                    </li>
                    <li class="nav-item dropdown link-decoration">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Company </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">About</a>
                            <a class="dropdown-item" href="#">Career</a>
                            <a class="dropdown-item" href="#">Contact</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown login-btn">
                        <a class="nav-link dropdown-toggle" href="#" id="signupDropdown" data-toggle="dropdown">Signup </a>
                        <div class="dropdown-menu dropdown-menu dropdown-menu-right" id="signupDropdownmenu">
                            <a class="dropdown-item" target="_blank" href="#">Recruiter</a>
                            <a class="dropdown-item" target="_blank" href="#">Student</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- end header -->
    <!-- strat login container -->
    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-lg-block col-lg-8 m-auto">
                <div class="row mt-4">
                    <div class="col-md-7 m-auto"><img src="https://app.dfavo.com/assets/pictures/work_together.svg" alt="" width="100%"> </div>
                </div>
                <div class="row m-3">
                    <div class="col-md-6 mt-2">
                        <div class="card" style="background-color: #f9f9f9;">
                            <div class="card-header card-header-custom">Recruiters</div>
                            <div class="card-body" style="padding-top: 5px">
                                <p>Help your students with access to 1,100+ institutions, 100,000+ programs from 32+ leading countries worldwide.</p>
                                <a class="btn-successful" href="https://signup.dfavo.com/">PARTNER WITH US</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="card" style="background-color: #f9f9f9;">
                            <div class="card-header card-header-custom">Students</div>
                            <div class="card-body" style="padding-top: 5px">
                                <p>Discover opportunities around the world. Search, compare, shortlist and apply to courses with just a few clicks!</p>
                                <a href="https://signup.dfavo.com/student" class="btn-successful">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-auto">
                <div class="row my-3">
                    <div class="col-md-12 col-xs-12 text-justify">
                        <p class="bg-danger p-3 text-white d-none" id="message" style="border-radius: 5px"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 m-auto mt-2 mb-1 pt-4 pb-4">
                        <h1 style="margin-bottom: 20px">Login </h1>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success mb-3 rounded-0" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="col-lg-10 m-auto">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <x-jet-input type="text" name="identity" class="form-control" :value="old('email')" required autofocus />
                                <x-jet-input-error for="email"></x-jet-input-error>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required autocomplete="current-password" />
                                <x-jet-input-error for="password"></x-jet-input-error>
                                <small id="emailHelp" class="form-text text-muted">For studyportal.io users! login details are same</small>
                            </div>
                            <div class="d-flex align-items-center field-wrapper toggle-pass">
                                <p class="d-inline-block mb-1">Show Password</p>
                                <label class="switch s-primary ml-2">
                                    <input type="checkbox" id="toggle-password" onclick="if (!window.__cfRLUnblockHandlers) return false; showPassword()" class="d-none">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="col-md-12 text-right">
                                <x-jet-button>
                                    {{ __('Log in') }}
                                </x-jet-button>
                            </div>
                        </form>
                        <div class="d-sm-flex justify-content-between mt-2">
                            <div class="field-wrapper">
                                <p style="color:#5f5c5c">Forgot account Password?    @if (Route::has('password.request'))
                            <a class="text-muted me-3" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end login container -->
    <!-- start login study portal -->
    <div class="loginstudyportal">
        <p><span>Studyportal.io is now</span> Dfavo <sup><small>™</small></sup></p>
    </div>
    <!-- start login study portal -->
    <!-- start footer -->
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 footer-inner text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><b><a class="whitten" href="">Terms</a></b></li>
                        <li class="list-inline-item"><b><a class="whitten" href="">Privacy</a></b></li>
                        <li class="list-inline-item"><b><a class="whitten" href="">Contact</a></b></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-inner text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a target="_blank" href="" class="whitten"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a target="_blank" href="" class="whitten"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 m-auto text-center footer-inner">
                    <div class="whitten">
                        <p class="mb-1">© Dfavo<sup>™</sup> 2021 All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>