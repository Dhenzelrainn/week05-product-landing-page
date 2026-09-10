<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Homemade crinkles and banana cupcakes from C'Bites. A little bite of happiness in Cavinti, Sta. Cruz and Calamba.">
    <meta name="theme-color" content="#EC1E79">
    <title>@yield('title', "C'Bites | Homemade Goodness, Happier Days")</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <noscript><style>.navigation{display:flex}.menu-toggle{display:none}</style></noscript>
</head>

<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    <div class="scroll-progress" data-scroll-progress aria-hidden="true"></div>
    @yield('content')
    <button type="button" class="to-top" data-to-top aria-label="Back to top">↑</button>
</body>

</html>
