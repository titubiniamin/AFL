<style>
    .search-container {
        display: flex;
        align-items: center;
        position: relative;
    }

    .search-input {
        width: 0;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        transition: width 0.3s ease;
        opacity: 0;
        position: absolute;
        right: 25px;
    }

    .search-container svg {
        cursor: pointer;
        margin-left: 10px;
        transition: transform 0.3s ease;
    }

    .search-container.active .search-input {
        width: 150px;
        opacity: 1;
    }

    .search-container.active svg {
        transform: rotate(90deg);
    }
</style>

<nav class="navbar navbar-expand-lg bg-white navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{url('/')}}" class="navbar-brand p-0">
{{--        <h1 class="m-0" style="color:black!important">AFL</h1>--}}
        <img src="img/logo.png" style="width: 100px; max-height: 200px;" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{ route('front.courses') }}" class="nav-item nav-link" style="color:black!important">About</a>
            <a href="" class="nav-item nav-link" style="color:black!important">Live</a>
            <a href="" class="nav-item nav-link" style="color:black!important">Socials</a>
            <a href="{{ route('front.courses') }}" class="nav-item nav-link" style="color:black!important">Courses</a>
            <a href="" class="nav-item nav-link " style="color:black!important">Session</a>
            <a href="" class="nav-item nav-link" style="color:black!important"> Program</a>
            <a href="" class="nav-item nav-link" style="color:black!important">Health</a>
            <a href="" class="nav-item nav-link" style="color:black!important">Recruitment</a>
            <a href="" class="nav-item nav-link" style="color:black!important">Blogs</a>
        </div>




        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" id="search-icon">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </div>



        @if (Route::has('login'))
        @auth
        <a href="{{ route('dashboard') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block" >Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Login</a>
        @endauth

        @endif
    </div>
</nav>
<script>
    // jQuery click event to toggle the search input visibility
    $('#search-icon').on('click', function() {
        $('.search-container').toggleClass('active');
    });
</script>
