<?php include "./partials/head.php" ?>
<?php include "./partials/headerNav.php" ?>
<main>
  <h2 id="greeting" class="greeting text-el"></h2>
  <h3 class="sub-greeting text-el"><span class="subGreeting"></span></h3>
  <div class="cta-wrap">
    <a href="portfolio.php" class="cta first">Porfolio</a>
    <a href="contact.php" class="cta second contact">Contact</a>
  </div>
  <div class="bg-image-wrap">
    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 521.86 447.17">
      <defs>
        <style>
          .cls-1 {
            fill: #000;
          }

          .cls-2 {
            fill: none;
            stroke: #000;
            stroke-miterlimit: 10;
          }
        </style>
      </defs>
      <g id="Layer_1-2-2">
        <g>
          <polygon class="cls-2" points="200.48 135.28 102.68 304.69 298.31 304.69 200.48 135.28" />
          <polygon class="cls-2" points="310.23 69.89 270.48 1 227.73 75.05 267.47 143.94 310.23 69.89" />
          <polygon class="cls-2" points="338.97 121.6 296.21 195.68 392.48 362.42 68.21 362.42 25.21 436.92 520.99 436.92 338.97 121.6" />
        </g>
      </g>
      <line class="cls-2" x1="245.27" y1="10.79" x2="270.48" y2="1" />
      <line class="cls-2" x1="285.02" y1="79.68" x2="310.23" y2="69.89" />
      <line class="cls-2" x1="242.26" y1="153.73" x2="267.47" y2="143.94" />
      <line class="cls-2" x1="175.27" y1="145.07" x2="200.48" y2="135.28" />
      <line class="cls-2" x1="273.1" y1="314.48" x2="298.31" y2="304.69" />
      <line class="cls-2" x1="313.75" y1="131.38" x2="338.97" y2="121.6" />
      <line class="cls-2" x1="495.78" y1="446.7" x2="520.99" y2="436.92" />
      <line class="cls-2" x1="43" y1="372.2" x2="68.21" y2="362.42" />
      <g id="Layer_1-2">
        <g>
          <polygon class="cls-1" points="175.27 145.07 77.47 314.48 273.1 314.48 175.27 145.07" />
          <polygon class="cls-1" points="285.02 79.68 245.27 10.79 202.52 84.84 242.26 153.73 285.02 79.68" />
          <polygon class="cls-1" points="313.75 131.38 271 205.47 367.27 372.2 43 372.2 0 446.7 495.78 446.7 313.75 131.38" />
        </g>
      </g>
    </svg>
  </div>
</main>
<footer>
  <!-- <nav>
    <ul>
      <a href="">link</a>
    </ul>
    <ul>
      <a href="">link</a>
    </ul>
    <ul>
      <a href="">link</a>
    </ul>
  </nav> -->
</footer>
<canvas id="vizzy"></canvas>
</div>
</body>

</html>
<script>
  // theme stuff
  greeting.innerText = "Hello World!";

  let textWrapper = document.querySelector(".greeting");
  textWrapper = spanifyLetters(textWrapper);
  let letters = document.querySelectorAll(".letter");
  letters.forEach((el) => {
    el.style.opacity = 0;
  });

  anime({
    targets: "#Layer_1, .cls-2",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInOutSine",
    duration: 1500,
    delay: function(el, i) {
      return i * 550;
    },
    direction: "alternate",
    loop: true,
  });

  setTimeout(() => {
    anime.timeline({
      loop: false
    }).add({
      targets: ".greeting .letter",
      opacity: [0, 1],
      easing: "easeInOutQuad",
      duration: 2250,
      delay: (el, i) => 250 * (i + 1),
    });
  }, 2000);

  function spanifyLetters(el) {
    return (el.innerHTML = el.textContent.replace(
      /\S/g,
      "<span class='letter'>$&</span>"
    ));
  }
</script>