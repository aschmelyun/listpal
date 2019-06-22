<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="list-hash" content="{{ $checklist->hash ?? '' }}">
    <title>{{ $title ?? 'Welcome' }} &larr; ListPal</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/assets/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Assistant:700|Roboto:400,500,700&display=swap" rel="stylesheet">
</head>