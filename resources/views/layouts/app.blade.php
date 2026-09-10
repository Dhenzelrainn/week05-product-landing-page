<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="C'Bites homemade crinkles and banana cupcakes in Laguna.">
    <title>@yield('title', "C'Bites | Homemade Treats")</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#fffaf3] text-[#3d2117] antialiased">
    @yield('content')
</body>
</html>
