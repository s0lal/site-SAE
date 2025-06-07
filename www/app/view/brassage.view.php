<head>
  <link rel="stylesheet" href="public/css/brassage.css">
</head>

<main>
    <div id="brassage-grid">

        <div class="timeline-page">
            <h1 class="page-title">Les étapes du brassage</h1>

            <div class="timeline-container">
                <div class="timeline">
                    <!-- Étape 1 : Ingrédients -->
                    <div class="timeline-item">
                    <!-- On n’utilise pas .timeline-icon ici, mais .ingredients-group à la place -->
                    <div class="ingredients-group">
                        <div class="ingredient-item malt">
                        <img src="public/images/malt.png" alt="Malt">
                        </div>
                        <div class="ingredient-item levure">
                        <img src="public/images/levure.png" alt="Levure">
                        </div>
                        <div class="ingredient-item houblon">
                        <img src="public/images/houblon.png" alt="Houblon">
                        </div>
                        <div class="ingredient-item infusion">
                        <img src="public/images/infusion.png" alt="Infusion">
                        </div>
                        <div class="ingredient-item eau">
                        <img src="public/images/eau.png" alt="Eau">
                        </div>
                    </div>

                    <div class="timeline-title">Ingrédients</div>
                    <div class="timeline-desc">
                        <p>Houblon, malt, levure, infusion, eau</p>
                    </div>
                    </div>

                    <!-- Étape 2 : Concassage -->
                    <div class="timeline-item">
                    <div class="timeline-icon">
                        <img src="public/images/concassage.png" alt="Concassage" />
                    </div>
                    <div class="timeline-title">Concassage</div>
                    <div class="timeline-desc">
                        <p>Permet de rendre accessible l’amidon contenu dans les grains pour les enzymes.</p>
                    </div>
                    </div>

                    <!-- Étape 3 : Empâtage -->
                    <div class="timeline-item">
                    <div class="timeline-icon">
                        <img src="public/images/empatage.png" alt="Empâtage" />
                    </div>
                    <div class="timeline-title">Empâtage</div>
                    <div class="timeline-desc">
                        <p>En chauffant, les grains d’amidon vont gonfler et éclater afin que les enzymes décomposent l’amidon en sucres.</p>
                    </div>
                    </div>

                    <!-- Étape 4 : Lavage des drêches et filtration -->
                    <div class="timeline-item">
                    <div class="timeline-icon">
                        <img src="public/images/lavage.png" alt="Lavage des drêches" />
                    </div>
                    <div class="timeline-title">Lavage & filtration</div>
                    <div class="timeline-desc">
                        <p class="remonter">Le lavage permet d’extraire les sucres résiduels et la filtration sépare les drêches du moût.</p>
                    </div>
                    </div>

                    <!-- Étape 5 : Ébullition -->
                    <div class="timeline-item">
                    <div class="timeline-icon">
                        <img src="public/images/ebullition.png" alt="Ébullition" />
                    </div>
                    <div class="timeline-title">Ébullition</div>
                    <div class="timeline-desc">
                        <p>Permet de désinfecter la préparation car les acides du houblon sont libérés et réduisent les risques de contamination.</p>
                    </div>
                    </div>

                    <!-- Étape 6 : Refroidissement & clarification -->
                    <div class="timeline-item">
                    <div class="timeline-icon">
                        <img src="public/images/refroidissement.png" alt="Refroidissement" />
                    </div>
                    <div class="timeline-title">Refroidissement<br>& clarification</div>
                    <div class="timeline-desc">
                        <p class="remonter">Le refroidissement permet d’ajouter les levures et la clarification sépare le moût du houblon.</p>
                    </div>
                    </div>

                    <!-- Étape 7 : Fermentation -->
                    <div class="timeline-item">
                    <div class="timeline-icon">
                        <img src="public/images/fermentation.png" alt="Fermentation" />
                    </div>
                    <div class="timeline-title">Fermentation</div>
                    <div class="timeline-desc">
                        <p>La fermentation permet aux levures de se multiplier et de transformer le sucre en alcool (3 semaines).</p>
                    </div>
                    </div>

                    <!-- Étape 8 : Mise en bouteille -->
                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <img src="public/images/bouteille.png" alt="Mise en bouteille" />
                        </div>
                        <div class="timeline-title">Mise en bouteille</div>
                        <div class="timeline-desc">
                            <p class="remonter">Afin de terminer la fermentation, on met en bouteille la bière.</p>
                        </div>
                    </div>
                </div>
            </div>

            
            <section class="details-section">
                <!-- Étape 1 -->
                <div class="detail-step">
                    <h3>1. Le choix des ingrédients</h3>
                    <p>
                    <strong>Malts :</strong> Pilsen, Vienna, Carapils → Le malt Pilsen apporte des sucres fermentescibles et une base claire. Le malt Vienna donne de la rondeur et le Carapils stabilise la mousse.
                    </p>
                    <p>
                    <strong>Houblon :</strong> Utilisé pour son amertume et son pouvoir antiseptique (acides alpha).
                    </p>
                    <p>
                    <strong>Levures :</strong> Souche adaptée à la fermentation haute (Saccharomyces cerevisiae).
                    </p>
                    <p>
                    <strong>Eau :</strong> Composant principal et minéraux.
                    </p>
                    <p>
                    <strong>Ajout fruits rouges :</strong> Cassis, myrtille, mûre → pour aromatiser.
                    </p>
                </div>

                <!-- Étape 2 -->
                <div class="detail-step">
                    <h3>2. Concassage</h3>
                    <p>
                    Le but de cette étape est d’ouvrir les grains de malt pour libérer l’amidon contenu dans l’enveloppe sans pour autant les réduire en farine.
                    </p>
                </div>

                <!-- Étape 3 -->
                <div class="detail-step">
                    <h3>3. Empâtage</h3>
                    <p>
                    Durant cette étape, le malt concassé est mélangé à de l’eau chaude en contrôlant la température (palier de saccharification entre 62 °C et 67 °C) pendant environ 60 minutes. Le but est d’activer les enzymes (amylases) qui transforment l’amidon en sucres fermentescibles comme le maltose ou le glucose.
                    </p>
                    <p>
                    Les paramètres analysés sont : le test à la liqueur de Fehling, qui confirme la présence de sucres réducteurs ; la mesure du pH (zone optimale autour de 5,4–5,6) ; et le contrôle de la température afin de préserver les enzymes.
                    </p>
                </div>

                <!-- Étape 4 -->
                <div class="detail-step">
                    <h3>4. Lavage des drêches et filtration</h3>
                    <p>
                    Cette étape consiste à séparer le moût (liquide sucré) des drêches (résidus de céréales) puis à les rincer à l’aide d’une passoire à fond filtrant afin de récupérer un maximum de sucres sans résidus de grains concassés. Cela impacte directement le rendement d’extraction final.
                    </p>
                </div>

                <!-- Étape 5 -->
                <div class="detail-step">
                    <h3>5. Ébullition</h3>
                    <p>
                    Cette étape dure 60 minutes à 100 °C. Elle sert à stériliser le moût, libérer les acides alpha du houblon (qui créent l’amertume) et effectuer une légère concentration du moût par évaporation. C’est à ce moment que l’on ajoute l’infusion pour préserver les arômes.
                    </p>
                    <p>
                    Après l’ébullition, on mesure la densité initiale de la bière (°Plato) puis on effectue un test de liqueur de Fehling sur cet échantillon afin de vérifier la présence de sucres.
                    </p>
                </div>

                <!-- Étape 6 -->
                <div class="detail-step">
                    <h3>6. Refroidissement et clarification</h3>
                    <p>
                    Le refroidissement ramène le moût à une température inférieure à 30 °C et clarifie la solution avant fermentation. On mesure la conductivité de cet échantillon durant les TP afin de confirmer la concentration ionique (celle-ci diminue après fermentation, signe de l’activité métabolique des levures).
                    </p>
                </div>

                <!-- Étape 7 -->
                <div class="detail-step">
                    <h3>7. Fermentation</h3>
                    <p>
                    Cette étape dure environ 3 semaines à une température ambiante de 20–25 °C. Elle permet aux levures de transformer les sucres en alcool et en CO₂ tout en développant davantage les arômes.
                    </p>
                    <p>
                    L’échantillon sert ensuite à mesurer la densité finale (pour calculer le taux d’alcool % vol), à mesurer le pH final (taux d’acidité mesuré ici à 3,82), à mesurer le CO₂ et à réaliser des dénombrements microbiens sur différents milieux (PCA, Sabouraud, Hektoen) pour confirmer l’absence de contaminants.
                    </p>
                </div>

                <!-- Étape 8 -->
                <div class="detail-step">
                    <h3>8. Mise en bouteille et dernière fermentation</h3>
                    <p>
                    Cette dernière étape relance une refermentation en bouteille grâce à l’ajout d’un peu de sucre. Elle permet la carbonatation naturelle (bulles) et une meilleure conservation.
                    </p>
                    <p>
                    Cet échantillon permet d’observer la pression de CO₂, la stabilité de la mousse et la couleur finale de la bière (EBC, colorimétrie).
                    </p>
                </div>
            </section>

            <div class="video-coulisse">
                <h2>Découvrez notre vidéo coulisses du brassage de la bière</h2>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/lROCHkAYbZ8" title="Vidéo coulisse NOVA" frameborder="0" allowfullscreen></iframe>
                </div>
                <p>Vidéo réalisée par <a href="https://www.youtube.com/@Novaindustrie-v5y" target="_blank">Nova Bières </a>dans le cadre de montrer le processus de brassage de la bière.</p>
            </div>



        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const steps = document.querySelectorAll(".detail-step");

            const observerOptions = {
            root: null,
            rootMargin: "0px",
            threshold: 0.2 // déclencher quand 20% du bloc est visible
            };

            const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                obs.unobserve(entry.target);
                }
            });
            }, observerOptions);

            steps.forEach(step => {
            observer.observe(step);
            });
        });
    </script>




    <canvas id="starcanvas"></canvas>
    <script src="public/js/star.js"></script>

    <button id="btn-top" title="Retour en haut">
        <img src="public/images/fleche3.png" alt="Retour en haut">
    </button>
    <script src="public/js/buttonhaut.js"></script>

</main>
