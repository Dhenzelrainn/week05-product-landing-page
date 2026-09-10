<footer id="contact" class="site-footer">
    <div class="shell footer-grid grid gap-10 md:grid-cols-2 lg:grid-cols-4">
        <div><a href="{{ route('home') }}"><img class="footer-logo" src="{{ asset('images/cbites-logo.png') }}"
                    alt="C'Bites" width="837" height="305" loading="lazy"></a>
            <p>Homemade Goodness,<br>Happier Days</p>
            <div class="socials flex gap-2" aria-label="Social channels">
                @foreach (['facebook' => 'f', 'instagram' => '◎', 'tiktok' => '♪', 'messenger' => '↯'] as $platform => $icon)
                    @if (config('cbites.socials.' . $platform))
                        <a href="{{ config('cbites.socials.' . $platform) }}"
                            aria-label="C'Bites on {{ ucfirst($platform) }}" rel="noopener noreferrer"
                        target="_blank">{{ $icon }}</a>@else<span class="social-unavailable"
                            title="{{ ucfirst($platform) }} link not yet provided"
                            aria-label="{{ ucfirst($platform) }} link not yet provided">{{ $icon }}</span>
                    @endif
                @endforeach
            </div>
        </div>
        <div>
            <h3>Quick Links</h3>
            <div class="footer-links">
                @foreach (['home' => 'Home', 'features' => 'Features', 'products' => 'Products', 'pricing' => 'Pricing', 'testimonials' => 'Testimonials'] as $id => $label)
                    <a href="{{ route('home') }}#{{ $id }}">{{ $label }}</a>
                @endforeach
            </div>
        </div>
        <div>
            <h3>Contact Us</h3><a href="tel:+639946596224">0994-659-6224</a>
            <p>Cavinti, Sta. Cruz, Calamba</p>
            <p>Message us for orders, pickup, and delivery arrangements.</p><a class="text-link"
                href="{{ route('contact') }}">Let's talk ↗</a>
        </div>
        <div>
            <h3>Business Hours</h3>
            <p>Made-to-order</p>
            <p>Message us to confirm our current ordering schedule and availability.</p><span class="footer-heart"
                aria-hidden="true">♡</span>
        </div>
    </div>
    <div class="shell footer-bottom flex flex-col gap-3 md:flex-row md:justify-between">
        <p>© 2025 C'Bites. All rights reserved.</p>
        <p>Homemade with <span class="heartbeat" aria-label="love">♥</span> in Cavinti, Sta. Cruz, Calamba</p>
    </div>
</footer>
