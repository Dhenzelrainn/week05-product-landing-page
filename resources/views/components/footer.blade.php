<footer id="contact" class="site-footer">
    <div class="shell cb-footer-main">
        <div class="cb-footer-brand">
            <a href="{{ route('home') }}" aria-label="C'Bites home">
                <img class="footer-logo"
                    src="{{ asset('images/cbites-logo.png') }}"
                    alt="C'Bites"
                    width="837"
                    height="305"
                    loading="lazy">
            </a>

            <p>homemade. affordable. always a little sweeter. ♡</p>
        </div>

        <span class="cb-footer-divider" aria-hidden="true"></span>

        <div class="cb-footer-contacts">
            <a class="cb-contact-item"
                href="https://www.instagram.com/madebyc.bites?utm_source=ig_web_button_share_sheet&stkn=ZDNlZDc0MzIxNw=="
                target="_blank"
                rel="noopener noreferrer">
                <img src="{{ asset('images/ui/instagram.svg') }}" alt="">
                <span>@madebyc.bites</span>
            </a>

            <div class="cb-contact-item">
                <img src="{{ asset('images/ui/facebook.svg') }}" alt="">
                <span>Czarina Rancap</span>
            </div>

            <div class="cb-contact-item">
                <img src="{{ asset('images/ui/messenger.svg') }}" alt="">
                <span>Czarina Rancap</span>
            </div>

            <a class="cb-contact-item" href="tel:+639946596224">
                <img src="{{ asset('images/ui/phone.svg') }}" alt="">
                <span>0994-659-6224</span>
            </a>

            <div class="cb-contact-item">
                <img src="{{ asset('images/ui/location.svg') }}" alt="">
                <span>Cavinti / Sta. Cruz / Calamba</span>
            </div>

            <a class="cb-contact-item" href="{{ route('contact') }}">
                <img src="{{ asset('images/ui/message.svg') }}" alt="">
                <span>Direct order through messages</span>
            </a>
        </div>
    </div>

    <div class="shell cb-footer-bottom">
        <p>© {{ date('Y') }} C'Bites. All rights reserved.</p>
        <p>Homemade Goodness, Happier Days.</p>
    </div>
</footer>
