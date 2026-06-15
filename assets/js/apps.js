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

  function initRevealEffect() {
    var containers = Array.prototype.slice.call(
      document.querySelectorAll(".site-container"),
    );
    if (!containers.length) return;

    if (
      window.matchMedia &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches
    ) {
      containers.forEach(function (container) {
        container.classList.add("is-visible");
      });
      return;
    }

    containers.forEach(function (container) {
      container.classList.add("reveal-ready");
    });

    if (!("IntersectionObserver" in window)) {
      containers.forEach(function (container) {
        container.classList.add("is-visible");
      });
      return;
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          entry.target.classList.toggle("is-visible", entry.isIntersecting);
        });
      },
      { threshold: 0.16 },
    );

    containers.forEach(function (container) {
      observer.observe(container);
    });
  }

  function initClickZoomImages() {
    var zoomImages = Array.prototype.slice.call(
      document.querySelectorAll(".hero-image img"),
    );
    if (!zoomImages.length) return;

    zoomImages.forEach(function (image) {
      image.addEventListener("click", function (event) {
        var rect = image.getBoundingClientRect();
        var x = ((event.clientX - rect.left) / rect.width) * 100;
        var y = ((event.clientY - rect.top) / rect.height) * 100;

        zoomImages.forEach(function (otherImage) {
          if (otherImage !== image) otherImage.classList.remove("is-zoomed");
        });

        image.style.transformOrigin = x + "% " + y + "%";
        image.classList.toggle("is-zoomed");
      });
    });

    document.addEventListener("keydown", function (event) {
      if (event.key !== "Escape") return;
      zoomImages.forEach(function (image) {
        image.classList.remove("is-zoomed");
        image.style.transformOrigin = "center center";
      });
    });
  }

  window.addEventListener(
    "scroll",
    function () {
      setHeaderState();
      setBackToTopState();
    },
    { passive: true },
  );

  setHeaderState();
  setBackToTopState();
  initRevealEffect();
  initClickZoomImages();
})();

// run work effect
function runWordEffect(element, duration = 8000) {
  // Target thẻ <p> bên trong thay vì div cha
  const target = element.querySelector("p") || element;

  const fullText = element.dataset.text || target.textContent.trim();

  if (!element.dataset.text) {
    element.dataset.text = fullText;
  }

  target.textContent = "";
  let i = 0;
  const interval = duration / fullText.length;

  if (element._wordTimer) {
    clearInterval(element._wordTimer);
  }

  element._wordTimer = setInterval(() => {
    if (i >= fullText.length) {
      clearInterval(element._wordTimer);
      element._wordTimer = null;
      return;
    }
    target.textContent += fullText[i];
    i++;
  }, interval);
}

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        runWordEffect(entry.target, 8000);
      }
    });
  },
  { threshold: 0.3 },
);

document.querySelectorAll(".js-run-word-effect").forEach((el) => {
  if (!el.dataset.text) {
    const p = el.querySelector("p") || el;
    el.dataset.text = p.textContent.trim();
  }
  observer.observe(el);
});
