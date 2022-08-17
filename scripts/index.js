let vizzy = document.querySelector("#vizzy");
let burger = document.querySelector(".burger-wrap");
let glodalNav = document.querySelector(".global-nav");
let drawer = document.querySelector(".drawer");
let allBlockEls = document.querySelectorAll(".block-el");
let allTextEls = document.querySelectorAll(".text-el");
let navToggle = document.querySelector("#navToggle");
let navItems = document.querySelectorAll(".nav-list-item");
let portLinks = document.querySelectorAll(".port-link");
let allDetails = document.querySelectorAll(".details");
let contact = document.querySelector(".contact");
let contactWrap = document.querySelector(".contact-wrapper");
let aboutWrap = document.querySelector(".about-me-wrap ");

let logoSvgCls1 = document.querySelectorAll(".cls-1");
let logoSvgCls2 = document.querySelectorAll(".cls-2");
let ctas = document.querySelectorAll(".cta");

navToggle.addEventListener("click", () => {
  if (!navToggle.classList.contains("expanded")) {
    vizzy.style.zIndex = 400;
  } else {
    vizzy.style.zIndex = -3;
  }
});

let themeToggle = document.querySelector("#theme-toggle");
themeToggle.addEventListener("click", () => {
  themeToggle.classList.toggle("flip");
  burger.classList.toggle("dark-burger");
  allTextEls.forEach((el) => {
    el.classList.toggle("theme-text-dark");
  });
  allBlockEls.forEach((el) => {
    el.classList.toggle("theme-bg-dark");
  });
  navItems.forEach((el) => {
    el.classList.toggle("invert-nav-list-items");
  });
  if (
    window.location.href.indexOf("index") > -1 ||
    window.location.href.indexOf("about") > -1
  ) {
    ctas.forEach((el) => {
      el.classList.toggle("invert-ctas");
    });
    logoSvgCls1.forEach((el) => {
      el.classList.toggle("theme-fill-dark");
    });
    logoSvgCls2.forEach((el) => {
      el.classList.toggle("theme-stroke-dark");
    });
  }
  if (window.location.href.indexOf("portfolio") > -1) {
    portLinks.forEach((el) => {
      el.classList.toggle("invert-port-links");
    });
    allDetails.forEach((el) => {
      el.classList.toggle("dark-details");
    });
  }
  if (window.location.href.indexOf("about") > -1) {
    aboutWrap.classList.toggle("dark-details");
  }
});

navToggle.addEventListener("click", () => {
  navToggle.classList.toggle("expanded");
  drawer.style.visibility = "visible";
  glodalNav.style.visibility = "visible";
  glodalNav.classList.toggle("nav-slide-in");
  drawer.classList.toggle("nav-slide-in");
});
