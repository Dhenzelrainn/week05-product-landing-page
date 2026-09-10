// All behavior is progressive enhancement; links and products work without JS.
function initializeCBites() {
    const reduced = window.matchMedia("(prefers-reduced-motion: reduce)");
    const header = document.querySelector("[data-navbar]");
    const setScroll = () =>
        header?.classList.toggle("scrolled", window.scrollY > 12);
    setScroll();
    window.addEventListener("scroll", setScroll, { passive: true });
    const button = document.querySelector("[data-menu-button]");
    const menu = document.querySelector("[data-mobile-menu]");
    function closeMenu(restore = false) {
        menu?.classList.remove("is-open");
        button?.setAttribute("aria-expanded", "false");
        button?.setAttribute("aria-label", "Open navigation");
        if (restore) button?.focus();
    }
    button?.addEventListener("click", () => {
        const open = menu.classList.toggle("is-open");
        button.setAttribute("aria-expanded", String(open));
        button.setAttribute(
            "aria-label",
            open ? "Close navigation" : "Open navigation",
        );
    });
    menu?.querySelectorAll("a").forEach((a) =>
        a.addEventListener("click", () => closeMenu()),
    );
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && menu?.classList.contains("is-open"))
            closeMenu(true);
    });
    document.addEventListener("click", (e) => {
        if (header && !header.contains(e.target)) closeMenu();
    });
    window
        .matchMedia("(min-width:1024px)")
        .addEventListener("change", () => closeMenu());

    if ("IntersectionObserver" in window && !reduced.matches) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("in-view");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.08 },
        );
        document.documentElement.classList.add("motion-ready");
        document
            .querySelectorAll(".reveal")
            .forEach((el) => observer.observe(el));
    }
    document.querySelectorAll("[data-product-section]").forEach((section) => {
        const grid = section.querySelector("[data-product-grid]");
        const cards = [...grid.querySelectorAll("[data-category]")];
        let timer, releaseTimer;
        section.querySelectorAll("[data-filter]").forEach((tab) =>
            tab.addEventListener("click", () => {
                if (tab.getAttribute("aria-pressed") === "true") return;
                clearTimeout(timer);
                clearTimeout(releaseTimer);
                section
                    .querySelectorAll("[data-filter]")
                    .forEach((b) =>
                        b.setAttribute("aria-pressed", String(b === tab)),
                    );
                const category = tab.dataset.filter;
                grid.style.height = `${grid.getBoundingClientRect().height}px`;
                cards.forEach((card) => {
                    card.classList.remove("filter-entering");
                    if (!card.hidden) card.classList.add("filter-leaving");
                });
                timer = setTimeout(
                    () => {
                        let count = 0;
                        cards.forEach((card) => {
                            const show =
                                category === "all" ||
                                card.dataset.category === category;
                            card.hidden = !show;
                            card.classList.remove("filter-leaving");
                            if (show) {
                                count++;
                                card.classList.add("filter-entering");
                            }
                        });
                        const oldHeight = grid.style.height;
                        grid.style.height = "auto";
                        const newHeight = grid.getBoundingClientRect().height;
                        grid.style.height = oldHeight;
                        void grid.offsetHeight;
                        grid.style.height = `${newHeight}px`;
                        releaseTimer = setTimeout(
                            () => {
                                grid.style.height = "";
                            },
                            reduced.matches ? 0 : 260,
                        );
                        section.querySelector(
                            "[data-filter-status]",
                        ).textContent = `${count} products shown`;
                    },
                    reduced.matches ? 0 : 200,
                );
            }),
        );
    });
    document.querySelectorAll(".btn").forEach((btn) =>
        btn.addEventListener("pointerdown", (e) => {
            if (reduced.matches) return;
            const dot = document.createElement("span");
            dot.className = "ripple";
            dot.setAttribute("aria-hidden", "true");
            const box = btn.getBoundingClientRect();
            dot.style.left = `${e.clientX - box.left}px`;
            dot.style.top = `${e.clientY - box.top}px`;
            btn.append(dot);
            dot.addEventListener("animationend", () => dot.remove(), {
                once: true,
            });
        }),
    );
    const form = document.querySelector("[data-contact-form]");
    if (form) {
        const selected = new URLSearchParams(location.search).get("order");
        const select = form.elements.product;
        if ([...select.options].some((o) => o.value === selected))
            select.value = selected;
        form.addEventListener("submit", (e) => {
            e.preventDefault();
            if (!form.reportValidity()) return;
            const data = new FormData(form);
            const message = `Hi C'Bites! I'm ${data.get("name")}. I'd like to ask about ${data.get("product")}.\nContact: ${data.get("phone")}\n${data.get("message") || ""}\nPlease confirm the price and availability. Thank you!`;
            form.querySelector("[data-inquiry-preview]").value = message;
            form.querySelector("[data-send-inquiry]").href =
                `sms:+639946596224?body=${encodeURIComponent(message)}`;
            form.querySelector("[data-form-message]").classList.remove(
                "hidden",
            );
        });
        form.querySelector("[data-copy-inquiry]")?.addEventListener(
            "click",
            async () => {
                const field = form.querySelector("[data-inquiry-preview]");
                try {
                    await navigator.clipboard.writeText(field.value);
                    form.querySelector("[data-copy-status]").textContent =
                        "Message copied.";
                } catch {
                    field.focus();
                    field.select();
                    form.querySelector("[data-copy-status]").textContent =
                        "Select and copy the message above.";
                }
            },
        );
    }
    document
        .querySelector("[data-demo-signin]")
        ?.addEventListener("submit", (e) => {
            e.preventDefault();
            document
                .querySelector("[data-signin-message]")
                .classList.remove("hidden");
            e.target.reset();
        });
}
if (document.readyState === "loading")
    document.addEventListener("DOMContentLoaded", initializeCBites, {
        once: true,
    });
else initializeCBites();
