<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.partials.head')
</head>

<body class="index-page" x-data="languageSwitcher()">
    <a href="#main-content" class="visually-hidden-focusable skip-link">Skip to main content</a>
    @include('layouts.partials.navbar')
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.floating-actions')
    @include('layouts.partials.script')
</body>

</html>