<main>
  <div id="accueil-grid">

    <div class="bienvenue">
      <div class="typeJsWrapper">
        <div class="container-bienvenue">
          <h1 class="typeJsText" data-typetext="Bienvenue chez NOVA"></h1>
        </div>
        <script>
          let typeJsText = document.querySelector(".typeJsText");
          let textArray = typeJsText.dataset.typetext.split("");
          let counter = -1;

          typeJsText.innerHTML = "";

          function typeJs() {
            if (counter < typeJsText.dataset.typetext.length) {
              counter++;
              typeJsText.innerHTML += typeJsText.dataset.typetext.charAt(counter);
              textArray = typeJsText.dataset.typetext.split("");
            }
          }

          setInterval(() => {
            typeJs();
          }, 100);

        </script>
      </div>

      <p>Découvrez nos bières interstellaires</p>
      <p>Explorez notre gamme de bières artisanales, brassées avec passion et savoir-faire.</p>
      <p>Que vous soyez amateur de bières blondes, brunes, ambrées ou blanches, nous avons quelque chose pour vous.</p>
    </div>

    <div class="carousel">
      <div class="carousel-container">
        <div class="carousel-track" id="carouselTrack">
          <div class="carousel-item">
            <a href="index.php?route=fichebiere&id=1" class="beer-link">
            <div class="beer-card">
              <img src="public/images/bouteille1.png" alt="Bouteille 1">
              <div class="beer-info">
                <h3>Nova Originale</h3>
                <p>La bière blonde par excellence, légère et venue de l’espace.</p>
              </div>
            </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="index.php?route=fichebiere&id=2" class="beer-link">
            <div class="beer-card">
              <img src="public/images/bouteille2.png" alt="Bouteille 2">
              <div class="beer-info">
                <h3>Nova Noire</h3>
                <p>Bière noire riche en saveurs interstellaires.</p>
              </div>
            </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="index.php?route=fichebiere&id=3" class="beer-link">
            <div class="beer-card">
              <img src="public/images/bouteille3.png" alt="Bouteille 3">
              <div class="beer-info">
                <h3>Nova Brune</h3>
                <p>Bière brune rafraîchissante pour les chaudes journées.</p>
              </div>
            </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="index.php?route=fichebiere&id=4" class="beer-link">
            <div class="beer-card">
              <img src="public/images/bouteille4.png" alt="Bouteille 4">
              <div class="beer-info">
                <h3>Nova Ambrée</h3>
                <p>Bière ambrée houblonnée avec une touche cosmique.</p>
              </div>
            </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="index.php?route=fichebiere&id=5" class="beer-link">
            <div class="beer-card">
              <img src="public/images/bouteille5.png" alt="Bouteille 5">
              <div class="beer-info">
                <h3>Nova Rousse</h3>
                <p>Bière rousse, parfaite pour les soirées entre amis.</p>
              </div>
            </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="index.php?route=fichebiere&id=6" class="beer-link">
            <div class="beer-card">
              <img src="public/images/bouteille6.png" alt="Bouteille 6">
              <div class="beer-info">
                <h3>Nova Blanche</h3>
                <p>Bière blanche légère et pétillante, idéale pour l’été.</p>
              </div>
            </div>
            </a>  
          </div>

        </div>

        <button class="nav-button prev" onclick="moveSlide(-1)">❮</button>
        <button class="nav-button next" onclick="moveSlide(1)">❯</button>
      </div>

      <button class="carousel-button"><a href="index.php?route=boutique">Voir la boutique >></a></button>
    </div>

    <div class="histoire">
      <div class="histoire-container">
        <h2>Notre histoire</h2>
        <p>Chez Nova, nous croyons que chaque gorgée de bière doit être une expérience unique. C'est pourquoi nous brassons nos bières avec des ingrédients de la plus haute qualité, en utilisant des méthodes traditionnelles et des techniques modernes.</p>
        <p>Notre passion pour la bière nous pousse à explorer de nouvelles saveurs et à innover constamment. Que vous soyez un amateur de bière ou un novice, nous avons toujours quelque chose pour vous.</p>
        <p>Rejoignez-nous dans notre aventure interstellaire et découvrez le goût de l'univers avec Nova.</p>
      </div>

      <div class="orbite-container">
        <div class="sun"></div>

        <div class="planet_1-orbit">
          <div class="planet">
            <img src="public/images/myrtille.png" alt="Myrtille">
          </div>
        </div>

        <div class="planet_2-orbit">
          <div class="planet">
            <img src="public/images/mure.png" alt="Mûre">
          </div>
        </div>

        <div class="planet_3-orbit">
          <div class="planet">
            <img src="public/images/cassis.png" alt="Cassis">
          </div>
        </div>
      </div>

      <div class="fleche-fruit">
        <img src="public/images/fleche.png" alt="Flèche vers l’orbite">
      </div>

      <div class="histoire-fruit">
        <p>Nova c'est l'infusion de <b>3 fruits : Myrtille, Mûre et Cassis</b>. Chaque fruit apporte une touche unique à nos bières, créant une harmonie de saveurs qui ravira vos papilles.</p>
        <p>La Myrtille, avec sa douceur naturelle, apporte une note fruitée et rafraîchissante. La Mûre, riche en arômes, ajoute une profondeur et une complexité à chaque gorgée. Enfin, le Cassis, avec son goût intense et légèrement acidulé, équilibre parfaitement l'ensemble.</p>
      </div>

    </div>

    <div class="video-promotion">
      <h2>Découvrez notre vidéo promotionnelle</h2>
        <iframe width="640" height="360" src="https://www.youtube.com/embed/cK6WuRF5Q6g" title="Vidéo promotionnelle Nova" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <p>Vidéo réalisée par <a href="https://www.youtube.com/@Novaindustrie-v5y" target="_blank">Nova Bières </a>dans le cadre de la promotion de nos bières interstellaires.</p>
    </div>


  </div>



  <script src="public/js/carousel.js"></script>

  <canvas id="starcanvas"></canvas>
  <script src="public/js/star.js"></script>

  <button id="btn-top" title="Retour en haut">
    <img src="public/images/fleche3.png" alt="Retour en haut">
  </button>
  <script src="public/js/buttonhaut.js"></script>

</main>





