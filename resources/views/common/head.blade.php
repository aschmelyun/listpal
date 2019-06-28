<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="list-hash" content="{{ $checklist->hash ?? '' }}">
    <title>{{ $title ?? 'Welcome' }} &larr; ListPal</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/assets/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Assistant:700|Roboto:400,500,700&display=swap" rel="stylesheet">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="/assets/images/icons/icon_120x120.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/icons/icon_57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/icons/icon_60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/icons/icon_72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/icons/icon_76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/icons/icon_114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/icons/icon_120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/icons/icon_144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/icons/icon_152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/assets/images/icons/icon_167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/icons/icon_180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/images/icons/icon_192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/icons/icon_16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/icons/icon_32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/icons/icon_96x96.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#424242">
    <meta name="msapplication-TileImage" content="/assets/images/icons/icon_144x144.png">
    <meta name="theme-color" content="#424242">
</head>