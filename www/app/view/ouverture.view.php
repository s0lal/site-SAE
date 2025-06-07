<head>
  <link rel="stylesheet" href="public/css/ouverture.css">
</head>

  <div class="app">
    <div class="center" id="starfield"></div>
    <div class="cockpit"></div>
  </div>


<script>
  const app = document.querySelector(".app");
  const centerX = window.innerWidth / 2;
  const centerY = window.innerHeight / 2;
  const maxDistance = Math.sqrt(centerX ** 2 + centerY ** 2); // distance jusqu'à un coin

  for (let i = 0; i < 400; i++) {
    const container = document.createElement("div");
    container.className = "container";

    const angle = Math.random() * 360;
    container.style.transform = `rotate(${angle}deg)`;
    container.style.transformOrigin = "left center";

    const star = document.createElement("div");
    star.className = "star";

    const length = 2 + Math.random() * 3;
    star.style.width = `${length * 10}px`;
    star.style.height = `${length}px`;

    const isBlue = Math.random() > 0.5;
    star.style.backgroundColor = isBlue ? "rgb(107, 171, 255)" : "#ffffff";

    star.style.position = "absolute";
    star.style.left = "0px";
    star.style.top = "0px";

    container.appendChild(star);
    app.appendChild(container);

    const delay = Math.random() * 1000;
    setTimeout(() => {
      star.animate(
        [
          { transform: "translateX(0px)", opacity: 1 },
          { transform: `translateX(${maxDistance}px)`, opacity: 0 }
        ],
        {
          duration: 1200,
          iterations: Infinity,
          easing: "linear"
        }
      );
    }, delay);
  }
</script>

