<head>
  <link rel="stylesheet" href="public/css/fichebiere.css">
</head>

<main>

    <a href="index.php?route=boutique" class="btn-retour-boutique">← Retour à la boutique</a>


    <div class="fiche-produit-container">
        <div class="fiche-produit-image">
            <img src="public/images/<?php echo($produits['image']) ?>" alt="<?php echo($produits['nom']) ?>">
        </div>

        <div class="fiche-produit-details">
            <h1><?php echo($produits['nom']) ?></h1>

            <span class="tag-produit"><?php echo($produits['type_produits']) ?></span>

            <p class="description"><?= nl2br(htmlspecialchars($produits['description'])) ?></p>

            <div class="prix">
                <?= number_format($produits['prix'], 2, ',', ' ') ?> €
            </div>

            <button class="btn-ajouter">Ajouter au panier</button>
        </div>
    </div>



    <canvas id="starcanvas"></canvas>
    <script src="public/js/star.js"></script>

    <button id="btn-top" title="Retour en haut">
        <img src="public/images/fleche3.png" alt="Retour en haut">
    </button>
    <script src="public/js/buttonhaut.js"></script>




</main>
