<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Polaris App')</title>
    <!-- Include Polaris CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@latest/build/esm/styles.css" />
    <!-- Include your app's CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Include Polaris JavaScript -->
    <script src="https://unpkg.com/@shopify/polaris@latest/build/esm/index.js" defer></script>
    <!-- Include your app's JavaScript -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
