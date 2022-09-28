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
    <li>
      <div tabindex="0" id="all" class="filter" href="" data-filter="*">All</div>
    </li>
    <li>
      <div tabindex="0" class="filter" href="" data-filter=".development">Development</div>
    </li>
    <li>
      <div tabindex="0" class="filter" href="" data-filter=".design">Design</div>
    </li>
    <li>
      <div tabindex="0" class="filter" href="" data-filter=".illustration">Illustration</div>
    </li>
  </ul>
  <div class="grid-wrap">
    <div class="grid">
      <div class="grid-sizer"></div>
      <div class="grid-item development">
        <div class="details">
          <h2 class="">BCIT yearbook</h2>
          <p class="">a digital yearbook for me and my classmates. (IN DEVELOPMENT)</p>
          <a class="port-link" target="new" href="http://147.182.251.166/">View It</a>
        </div>
        <img src="./resources/images/development/yearbook.png" alt="an image of a responsive 404 page with a blue and purple color scheme">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h2 class="">Mp3 Player</h2>
          <p class="">an mp3 player with a particle animation background.</p>
          <a class="port-link" target="new" href="https://mp3player.jamesvincentdesign.com/">View It</a>
        </div>
        <img src="./resources/images/development/mp3Pic.png" alt="an image of a responsive 404 page with a blue and purple color scheme">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h2 class="">Pomodoro</h2>
          <p class="">a configurable pomodoro app using local storage to preserve preferences.</p>
          <a class="port-link" target="new" href="https://pomodoro.jamesvincentdesign.com/">View It</a>
        </div>
        <img src="./resources/images/development/pomodoro.png" alt="an image of a responsive 404 page with a blue and purple color scheme">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h2 class="">Spiral Inc. responsive 404</h2>
          <p class="">a simple responsive 404 page</p>
          <a class="port-link" target="new" href="https://spiral404.jamesvincentdesign.com/">View It</a>
        </div>
        <img src="./resources/images/development/responsive404.png" alt="an image of a responsive 404 page with a blue and purple color scheme">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h2 class="">Rent a Bot</h2>
          <p class="">a simple page using flexbox</p>
          <a class="port-link" target="new" href="https://rent-a-bot.jamesvincentdesign.com/">View It</a>
        </div>
        <img src="./resources/images/development/rent-a-bot.png" alt="an image of rent-a-bot webpage">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h2 class="">Studiyo</h2>
          <p class="">an example of a corporate style webpage using my team's design.</p>
          <a class="port-link" target="new" href="https://studiyo.jamesvincentdesign.com/index">View It</a>
        </div>
        <img src="./resources/images/development/studiyo.png" alt="an image of studiyo webpage">
      </div>
      <div class="grid-item development">
        <div class="details">
          <h2 class="">RocketInc.</h2>
          <p class="">an example of a corporate style responsive webpage.</p>
          <a class="port-link" target="new" href="http://rocketinc.jamesvincentdesign.com/">View It</a>
        </div>
        <img src="./resources/images/development/rocketinc.png" alt="an image of the rocketinc webpage">
      </div>
      <div class="grid-item illustration">
        <div class="details">
          <h2 class="">Dragon Slayer</h2>
          <p class="">An illustration made with Adobe Illustrator using the pen tool, primitive shapes and pathfinder.</p>
          <a class="port-link" target="new" href="./resources/images/illustration/dragon.png">View It</a>
        </div>
        <img src="./resources/images/illustration/dragon.png" alt="an illustration of a colorful dragon with robots and a golden knight">
      </div>
      <div class="grid-item illustration">
        <div class="details">
          <h2 class="">Soldier</h2>
          <p class="">An illustration made with Adobe Illustrator using the pen tool.</p>
          <a class="port-link" target="new" href="resources/images/illustration/soldier.png">View It</a>
        </div>
        <img src="./resources/images/illustration/soldier.png" alt="an illustration of a statue of a pensive soldier">
      </div>
      <div class="grid-item illustration">
        <div class="details">
          <h2 class="">Wiimote</h2>
          <p class="">A technical illustration made with Adobe Illustrator.</p>
          <a class="port-link" target="new" href="./resources/images/illustration/wiimote.png">View It</a>
        </div>
        <img src="./resources/images/illustration/wiimote.png" alt="a realistic illustration of a wiimote">
      </div>
      <div class="grid-item design">
        <div class="details">
          <h2 class="">Huion Display Ads</h2>
          <p class="">A package of display ads made as an examle for a possible campaign.</p>
          <a class="port-link" target="new" href="./resources/images/design/Huion-One-Page.png">View It</a>
        </div>
        <img src="./resources/images/design/Huion-One-Page.png" alt="a one page spread of some display ads">
      </div>
      <div class="grid-item design">
        <div class="details">
          <h2 class="">SPCA Display Ads</h2>
          <p class="">A package of display ads made as an examle for a possible campaign.</p>
          <a class="port-link" target="new" href="./resources/images/design/spca-one-page.png">View It</a>
        </div>
        <img src="./resources/images/design/spca-one-page.png" alt="a one page spread of some display ads">
      </div>
    </div>
  </div>
</main>
<footer>
  <nav>
    <ul class="contact-footer-links">
      <li>
        <a class="footer-link" href="https://github.com/Olly-982" target="new" title="link to github profile">
          <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill=currentColor>
            <path d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9 1.4.3 2.6.4 3.8.4 8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1-8.4 1.9-15.9 2.7-22.6 2.7-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1 10.5 0 20-3.4 25.6-6 2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8 0 0 1.6-.5 5-.5 8.1 0 26.4 3.1 56.6 24.1 17.9-5.1 37-7.6 56.1-7.7 19 .1 38.2 2.6 56.1 7.7 30.2-21 48.5-24.1 56.6-24.1 3.4 0 5 .5 5 .5 12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5 1.2 0 2.6-.1 4-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z" />
          </svg>
        </a>
      </li>
      <li>
        <a class="footer-link" href="https://www.linkedin.com/in/james-vincent-olivier/" target="new" title="link to linkedIn profile">
          <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill=currentColor>
            <path d="M417.2 64H96.8C79.3 64 64 76.6 64 93.9V415c0 17.4 15.3 32.9 32.8 32.9h320.3c17.6 0 30.8-15.6 30.8-32.9V93.9C448 76.6 434.7 64 417.2 64zM183 384h-55V213h55v171zm-25.6-197h-.4c-17.6 0-29-13.1-29-29.5 0-16.7 11.7-29.5 29.7-29.5s29 12.7 29.4 29.5c0 16.4-11.4 29.5-29.7 29.5zM384 384h-55v-93.5c0-22.4-8-37.7-27.9-37.7-15.2 0-24.2 10.3-28.2 20.3-1.5 3.6-1.9 8.5-1.9 13.5V384h-55V213h55v23.8c8-11.4 20.5-27.8 49.6-27.8 36.1 0 63.4 23.8 63.4 75.1V384z" />
          </svg>
        </a>
      </li>
      <li>
        <a class="footer-link" href="https://www.facebook.com/jamesvincentdesign" target="new" title="link to facebook">
          <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill=currentColor>
            <path d="M426.8 64H85.2C73.5 64 64 73.5 64 85.2v341.6c0 11.7 9.5 21.2 21.2 21.2H256V296h-45.9v-56H256v-41.4c0-49.6 34.4-76.6 78.7-76.6 21.2 0 44 1.6 49.3 2.3v51.8h-35.3c-24.1 0-28.7 11.4-28.7 28.2V240h57.4l-7.5 56H320v152h106.8c11.7 0 21.2-9.5 21.2-21.2V85.2c0-11.7-9.5-21.2-21.2-21.2z" />
          </svg>
        </a>
      </li>
    </ul>
  </nav>
</footer>
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