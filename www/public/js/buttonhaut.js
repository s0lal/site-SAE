const btnTop = document.getElementById("btn-top");

window.addEventListener("scroll", () => {
  if (window.scrollY > 500) {
    btnTop.classList.add("show");
  } else {
    btnTop.classList.remove("show");
  }
});

btnTop.addEventListener("click", () => {
  const start = window.scrollY;
  const duration = 600; // durée du scroll en ms
  const startTime = performance.now();

  function scrollStep(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1); // limite à 1
    const ease = 1 - Math.pow(1 - progress, 3); // easing cubic

    window.scrollTo(0, start * (1 - ease));

    if (progress < 1) {
      requestAnimationFrame(scrollStep);
    }
  }

  requestAnimationFrame(scrollStep);
});
