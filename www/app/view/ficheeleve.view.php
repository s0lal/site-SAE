<head>
    <link rel="stylesheet" href="public/css/ficheeleve.css">
</head>

<main>
    <a href="index.php?route=trombi" class="btn-retour-trombi">← Retour à la page d'équipe</a>

    <?php if (!$eleves): ?>
        <p style="color:white; text-align:center; margin-top: 100px;">Élève introuvable.</p>
    <?php else: ?>
        <div class="fiche-eleve-container">
            <div class="fiche-eleve-image">
                <img src="public/images/<?= isset($eleves['images']) ? htmlspecialchars($eleves['images']) : 'default.jpg' ?>" 
                     alt="<?= isset($eleves['nom']) ? htmlspecialchars($eleves['nom']) : '' ?>">
            </div>

            <div class="fiche-eleve-details">
                <h1>
                    <?= (isset($eleves['prenom']) ? htmlspecialchars($eleves['prenom']) : '') . ' ' . 
                        (isset($eleves['nom']) ? htmlspecialchars($eleves['nom']) : '') ?>
                </h1>

                <span class="tag-eleve"><?= isset($eleves['age']) ? htmlspecialchars($eleves['age']) . ' ans' : '' ?></span>
                <span class="tag-eleve"><?= isset($eleves['formation']) ? htmlspecialchars($eleves['formation']) : '' ?></span>
                <span class="tag-eleve"><?= isset($eleves['role']) ? htmlspecialchars($eleves['role']) : '' ?></span>

                <p class="resume"><?= isset($eleves['resume']) ? nl2br(htmlspecialchars($eleves['resume'])) : '' ?></p>

                <?php if (!empty($eleves['instagram'])): ?>
                    <p>@<a href="https://www.instagram.com/<?php echo($eleves['instagram']) ?>" 
                    target="_blank" 
                    class="social-link">
                        <?php echo($eleves['instagram']) ?>
                    </a></p>
                <?php endif; ?>

                </a>
    <?php endif; ?>


            </div>
        </div>

    <canvas id="starcanvas"></canvas>
    <script src="public/js/star.js"></script>

    <button id="btn-top" title="Retour en haut">
        <img src="public/images/fleche3.png" alt="Retour en haut">
    </button>
    <script src="public/js/buttonhaut.js"></script>
</main>
