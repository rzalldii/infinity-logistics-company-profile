    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msvalidate.01" content="87838AA91B500CE846EA59FACB669B69"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7GKDNCWX4R"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-7GKDNCWX4R');
    </script>

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <link rel="canonical" href="@yield('canonical')">

    <!-- Favicons -->
    <link href="<?php echo url('/'); ?>/img/favicon.webp" rel="icon" alt="Icon Infinity">
    <link href="<?php echo url('/'); ?>/img/apple-touch-icon.webp" rel="apple-touch-icon" alt="Touch Icon Infinity">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

    <!-- Preload CSS Files -->
    <link href="<?php echo url('/'); ?>/vendor/aos/css/aos.css" rel="preload" as="style">
    <link href="<?php echo url('/'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="preload" as="style">
    <link href="<?php echo url('/'); ?>/vendor/bootstrap-icons/bootstrap-icons.min.css" rel="preload" as="style">
    <link href="<?php echo url('/'); ?>/vendor/glightbox/css/glightbox.min.css" rel="preload" as="style">
    <link href="<?php echo url('/'); ?>/vendor/sweetalert2/css/sweetalert2.min.css" rel="preload" as="style">
    <link href="<?php echo url('/'); ?>/vendor/swiper/css/swiper-bundle.min.css" rel="preload" as="style">
    <!-- <link href="<?php echo url('/'); ?>/css/main.css" rel="preload" as="style"> -->
    <link href="<?php echo url('/'); ?>/css/main.min.css" rel="preload" as="style">

    <!-- Vendor CSS Files -->
    <link href="<?php echo url('/'); ?>/vendor/aos/css/aos.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/bootstrap-icons/bootstrap-icons.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/sweetalert2/css/sweetalert2.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <!-- <link href="<?php echo url('/'); ?>/css/main.css" rel="stylesheet"> -->
    <link href="<?php echo url('/'); ?>/css/main.min.css" rel="stylesheet">