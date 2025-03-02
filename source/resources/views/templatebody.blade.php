<!doctype html>
<html lang="id" data-theme="light">
<head>
    @include('includes.assetsheader')
    @yield('css_load')
</head>
<body>
@include('includes.header')
@yield('konten_utama')
@include('includes.footer', ['use_footer' => $use_footer])
@include('includes.assetsfooter')
@yield('js_load')
</body>
</html>