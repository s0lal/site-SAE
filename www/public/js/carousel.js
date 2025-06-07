let index = 0;
let itemWidth = 0;
let visibleItems = 3;
let originalItemsCount = 0;
let carouselReady = false;

function updateCarouselPosition(track) {
  track.style.transition = 'transform 0.4s ease-in-out';
  track.style.transform = `translateX(-${index * itemWidth}px)`;
}

function moveSlide(step) {
  if (!carouselReady) return;

  const track = document.getElementById('carouselTrack');
  index += step;
  updateCarouselPosition(track);

  const totalItems = track.children.length;

  // Reposition vers la droite
  if (index >= totalItems - visibleItems * 2) {
    setTimeout(() => {
      track.style.transition = 'none';
      index = index - originalItemsCount;
      track.style.transform = `translateX(-${index * itemWidth}px)`;
      updateActiveSlide();
    }, 400);
  }
  // Reposition vers la gauche
  else if (index < visibleItems) {
    setTimeout(() => {
      track.style.transition = 'none';
      index = index + originalItemsCount;
      track.style.transform = `translateX(-${index * itemWidth}px)`;
      updateActiveSlide();
    }, 400);
  } else {
    updateActiveSlide();
  }
}

function updateActiveSlide() {
  const items = document.querySelectorAll('.carousel-item');
  items.forEach((item, i) => {
    item.classList.remove('active');
  });
  const centerIndex = index + Math.floor(visibleItems / 2);
  if (items[centerIndex]) {
    items[centerIndex].classList.add('active');
  }
}

window.addEventListener("load", () => {
  const track = document.getElementById('carouselTrack');
  const container = document.querySelector('.carousel-container');
  const originalItems = Array.from(track.children);

  originalItemsCount = originalItems.length; // 6 au départ
  itemWidth = container.offsetWidth / visibleItems;

  // Dupliquer tous les items 2x (avant et après)
  for (let i = 0; i < 2; i++) {
    originalItems.forEach(item => {
      const clone = item.cloneNode(true);
      track.appendChild(clone);
    });
    [...originalItems].reverse().forEach(item => {
      const clone = item.cloneNode(true);
      track.insertBefore(clone, track.firstChild);
    });
  }

  // Mettre à jour la largeur de chaque item
  const allItems = track.querySelectorAll('.carousel-item');
  allItems.forEach(item => {
    item.style.minWidth = `${itemWidth}px`;
  });

  // Position initiale au CENTRE de la première bière originale
  // Après 2 prépend, la première bière originale est à l’indice originalItemsCount*2 ( = 12 )
  // On veut qu’elle soit visible au centre, donc index + 1 = 12 → index = 11
  index = originalItemsCount - Math.floor(visibleItems / 2);
  track.style.transition = 'none';
  track.style.transform = `translateX(-${index * itemWidth}px)`;
  updateActiveSlide();

  carouselReady = true;
});

// Défilement automatique toutes les 6 secondes
setInterval(() => {
  if (carouselReady) {
    moveSlide(1);
  }
}, 6000);
