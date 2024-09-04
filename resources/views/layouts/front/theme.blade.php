<!DOCTYPE html>
<html lang="en">
@include('layouts.front.header')
<body>
<div class="container-fluid bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Main Content Start -->
    <div class="row" style="--bs-gutter-x: -1.7rem;">
        <!-- Left Column -->
        <div class="col-lg-9 position-relative p-0">
            @include('layouts.front.top')
            @yield('content')
        </div>

        <!-- Right Column -->
        @include('layouts.front.right-column')
    </div>
    <!-- Main Content End -->

    @include('layouts.front.footer')
</div>
</body>
</html>
