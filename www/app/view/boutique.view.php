<head>
  <link rel="stylesheet" href="public/css/boutique.css">
</head>

<main>
  <!-- Section Bières -->
  <section>
    <h1 class="titre-section">Nos Bières</h1>
    <div id="boutique-grid">
      <?php foreach ($produits as $produit): ?>
        <?php if ($produit['type_produits'] === 'Bière'): ?>
          <div class="carte-produit">
            <a href="index.php?route=fichebiere&id=<?= $produit['id_boutique'] ?>">
              <img src="public/images/<?php echo ($produit['image']) ?>" alt="<?php echo($produit['nom']) ?>">
            </a>
            <h2><?php echo($produit['nom']) ?></h2>
            <p class="minidescription"><?php echo($produit['minidescription']) ?></p>
            <div class="prix"><?= number_format($produit['prix'], 2, ',', ' ') ?> €</div>
            <button class="btn-ajouter">Ajouter au panier</button>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Section Goodies -->
  <section>
    <h1 class="titre-section titre-goodies">Nos Goodies</h1>
    <div id="boutique-grid">
      <?php foreach ($produits as $produit): ?>
        <?php if ($produit['type_produits'] !== 'Bière'): ?>
          <div class="carte-produit">
            <a href="index.php?route=fichebiere&id=<?= $produit['id_boutique'] ?>">
              <img src="public/images/<?php echo($produit['image']) ?>" alt="<?php echo($produit['nom']) ?>">
            </a>
            <h2><?php echo($produit['nom']) ?></h2>
            <p class="minidescription"><?php echo($produit['minidescription']) ?></p>
            <div class="prix"><?= number_format($produit['prix'], 2, ',', ' ') ?> €</div>
            <button class="btn-ajouter">Ajouter au panier</button>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </section>


  <canvas id="starcanvas"></canvas>
  <script src="public/js/star.js"></script>

  <button id="btn-top" title="Retour en haut">
    <img src="public/images/fleche3.png" alt="Retour en haut">
  </button>
  <script src="public/js/buttonhaut.js"></script>
</main>
