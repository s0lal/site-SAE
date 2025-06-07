<head>
  <link rel="stylesheet" href="public/css/contact.css">
</head>

<main>
  // compte.css utilisé pour le style de la page de contact (c'est normal que le nom des classes soit le même)

  <div class="page-wrapper">
    <section class="form-container">
      <h2>Contactez la Brasserie Nova</h2>
      <p>Une question intergalactique ? Une suggestion venue d'une autre galaxie ? Envoyez-nous un message.</p>

      <form id="contact-form" method="POST">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button class="submit" type="submit">Envoyer</button>
      </form>

      <p id="message-ok" class="confirmation-message"></p>
    </section>

    <div class="form-container social-container">
      <div class="contact-droite">
        <h3 class="form-title">Ou suivez-nous sur nos réseaux sociaux :</h3>
        <ul class="social-list">
          <li><a href="https://www.instagram.com/n0va0ff?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="social-link"><img src="public/images/instagram.png">@n0va0ff</a></li>
          <li><a href="https://www.youtube.com/channel/UCjG7qzqDEIRMBSl_isO2JbA/posts?pvf=CAE%3D" target="_blank" class="social-link"><img src="public/images/youtube.png">@Novaindustrie-v5y</a></li>
          <li><a href="https://x.com/IndustrieN71657" target="_blank" class="social-link"><img src="public/images/x.png">@IndustrieN71657</a></li>
        </ul>
      </div>

      <div class="contact-email">
        <h3 class="form-title">Ou contactez-nous par email :</h3>
        <p class="email-text">Pour toute question, suggestion ou demande d'information, n'hésitez pas à nous écrire à :<br><a href="mailto:industrienova@gmail.com"><img src="public/images/email.png" alt="Email">industrienova@gmail.com</a></p>
        <p class="email-text">Nous nous efforcerons de vous répondre dans les plus brefs délais.</p>
      </div>


    </div>



  </div>

  <canvas id="starcanvas"></canvas>
  <script src="public/js/star.js"></script>

  <button id="btn-top" title="Retour en haut">
    <img src="public/images/fleche3.png" alt="Retour en haut">
  </button>
  <script src="public/js/buttonhaut.js"></script>

  <script>
    document.getElementById("contact-form").addEventListener("submit", function(e) {
      e.preventDefault();

      const nom = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const message = document.getElementById("message").value.trim();
      const messageOk = document.getElementById("message-ok");

      if (nom === "" || email === "" || message === "") {
        messageOk.innerText = "Veuillez remplir tous les champs.";
        messageOk.style.color = "red";
      } else {
        messageOk.innerText = "Merci pour votre message ! Nous vous répondrons dès que possible.";
        messageOk.style.color = "#ffd700";

        document.getElementById("contact-form").reset();
      }
    });
  </script>
</main>
