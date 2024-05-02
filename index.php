<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/3319606_business_bag_briefcase_portfolio_icon.png">
</head>
<?php
        include_once('header.php');
    ?>

<body>

    <div class="container">

        <section class="introduction">
            <h2 class="section-title">Bienvenue sur mon portfolio !</h2>
            <div class="introduction-content">
                <div class="introduction-text">
                    Sur ce site internet, vous pouvez voir les compétences que j’ai pu obtenir durant mon BTS SIO, ainsi
                    que les projets qui les valident.
                    </p>
                </div>
            </div>
        </section>

        <section class="introduction">
            <h2 class="section-title">Présentation</h2>
            <div class="introduction-content">
                <div class="introduction-text">
                    <p>Je me présente, je m’appelle Paul et je suis actuellement en 2ème année de BTS SIO. Depuis mon
                        plus jeune âge, je suis passionné par l’informatique et la programmation. J’ai passé de
                        nombreuses heures à apprendre des langages de programmation comme Python et Java, et à
                        travailler sur des projets allant de la création de sites web à la conception d’applications
                        mobiles. Ce qui me passionne le plus dans la programmation, c’est la possibilité de résoudre des
                        problèmes complexes et de créer quelque chose de tangible et d’utile. Mon objectif est de faire
                        de cette passion ma carrière et de devenir un développeur de logiciels accompli.</p>
                </div>
                <img src="img/BERNE_Paul.jpg" alt="Photo de Paul">
            </div>
        </section>

        <section id="education">
            <h2 class="section-title">Mon Parcours Scolaire</h2>
            <div class="education-item">
                <div class="education-text">
                    <h3>BTS Services Informatiques aux Organisations (SIO)</h3>
                    <h4>Lycée Polyvalent Algoud-Laffemas</h4>
                    <p class="year">2022 - Présent, 26 Valence</p>
                    <p>Actuellement en 2ème année de BTS SIO, spécialité solutions
                        logicielles et applications métiers</p>
                    <p>Conception et réalisation de logiciels - Création deSites Web - Cybersécurité - Réseau - Base de
                        données</p>
                </div>
                <img src="img/btssio.png" alt="Photo de l'établissement"> <!-- Ajoutez votre photo ici -->
            </div>

            <div class="education-item">
                <div class="education-text">
                    <h3>Baccalauréat général</h3>
                    <h4>Lycée Albert Triboulet, 26 Romans-sur-Isère</h4>
                    <p class="year">2019 - 2022</p>
                    <p>Spécialités Sciences Économique et Sociales -Histoire-Géographie, Géopolitique et Sciences
                        politiques.
                    </p>
                </div>
                <img src="img/bacgeneral.png" alt="Photo de l'établissement">
            </div>
        </section>

        <section id="experience">
            <h2 class="section-title">Mon Expérience Professionnelle</h2>
            <div class="experience-item">
                <div class="experience-text">
                    <h3>Stage de première année</h3>
                    <h4>FREGATE AERO</h4>
                    <p class="year">21 Mai - 21 Juin, 07 La Voulte-sur-Rhône</p>
                    <p>Programme Python - Traitement thermique - travail de métrologie</p>
                </div>
                <img src="img/fregateaero.png" alt="Photo de l'entreprise">
            </div>
            <div class="experience-item">
                <div class="experience-text">
                    <h3>Stage de seconde année</h3>
                    <h4>FREGATE AERO</h4>
                    <p class="year">8 Janvier - 23 Février, 07 La Voulte-sur-Rhône</p>
                    <p>Réalisation de macro VBA Excel - validation de conformité - Travail de métrologie</p>
                </div>
                <img src="img/fregateaero.png" alt="Photo de l'entreprise">
            </div>
        </section>


        <section class="section">
            <h1>Compétences validées durant le BTS SIO</h1>
            <ul>
                <li>
                    <h2 class="section-title"><a href="A1.php">A1 : Gérer le patrimoine informatique</a></h2>
                </li>
                <li>
                    <h2 class="section-title"><a href="A2.php">A2 : Répondre aux incidents et aux demandes d'assistance
                            et d'évolution</a></h2>
                </li>
                <li>
                    <h2 class="section-title"><a href="A3.php">A3 Développer la présence en ligne de l’organisation</a>
                    </h2>
                </li>
                <li>
                    <h2 class="section-title"><a href="A4.php">A4 Travailler en mode projet
                        </a></h2>
                </li>
                <li>
                    <h2 class="section-title"><a href="A5.php">A5 Mettre à disposition des utilisateurs un service
                            informatique</a></h2>
                </li>
                <li>
                    <h2 class="section-title"><a href="A6.php">A6 Organiser son développement professionnel
                        </a></h2>
                </li>
            </ul>
        </section>


    </div>

    <?php
    include_once ('footer.php');
    ?>
</body>

</html>