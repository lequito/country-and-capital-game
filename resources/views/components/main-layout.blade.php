<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>

    <x-logo/>

    {{ $slot }}

    <x-footer/>

    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js"') }}'></script>

</body>
</html>