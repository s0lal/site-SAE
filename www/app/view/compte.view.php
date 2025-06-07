<head>
  <link rel="stylesheet" href="public/css/compte.css">
</head>

<main>
    <div id="compte-grid">

        <div class="page-wrapper compte-wrapper">

            <section class="form-container">
                <h2>Connexion</h2>
                <form class="form-login" action="#" method="post">
                    <label for="login-name">Nom d'utilisateur</label>
                    <input type="text" id="login-name" name="name" required>

                    <label for="login-password">Mot de passe</label>
                    <input type="password" id="login-password" name="password" required>

                    <button class="submit" type="submit">Se connecter</button>
                </form>

                <p class="toggle-message">Pas encore de compte ? <a href="#" id="show-register">Inscrivez-vous</a></p>
            </section>

            <section class="form-container hidden" id="register-container">
                <h2>Inscription</h2>
                <form class="form-register" action="#" method="post">
                    <label for="register-name">Nom</label>
                    <input type="text" id="register-name" name="name" required>

                    <label for="register-email">Adresse e-mail</label>
                    <input type="email" id="register-email" name="email" required>

                    <label for="register-password">Mot de passe</label>
                    <input type="password" id="register-password" name="password" required>

                    <button class="submit" type="submit">Créer un compte</button>
                </form>

                <p class="toggle-message">Déjà inscrit ? <a href="#" id="show-login">Se connecter</a></p>
            </section>


        </div>


    </div>


    <script src="public/js/compte.js"></script>

    <canvas id="starcanvas"></canvas>
    <script src="public/js/star.js"></script>

    <button id="btn-top" title="Retour en haut">
        <img src="public/images/fleche3.png" alt="Retour en haut">
    </button>
    <script src="public/js/buttonhaut.js"></script>

</main>
