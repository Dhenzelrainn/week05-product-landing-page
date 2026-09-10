<header class="site-header" data-navbar>
    <div class="shell nav-inner">
        <a class="brand-link" href="{{ route('home') }}" aria-label="C'Bites home">
            <img class="brand-logo"
                src="{{ asset('images/cbites-logo.png') }}"
                alt="C'Bites"
                width="837"
                height="305">
        </a>

        <button class="menu-toggle"
            type="button"
            aria-label="Open navigation"
            aria-controls="navigation"
            aria-expanded="false"
            data-menu-button>
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="navigation" class="navigation" aria-label="Main navigation" data-mobile-menu>
            <a class="nav-link" href="{{ route('home') }}#home">Home</a>
            <a class="nav-link" href="{{ route('home') }}#features">Features</a>
            <a class="nav-link" href="{{ route('home') }}#products">Products</a>
            <a class="nav-link" href="{{ route('home') }}#testimonials">Reviews</a>
            <a class="nav-link" href="{{ route('home') }}#contact">Contact</a>
        </nav>

        <x-button :href="route('contact')" class="nav-order">
            Order Now <span aria-hidden="true">→</span>
        </x-button>
    </div>
</header>
