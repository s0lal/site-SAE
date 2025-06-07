<head>
  <link rel="stylesheet" href="public/css/panier.css">
  <script src="panier.js" defer></script>
</head>

<main>
    <div id="panier-grid">
             
        <div class="panier-body" onload="afficherPanier()">
            <div class="panier-container">
                <h1 class="panier-title">Votre Panier Intergalactique</h1>

                <div class="panier-items"></div>

                <div class="panier-summary">
                <p class="total-label">Total : <span class="total-price">0€</span></p>
                <button class="checkout-btn">Passer la commande</button>
                </div>
            </div>
        </div>



    </div>


    <canvas id="starcanvas"></canvas>
    <script src="public/js/star.js"></script>

    <button id="btn-top" title="Retour en haut">
        <img src="public/images/fleche3.png" alt="Retour en haut">
    </button>
    <script src="public/js/buttonhaut.js"></script>

</main>
