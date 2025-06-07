<head>
    <link rel="stylesheet" href="public/css/trombi.css">
</head>

<main>

    <h1 class="titre-trombi">Notre équipe</h1>
    <h2 class="sous-titre-trombi">Bienvenue dans notre trombinoscope ! Ici, vous pouvez découvrir les membres de notre équipe, leurs rôles et leurs formations. Cliquez sur chaque membre pour en savoir plus sur eux !</h2>
    <p class="description-MMI">
        Notre équipe est composée d'étudiants en MMI (Métiers du Multimédia et de l'Internet) et en Génie Biologique, qui travaillent main dans la main pour créer un projet innovant et passionnant.
        D'un côté, l'équipe MMI se concentre sur le développement web, la création de contenu numérique et la conception graphique. Ainsi les MMI réalisent le site web sur lequel vous naviguez en ce moment-même.
        Elle réalise l'identité visuelle avec la conception du logo, de l'étiquette et des mockups de la bière grâce à de nombreux logiciels de la suite Adobe et plus.
        Les MMI sont également responsables de la gestion des réseaux sociaux et de la communication digitale, assurant ainsi une présence en ligne dynamique et engageante.
        Et ils sont aussi en charge de la création de la vidéo de présentation du projet.
        Deux vidéos ont été réalisées, une pour les coulisses du brassage de la bière et une autre pour la promotion de la bière Nova.
    </p>
    <p class="description-GB">
        De l'autre côté, l'équipe Génie Biologique se spécialise dans la recherche et le développement de nouvelles recettes de bière, en utilisant des techniques de brassage avancées et des ingrédients de qualité.
        Les étudiants en Génie Biologique travaillent sur l'analyse sensorielle, la microbiologie et la chimie des aliments pour garantir que chaque bière produite est non seulement délicieuse, mais aussi sûre et de haute qualité.
        Ils sont également responsables de la gestion de la production de bière, en veillant à ce que chaque lot soit brassé selon les normes les plus strictes.
        Vous pouvez découvrir les différentes étapes de la production de la bière Nova dans la page dédiée à la description des étapes du brassge.
        Vous pourrez également retrouver la vidéo où vous verrez les étudiants Génie Biologique en action, brassant la bière avec passion et expertise.
    </p>
    <h3 class="ensemble-trombi">Ensemble, nous formons une équipe dynamique et complémentaire, prête à relever tous les défis.</h3>


    <section class="section-mmi">
        <h2>Équipe MMI</h2>
        <div id="trombi-grid">
            <?php foreach ($eleves as $eleve): ?>
                <?php if (stripos($eleve['formation'], 'MMI') !== false): ?>
                    <a href="index.php?route=ficheeleve&id=<?php echo($eleve['id_equipe']) ?>" class="card-eleve">
                        <img src="public/images/<?php echo($eleve['images']) ?>" alt="<?php echo($eleve['prenom']) ?>" class="photo-eleve">
                        <div class="infos-eleve">
                            <h3><?php echo($eleve['prenom']) . ' ' . htmlspecialchars($eleve['nom']) ?></h3>
                            <p><?php echo($eleve['age']) ?> ans</p>
                            <p><?php echo($eleve['formation']) ?></p>
                            <p class="rolecouleur"><?php echo($eleve['role']) ?></p>
                        </div>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>


    <section class="section-gb">
        <h2 class="titregb">Équipe Génie Biologique</h2>
        <div id="trombi-grid">
            <?php foreach ($eleves as $eleve): ?>
                <?php if (stripos($eleve['formation'], 'Génie biologique') !== false): ?>
                    <a href="index.php?route=ficheeleve&id=<?php echo($eleve['id_equipe']) ?>" class="card-eleve">
                        <img src="public/images/<?php echo($eleve['images']) ?>" alt="<?php echo($eleve['prenom']) ?>" class="photo-eleve">
                        <div class="infos-eleve">
                            <h3><?php echo($eleve['prenom']) . ' ' . htmlspecialchars($eleve['nom']) ?></h3>
                            <p><?php echo($eleve['age']) ?> ans</p>
                            <p><?php echo($eleve['formation']) ?></p>
                            <p class="rolecouleur"><?php echo($eleve['role']) ?></p>
                        </div>
                    </a>
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
