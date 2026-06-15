(function () {
    "use strict";

    var body = document.body;
    var header = document.querySelector("[data-site-header]");
    var menuToggle = document.querySelector("[data-menu-toggle]");
    var nav = document.querySelector("[data-primary-nav]");
    var backToTop = document.querySelector("[data-back-to-top]");

    function setHeaderState() {
        if (!header) return;
        header.classList.toggle("is-scrolled", window.scrollY > 12);
    }

    function closeMenu() {
        body.classList.remove("menu-open");
        if (menuToggle) menuToggle.setAttribute("aria-expanded", "false");
    }

    if (menuToggle) {
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.addEventListener("click", function () {
            var isOpen = body.classList.toggle("menu-open");
            menuToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
        });
    }

    if (nav) {
        nav.addEventListener("click", function (event) {
            if (event.target.tagName === "A") closeMenu();
        });
    }

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") closeMenu();
    });

    document.addEventListener("click", function (event) {
        if (!body.classList.contains("menu-open")) return;
        if (nav && nav.contains(event.target)) return;
        if (menuToggle && menuToggle.contains(event.target)) return;
        closeMenu();
    });

    function setBackToTopState() {
        if (!backToTop) return;
        backToTop.classList.toggle("is-visible", window.scrollY > 420);
    }

    if (backToTop) {
        backToTop.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    window.addEventListener("scroll", function () {
        setHeaderState();
        setBackToTopState();
    }, { passive: true });

    setHeaderState();
    setBackToTopState();
})();
