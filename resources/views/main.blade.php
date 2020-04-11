<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @include('partials.header')
            @yield('content')
        </div>
        @include('partials.footer')
        @include('partials.footer-scripts')
    </body>
</html>
