@php
    $links = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'Features', 'route' => 'features'],
        ['label' => 'Products', 'route' => 'products'],
        ['label' => 'Pricing', 'route' => 'pricing'],
        ['label' => 'Testimonials', 'route' => 'testimonials'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-[#7a4229]/10 bg-[#fffaf3]/95 shadow-[0_8px_30px_rgba(90,45,29,0.05)] backdrop-blur-xl">
    <nav class="mx-auto flex min-h-20 max-w-7xl items-center justify-between gap-5 px-5 lg:px-8" aria-label="Main navigation">
        <a href="{{ route('home') }}" class="flex shrink-0 items-center" aria-label="C'Bites home">
            <img src="{{ asset('images/cbites-logo.png') }}" alt="C'Bites logo" class="h-12 w-auto sm:h-14">
        </a>

        <div class="hidden items-center justify-center gap-1 lg:flex xl:gap-2">
            @foreach($links as $link)
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'nav-link rounded-full px-3 py-2 text-[13px] font-semibold xl:px-4 xl:text-sm',
                        'nav-link-active' => request()->routeIs($link['route']),
                    ])
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        <div class="hidden shrink-0 items-center gap-2 lg:flex xl:gap-3">
            <a href="{{ route('signin') }}" class="nav-action-secondary">Sign In</a>
            <a href="{{ route('contact') }}" class="nav-action-primary">Get Started</a>
        </div>

        <button
            type="button"
            class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-[#8c4b2f]/15 bg-white text-[#5a2d1d] shadow-sm transition hover:bg-[#fff1f7] lg:hidden"
            aria-label="Open navigation menu"
            aria-expanded="false"
            data-menu-button
        >
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" />
            </svg>
        </button>
    </nav>

    <div class="hidden border-t border-[#8c4b2f]/10 bg-[#fffaf3] px-5 py-5 lg:hidden" data-mobile-menu>
        <div class="mx-auto grid max-w-7xl gap-1 font-semibold">
            @foreach($links as $link)
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'mobile-nav-link',
                        'mobile-nav-link-active' => request()->routeIs($link['route']),
                    ])
                >
                    {{ $link['label'] }}
                </a>
            @endforeach

            <div class="mt-3 grid grid-cols-2 gap-3">
                <a href="{{ route('signin') }}" class="nav-action-secondary w-full">Sign In</a>
                <a href="{{ route('contact') }}" class="nav-action-primary w-full">Get Started</a>
            </div>
        </div>
    </div>
</header>
