<style>
    .language-selector {
        display: inline-block;
        position: relative;
    }

    .flag-display {
        font-size: 15px;
        padding: 5px;
        cursor: pointer;
        border-radius: 4px;
        width: 48px;
    }

    .dropdown {
        position: absolute;
        top: 40px; /* Adjust as needed */
        left: 0;
        display: block;
        border: 1px solid #ccc;
        padding: 5px;
        background-color: white;
        z-index: 100;
        width: 100%;
    }

    .hidden {
        display: none;
    }

    select {
        font-size: 16px;
        width: 100%;
        border: none;
        background: none;
        outline: none;
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

        <div class="language-selector">
            <div id="selectedFlag" class="flag-display" onclick="toggleDropdown()">🇺🇸</div>
            <div id="dropdownContainer" class="dropdown hidden">
                <select id="languageDropdown" onchange="updateFlag()" style="font-size: 10px" size="4">
                    <option value="en" data-flag="🇺🇸">🇺🇸En</option>
                    <option value="fr" data-flag="🇫🇷">🇫🇷 Fra</option>
                    <option value="es" data-flag="🇪🇸">🇪🇸 Spa</option>
                    <option value="de" data-flag="🇩🇪">🇩🇪 Ger</option>
                </select>
            </div>
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
    function toggleDropdown() {
        var dropdownContainer = document.getElementById("dropdownContainer");
        dropdownContainer.classList.toggle("hidden");
    }

    function updateFlag() {
        var dropdown = document.getElementById("languageDropdown");
        var selectedOption = dropdown.options[dropdown.selectedIndex];
        var flag = selectedOption.getAttribute("data-flag");

        // Show only the selected flag
        var flagDisplay = document.getElementById("selectedFlag");
        flagDisplay.innerHTML = flag;

        // Hide the dropdown after selection
        var dropdownContainer = document.getElementById("dropdownContainer");
        dropdownContainer.classList.add("hidden");
    }

    // Optional: Hide dropdown if clicking outside
    document.addEventListener('click', function(event) {
        var dropdownContainer = document.getElementById("dropdownContainer");
        var flagDisplay = document.getElementById("selectedFlag");
        if (!flagDisplay.contains(event.target) && !dropdownContainer.contains(event.target)) {
            dropdownContainer.classList.add("hidden");
        }
    });
</script>
