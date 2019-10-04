<!doctype html>
<html lang="en" dir="ltr">
    @include('layouts.partials.head')
    <body class="">
    <div class="page">
        <div class="page-main">
            @include('layouts.partials.navigation')
            @yield('content')
        </div>
        @include('layouts.partials.footer')
    </div>
    </body>
</html>
