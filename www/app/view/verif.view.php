<head>
  <link rel="stylesheet" href="public/css/verif.css">
  <link rel="stylesheet" href="public/css/verif.scss">
</head>

<main>
  <div class="verif">
    <div class="container">
      <div class="card">
        <img src="public/images/Animation_logo_crop.gif" alt="logo" class="logo">
        <h1 class="titre">Bienvenue chez Nova, avez-vous 18 ans ou plus ?</h1>
        <div class="buttons">
          <button onclick="validerAge(true)">OUI</button>
          <button onclick="validerAge(false)">NON</button>
        </div>
        <p id="message-erreur"></p>
        <small>En cliquant sur “OUI”, vous confirmez que vous êtes majeur et acceptez nos conditions d'utilisation et notre politique de confidentialité.</small>
      </div>
    </div>

    <script>
      function validerAge(estMajeur) {
        if (estMajeur) {
          window.location.href = "index.php?route=accueil"; 
        } else {
          document.getElementById("message-erreur").innerText = "Vous devez être majeur pour accéder au site.";
          document.getElementById("message-erreur").style.color = "red";
        }
      }
    </script>
  </div>

  
  <canvas id="starcanvas"></canvas>
  <script src="public/js/star.js"></script>
  


</main>
