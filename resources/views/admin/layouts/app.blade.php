<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('admin.layouts.templates.head')
</head>
<body>
    <div id="app">
        @include('admin.layouts.templates.sidebar')

        <div class="wrapper">
            @include('admin.layouts.templates.header')

            <div class="body">
                @yield('content')
            </div>

            @include('admin.layouts.templates.footer')
        </div>
    </div>

    <div class="sidebar-backdrop"></div>
    {{-- <div id="loadingOverlay">
        <div class="inner">
        <i class="fa fa-spinner fa-pulse fa-2x" aria-hidden="true"></i><br>
        Loading...
        </div>
    </div> --}}
</body>
</html>