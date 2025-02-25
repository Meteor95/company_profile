<!doctype html>
<html lang="id" data-theme="light">
<head>
    @include('includes.assetsheader')
    @yield('css_load')
</head>
<body>
    @yield('konten_utama')
    @include('includes.assetsfooter')
    @yield('js_load')
</body>
</html>