<!DOCTYPE html>
<html lang="en">
@include('layouts.front.header')

<body class="margin: 0px; padding: 0px;">
    <div class="w-full container-xxl bg-white p-0" >

        <div class="position-relative p-0">
            @include('layouts.front.top')
            @yield('content')

        </div>
        <!-- Navbar & Hero End -->


        @include('layouts.front.footer')
    </div>
</body>
</html>
