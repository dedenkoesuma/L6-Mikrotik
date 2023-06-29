<!doctype html>
<html class="no-js" lang="en">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.header')

        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>

        @yield('page')
        @include('partials.script')

    </body>
</html>
