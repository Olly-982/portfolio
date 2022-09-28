const vizzy = document.querySelector("#vizzy");
const burger = document.querySelector("#burger");
const glodalNav = document.querySelector(".global-nav");
const drawer = document.querySelector(".drawer");
const body = document.querySelector("body");
const allSVGPaths = document.querySelectorAll(".cls-2");

const allPortfolioFilter = document.querySelector("#all");
if (allPortfolioFilter) {
  allPortfolioFilter.focus();
}

//////////////////////////////
// svg anmation
d = 0;
allSVGPaths.forEach((el) => {
  d += 250;
  length = el.getTotalLength();
  el.style.strokeDasharray = length;
  el.style.strokeDashoffset = length;
  el.animate(
    [
      { strokeDashoffset: length, offset: 0 },
      { strokeDashoffset: 0, offset: 0.75 },
      { strokeDashoffset: 0, offset: 1 },
    ],
    {
      duration: 5000,
      iterations: Infinity,
      direction: "alternate",
      easing: "ease-in-out",
      delay: d,
    }
  );
});

///////////////////////////////////
// nav event handlers
burger.addEventListener("click", () => {
  header.classList.toggle("restackZ");
  if (!burger.classList.contains("expanded")) {
    vizzy.style.zIndex = 400;
  } else {
    vizzy.style.zIndex = -3;
  }
});

burger.addEventListener("click", () => {
  burger.classList.toggle("expanded");
  drawer.style.visibility = "visible";
  glodalNav.style.visibility = "visible";
  glodalNav.classList.toggle("nav-slide-in");
  drawer.classList.toggle("nav-slide-in");
});

////////////////////////////////////
// theme toggle
const themeToggle = document.querySelector("#theme-toggle");
const userTheme = localStorage.getItem("PrefersDark");
if (userTheme == "true") {
  invertAll();
}

themeToggle.addEventListener("click", () => {
  if (!userTheme) {
    localStorage.setItem("PrefersDark", true);
    invertAll();
  }
  if (userTheme == "true") {
    localStorage.removeItem("PrefersDark");
    invertAll();
  }
});

function invertAll() {
  themeToggle.classList.toggle("flip");
  burger.classList.toggle("dark-burger");
  body.classList.toggle("dark");
}
