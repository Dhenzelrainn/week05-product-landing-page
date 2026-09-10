<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Homemade crinkles and banana treats from C'Bites. Soft, moist, chewy, affordable treats available through direct messages.">
    <meta name="theme-color" content="#E95CAE">
    <title>@yield('title', "C'Bites | Homemade Goodness, Happier Days")</title>

    @vite([
        'resources/css/app.css',
        'resources/css/cbites-home.css',
        'resources/js/app.js'
    ])

    <noscript>
        <style>
            .navigation { display: flex !important; }
            .menu-toggle { display: none !important; }
            [data-reveal] { opacity: 1 !important; transform: none !important; }
        </style>
    </noscript>
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    <div class="scroll-progress" data-scroll-progress aria-hidden="true"></div>

    @yield('content')

    <button type="button" class="to-top" data-to-top aria-label="Back to top">↑</button>
</body>
</html>
