<section class="cb-showcase-section" aria-labelledby="showcase-heading">
    <div class="shell">
        <div class="cb-showcase-heading" data-reveal>
            <p class="cb-section-kicker">Product showcase</p>
            <h2 id="showcase-heading">A closer look at <span>C'Bites</span></h2>
            <p>Desktop product preview, ordering dashboard concept, mobile view, and the key highlights of the experience.</p>
        </div>

        <div class="cb-showcase-grid grid grid-cols-1 gap-6 lg:grid-cols-3">
            <article class="cb-showcase-card rounded-[26px] shadow-sm" data-reveal>
                <span class="cb-showcase-label">Product Preview</span>
                <div class="cb-browser-frame" aria-label="Product preview mockup">
                    <div class="cb-browser-bar" aria-hidden="true"><span></span><span></span><span></span></div>
                    <img src="{{ asset('images/banana-box-2.webp') }}"
                        alt="Banana treats product preview"
                        width="700"
                        height="520"
                        loading="lazy">
                    <div class="cb-browser-copy">
                        <strong>Banana Treats</strong>
                        <span>Freshly baked • homemade • chocolate-topped</span>
                    </div>
                </div>
            </article>

            <article class="cb-showcase-card rounded-[26px] shadow-sm" data-reveal style="--reveal-delay: .06s">
                <span class="cb-showcase-label">Order Dashboard Preview</span>
                <div class="cb-dashboard-preview" aria-label="Front-end order dashboard preview">
                    <div class="cb-dashboard-head">
                        <strong>Today's Menu</strong>
                        <span>Front-end preview</span>
                    </div>
                    <div class="cb-dashboard-row"><span>Banana Treats</span><b>Available</b></div>
                    <div class="cb-dashboard-row"><span>Chocolate Crinkles</span><b>Available</b></div>
                    <div class="cb-dashboard-row"><span>Ordering</span><b>Direct Message</b></div>
                    <div class="cb-dashboard-note">Simple product information and clear ordering actions keep the experience easy to follow.</div>
                </div>
            </article>

            <article class="cb-showcase-card rounded-[26px] shadow-sm" data-reveal style="--reveal-delay: .12s">
                <span class="cb-showcase-label">Mobile View</span>
                <div class="cb-phone-frame" aria-label="Mobile landing page preview">
                    <div class="cb-phone-speaker" aria-hidden="true"></div>
                    <img src="{{ asset('images/banana-box-1.webp') }}"
                        alt="C'Bites mobile product preview"
                        width="500"
                        height="640"
                        loading="lazy">
                    <div class="cb-phone-copy">
                        <small>Homemade treats</small>
                        <strong>Goodness Comes in Bites.</strong>
                        <span>Order Now →</span>
                    </div>
                </div>
            </article>
        </div>

        <div class="cb-highlight-row flex flex-wrap items-center justify-center gap-3" data-reveal>
            <span>Responsive on desktop, tablet &amp; mobile</span>
            <span>Reusable Blade Components</span>
            <span>Direct-message ordering</span>
            <span>Clear pricing options</span>
        </div>
    </div>
</section>
