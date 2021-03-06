<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>Reverrecible - Qui sommes nous ?</title>
  </head>
  <body>
    <header>
      <nav>
      <ul>
        <li id="logoMenu"><a href="mainCTRL.php"><img src="../Vues/Style/Logo.png" alt="logo"></a></li>
        <li id="pageSelectionee"><a href="quisommesnousCTRL.php"><h3>QUI SOMMES NOUS ?</h3></a></li>
        <li><a href="consigneCTRL.php"><h3>CONSIGNE</h3></a></li>
        <li><a href="contactCTRL.php"><h3>CONTACT</h3></a></li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn"><h3>AUTRES</h3></a>
          <div class="dropdown-content">
            <a href="profilCTRL.php">PROFIL</a>
            <a href="donsCTRL.php">DONS</a>
            <a href="inventaireDesProduitsConsignesCTRL.php">INVENTAIRE DES PRODUITS CONSIGNÉS</a>
            <a href="evenementsCTRL.php">EVENEMENTS</a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="separateurTop"></div>
    </header>
    <h1>QUI SOMMES NOUS ?</h1>
    <div class="separateur"></div>
    <article>
      <div class="sousArticle">
        <h2>NOTRE PROJET</h2>
      <p>
        L’association REVERRECIBLE est animée par la volonté de réduire l’impact environnemental de l’emploi des contenants en verre. Son objectif est de développer le réemploi du verre plutôt que le recyclage. Outre ces valeurs écologiques, REVERRECIBLE souhaite promouvoir un modèle économique basé sur la coopération avec tous les acteurs du territoire, en favorisant les producteurs locaux et les circuits courts, en créant de l’emploi localement et en sensibilisant les citoyens à la réduction des déchets.<br><br>
        De nombreuses initiatives nouvelles de développement de contenants consignés voient le jour en France, encouragées par la demande des consommateurs, la relocalisation de certaines activités de production, ou l’essor de la vente en vrac. Ce projet s’établit dans une optique de co-construction entre les différents acteurs (collectivités, producteurs, distributeurs, partenaires associatifs, citoyens…) de notre région, mais aussi de coopération avec le Réseau Consigne national pour créer une véritable filière du réemploi sur tout le territoire français.
      </p>
    </div>
    <div class="sousArticle">
      <img src="../Vues/Style/LIGNE_DU_TEMPS.png" alt="ligne du temps">
    </div>
    </article>
    <div class="separateur"></div>
    <article>
      <div class="sousArticle">
        <img src="../Vues/Style/FUTURE_FILIERE.png" alt="future filière">
      </div>
      <div class="sousArticle">
        <article>
          <div class="sousArticle">
            <h4>APPORTER DES SOLUTIONS TECHNIQUES ET ACCOMPAGNER LE CHANGEMENT</h4>
            <ul>
              <li>Mettre en place un centre de lavage.</li>
              <li>Proposer des contenants (uniformes et plus épais, des colles (hydrosolubles) et des étiquettes adaptés au réemploi.</li>
              <li>Soutenir les producteurs qui pratiquent la consigne.</li>
            </ul>

            <h4>INFORMER ET SENSIBILISER LES CONSOMMATEURS</h4>
            <ul>
              <li>Créer des supports de communication à destination des producteurs.</li>
              <li>Elaborer des campagnes de communication pour les consommateurs.</li>
            </ul>
          </div>
          <div class="sousArticle">
            <h4>OPTER POUR UNE LOGISTIQUE DE COLLECTE OPTIMISÉE ET MUTUALISÉE</h4>
            <ul>
              <li>Optimiser les tournées de collecte.</li>
              <li>Écologique : mutualiser les moyens de transport existants</li>
            </ul>

            <h4>LE DÉVELOPPEMENT DURABLE AU PROFIT DE LA PERFORMANCE</h4>
            <ul>
              <li>Privilégier les énergies renouvelable.</li>
              <li>Optimiser la gestion de l’eau.</li>
            </ul>
          </div>
        </article>
      </div>
    </article>
    <div class="separateur"></div>
    <article>
      <div class="sousArticle">
        <img src="../Vues/Style/STEPH_01.png" alt="stéphanie">
        <h3>Naïm</h3>
        <p>Je suis chargé de communication et graphiste (print & web).
          Je possède des compétences notamment en organisation d’événement (gestion et logistique) et création de site internet.</p>
      </div>
      <div class="sousArticle">
        <h3>Stéphanie</h3>
        <p>Je suis ingénieur matériaux et qualité de formation.
          J’ai 15 ans d’expériences professionnelle dans l’industrie.
          Bonnes connaissances des processus industriels, analyse et gestion des risques produit/process.</p>
        <img src="../Vues/Style/NAIM_01.png" alt="naim">
      </div>
      <div class="sousArticle">
        <h2>Notre TERRITOIRE</h2>
        <p>Comme l’indique la carte cicontre, notre ambition est de proposer un service de lavage pour les producteurs situés dans un rayon de 100km autour de Grenoble.</p>
      </div>
      <div class="sousArticle">
        <img src="../Vues/Style/CARTE.png" alt="carte">
      </div>
    </article>
    <?php require_once('footer.php'); ?>
  </body>
</html>
