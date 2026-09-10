<header class="site-header" data-navbar>
    <div class="shell nav-inner flex items-center justify-between gap-4">
        <a href="{{ route('home') }}" aria-label="C'Bites home"><img class="brand-logo"
                src="{{ asset('images/cbites-logo.png') }}" alt="C'Bites" width="837" height="305"></a>
        <button class="menu-toggle" type="button" aria-label="Open navigation" aria-controls="navigation"
            aria-expanded="false" data-menu-button><span aria-hidden="true">☰</span></button>
        <nav id="navigation" class="navigation" aria-label="Main navigation" data-mobile-menu>
            @foreach (['home' => 'Home', 'features' => 'Features', 'products' => 'Products', 'pricing' => 'Pricing', 'testimonials' => 'Testimonials', 'contact' => 'Contact'] as $section => $label)
                <a class="nav-link" href="{{ route('home') }}#{{ $section }}">{{ $label }}</a>
            @endforeach
            <x-button :href="route('signin')" variant="secondary">Sign In</x-button>
            <x-button :href="route('contact')">Get Started</x-button>
        </nav>
    </div>
</header>
