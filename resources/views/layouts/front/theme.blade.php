<!DOCTYPE html>
<html lang="en">
@include('layouts.front.header')

<body>
<div class="container bg-gradient-light p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Main Content Start -->
    <div class="row">
        <!-- Left Column -->
        <div class="col-lg-10 position-relative p-0">
            @include('layouts.front.top')
            @yield('content')
        </div>

        <!-- Right Column -->
        <div class="col-lg-2 bg-secondary text-white p-4">
            <h2>Right Column</h2>
            <p>This is the right column with additional content.</p>
        </div>
    </div>
    <!-- Main Content End -->

    @include('layouts.front.footer')
</div>
</body>
</html>
