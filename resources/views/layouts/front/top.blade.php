<nav class="navbar navbar-expand-lg bg-white navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
{{--        <h1 class="m-0" style="color:black!important">AFL</h1>--}}
        <img src="img/logo.png" style="width: 100px; max-height: 200px;" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link " style="color:black!important">Home</a>
            <a href="{{ route('front.courses') }}" class="nav-item nav-link" style="color:black!important">Courses</a>
            <a href="{{ route('front.plans') }}" class="nav-item nav-link" style="color:black!important">Plans</a>

            <a href="" class="nav-item nav-link" style="color:black!important">About</a>
            <a href="" class="nav-item nav-link" style="color:black!important">Contact</a>
        </div>
        @if (Route::has('login'))
        @auth
        <a href="{{ route('dashboard') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Login</a>
        @endauth

        @endif
    </div>
</nav>
