<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('layouts.partials.head')

</head>
<body class="index-page" x-data="languageSwitcher()">

    @include('layouts.partials.navbar')

    <main class="main">
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    @include('layouts.partials.floating-actions')

    @include('layouts.partials.script')

    @stack('script')

</body>
</html>