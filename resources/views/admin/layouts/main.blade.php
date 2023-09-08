<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @include('admin.layouts.header')
</head>

<body>
    <main class="main">
        @include('admin.layouts.sidebar')
        <div class="content-wrapper">
            @include('admin.layouts.navbar')
            <div class="content">
                <div class="p-3">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    @include('admin.layouts.footer')
</body>

</html>
