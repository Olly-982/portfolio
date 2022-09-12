<?php $currPage = "Portfolio" ?>
<?php include "./partials/head.php" ?>
<?php include "./partials/headerNav.php" ?>
<style>
  .theme-wrapper {
    overflow-y: scroll;
  }
</style>
<main>
  <ul class="porfolio-items-list filters">
    <li class="text-el"><a class="filter" href="" data-filter="*">All</a></li>
    <li class="text-el"><a class="filter" href="" data-filter=".development">Development</a></li>
    <li class="text-el"><a class="filter" href="" data-filter=".design">Design</a></li>
    <li class="text-el"><a class="filter" href="" data-filter=".illustration">Illustration</a></li>
  </ul>
  <div class="grid-wrap">
    <div class="grid">
      <div class="grid-sizer"></div>
      <div class="grid-item development">
        <div class="details">
          <h3 class="text-el">BCIT yearbook</h3>
          <p class="text-el">a digital yearbook for me and my classmates. (IN DEVELOPMENT)</p>
          <a class="port-link" target="new" href="http://147.182.251.166/">View It</a>
        </div>
        <img src="./resources/images/development/yearbook.png" alt="an image of a responsive 404 page with a blue and purple color scheme">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h3 class="text-el">Mp3 Player</h3>
          <p class="text-el">an mp3 player with a particle animation background.</p>
          <a class="port-link" target="new" href="https://mp3player.jamesvincentdesign.com/">View It</a>
        </div>
        <img src="./resources/images/development/mp3Pic.png" alt="an image of a responsive 404 page with a blue and purple color scheme">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h3 class="text-el">Pomodoro</h3>
          <p class="text-el">a configurable pomodoro app using local storage to preserve preferences.</p>
          <a class="port-link" target="new" href="https://pomodoro.jamesvincentdesign.com/">View It</a>
        </div>
        <img src="./resources/images/development/pomodoro.png" alt="an image of a responsive 404 page with a blue and purple color scheme">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h3 class="text-el">Spiral Inc. responsive 404</h3>
          <p class="text-el">a simple responsive 404 page</p>
          <a class="port-link" target="new" href="https://spiral404.jamesvincentdesign.com/">View It</a>
        </div>
        <img src="./resources/images/development/responsive404.png" alt="an image of a responsive 404 page with a blue and purple color scheme">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h3 class="text-el">Rent a Bot</h3>
          <p class="text-el">a simple page using flexbox</p>
          <a class="port-link" target="new" href="https://rent-a-bot.jamesvincentdesign.com/">View It</a>
        </div>
        <img src="./resources/images/development/rent-a-bot.png" alt="an image of rent-a-bot webpage">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h3 class="text-el">Studiyo</h3>
          <p class="text-el">an example of a corporate style webpage using my team's design.</p>
          <a class="port-link" target="new" href="https://studiyo.jamesvincentdesign.com/index">View It</a>
        </div>
        <img src="./resources/images/development/studiyo.png" alt="an image of studiyo webpage">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h3 class="text-el">RocketInc.</h3>
          <p class="text-el">an example of a corporate style responsive webpage.</p>
          <a class="port-link" target="new" href="http://rocketinc.jamesvincentdesign.com/">View It</a>
        </div>
        <img src="./resources/images/development/rocketinc.png" alt="an image of the rocketinc webpage">
      </div>
      <div class="grid-item illustration">
        <div class="details">
          <h3 class="text-el">Dragon Slayer</h3>
          <p class="text-el">An illustration made with Adobe Illustrator using the pen tool, primitive shapes and pathfinder.</p>
          <a class="port-link" target="new" href="./resources/images/illustration/dragon.png">View It</a>
        </div>
        <img src="./resources/images/illustration/dragon.png" alt="an illustration of a colorful dragon with robots and a golden knight">
      </div>
      <div class="grid-item illustration">
        <div class="details">
          <h3 class="text-el">Soldier</h3>
          <p class="text-el">An illustration made with Adobe Illustrator using the pen tool.</p>
          <a class="port-link" target="new" href="resources/images/illustration/dragon.png">View It</a>
        </div>
        <img src="./resources/images/illustration/soldier.png" alt="an illustration of a statue of a pensive soldier">
      </div>
      <div class="grid-item illustration">
        <div class="details">
          <h3 class="text-el">Wiimote</h3>
          <p class="text-el">A technical illustration made with Adobe Illustrator.</p>
          <a class="port-link" target="new" href="./resources/images/illustration/wiimote.png">View It</a>
        </div>
        <img src="./resources/images/illustration/wiimote.png" alt="a realistic illustration of a wiimote">
      </div>
      <div class="grid-item design">
        <div class="details">
          <h3 class="text-el">Huion Display Ads</h3>
          <p class="text-el">A package of display ads made as an examle for a possible campaign.</p>
          <a class="port-link" target="new" href="./resources/images/design/Huion-One-Page.png">View It</a>
        </div>
        <img src="./resources/images/design/Huion-One-Page.png" alt="a one page spread of some display ads">
      </div>
      <div class="grid-item design">
        <div class="details">
          <h3 class="text-el">SPCA Display Ads</h3>
          <p class="text-el">A package of display ads made as an examle for a possible campaign.</p>
          <a class="port-link" target="new" href="./resources/images/design/spca-one-page.png">View It</a>
        </div>
        <img src="./resources/images/design/spca-one-page.png" alt="a one page spread of some display ads">
      </div>
    </div>
  </div>
</main>
<footer></footer>
<canvas id="vizzy"></canvas>
</div>
<script defer src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script defer src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script>
  ///////// ISOTOPE //////////////
  document.addEventListener("DOMContentLoaded", () => {
    let gridItems = document.querySelectorAll(".grid-item");

    gridItems.forEach((el) => {
      el.addEventListener("click", () => {
        gridItems.forEach((elm) => elm.classList.remove("open-up"));
        el.classList.toggle("open-up");
      });
    });

    var elem = document.querySelector(".grid");
    var iso = new Isotope(elem, {
      // options
      itemSelector: ".grid-item",
      layoutMode: "fitRows",
    });

    // element argument can be a selector string
    //   for an individual element
    var iso = new Isotope(".grid", {
      // options
      itemSelector: ".grid-item",
      percentPosition: true,
      masonry: {
        // use element for option
        columnWidth: ".grid-sizer",
      },
    });

    imagesLoaded(iso).on("progress", function() {
      // layout Isotope after each image loads
      iso.layout();
    });

    let filters = document.querySelectorAll(".filter");
    filters.forEach((el) => {
      el.addEventListener("click", (evt) => {
        evt.preventDefault();
        // let filterVal = el.attributes['data-filter'].value;
        let filterVal = el.getAttribute("data-filter");
        console.log(filterVal);
        iso.arrange({
          filter: filterVal,
        });
      });
    });
  });
</script>
</body>

</html>