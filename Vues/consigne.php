<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Vues/Style/main.css">
    <title>Reverrecible - Consigne</title>
  </head>
  <body>
    <header>
      <nav>
      <ul>
        <li id="logoMenu"><a href="mainCTRL.php"><img src="../Vues/Style/Logo.png" alt="logo"></a></li>
        <li><a href="quisommesnousCTRL.php"><h3>QUI SOMMES NOUS ?</h3></a></li>
        <li id="pageSelectionee"><a href="#"><h3>CONSIGNE</h3></a></li>
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
      <h1>CONSIGNE</h1>
      <div class="separateur"></div>
      <article>
        <div class="sousArticle">
        <h2>REEMPLOI VS RECYCLAGE</h2>
        <p>
          La raréfaction des ressources, le changement climatique et les obligations de la France en matière de prévention des déchets nous incitent à repenser nos modes de consommation.<br>
          L’économie du jetable n’offre aucune perspective de durabilité face à ces enjeux qui impliquent d’imaginer de nouveaux modèles plus résilients comme les systèmes de réemploi du verre.
        </p>
      </div>
        <img src="../Vues/Style/REEMPLOI_VS_RECYCLAGE.png" alt="réemploi vs recyclage">
      </article>
      <div class="separateur"></div>
      <article>
        <h2>POURQUOI CONSIGNER SES BOUTEILLES EN VERRE?</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/l7xl2bZyIJg"
        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
      </article>
      <div class="separateur"></div>
      <article>
        <div class="sousArticle">
        <h2>IMPACT ÉCONOMIQUE</h2>
        <p>Le verre représente à lui seul la moitié du tonnage des emballages ménagers mis sur
          le marché français chaque année : 2,5 millions de tonnes par an !
        </p>
        <div class="separateurP"></div>
        <p>Toujours en vigueur dans les bars restaurants, la consigne permet d’éviter 500 000 t/an
          de déchets ménager avec une économie de -35€/t pour le recyclage et -106€/t pour l’enfouissement du verre.
        </p>
        <div class="separateurP"></div>
        <p>Grâce au retour de la consigne, REVERRECIBLE renforcera l’incitation et la performance de tri des usagers.<br>
          Ce qui permettra d’atteindre les objectifs du schéma directeur des déchets 2020-2030 que s’est fixé la Métropole de
          Grenoble : 20% de déchets évités, ce qui représente -1000t/an concernant le verre.
        </p>
      </div>
      <div class="sousArticle">
      <h4>Diminution des coûts d’enlèvement des conteneurs à verre</h4>
      <p>Le retour des bouteilles utilisées se faisant au magasin d’achat
        par le consommateur, toute bouteille réutilisée est une bouteille qui n’a pas à être enlevée.
      </p>
      <h4>Création d’emplois non délocalisable</h4>
      <p>Un réseau de consigne crée de l’emploi sur deux secteurs
        d’activité : le fonctionnement de la laveuse et le transport des bouteilles.
      </p>
      <h4>Diminution des dépôts sauvages</h4>
      <p>Les bouteilles consignées valent de l’argent.<br>
        Il existe donc une motivation simple et efficace en faveur d’un retour de la bouteille au magasin
        d’achat pour déconsignation.<br>
        En plus d’une esthétique retrouvée, la diminution des dépôts sauvages permet une réduction des coûts liés aux nettoyages des bords de route.
      </p>
    </div>
    <div class="sousArticle">
    <h2>IMPACT ENVIRONNEMENTAL</h2>
    <p>La production et l’élimination des déchets en verre contribuent à l’épuisement des matières premières,
      à la pollution des sols, des eaux et de l’air et posent des questions de sécurité sanitaire et de santé publique.<br>
      Le lavage du verre permet un gain environnemental non négligeable par rapport à une gestion classique en recyclage.
    </p>
    <img src="../Vues/Style/SCHEMA_CO2.png" alt="">
  </div>
      </article>
      <?php require_once('footer.php'); ?>
  </body>
</html>
