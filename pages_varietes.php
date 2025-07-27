<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/variete.css?v=1.1">
    <script type="module" src="JS/traitement.js" defer></script>
</head>


<script>
</script>

<body>




    <!-- Contenu principal -->

    <section class="container-style section1_main ">

        <header class="main-header container-style">
            <div class="header-style content-style">
                <span class="logo">Plant’Arbre</span>
                <nav class="nav-bar">
                    <ul class="nav-list">
                        <a href="index.php" class="nav-link ">Accueil</a>
                        <a href="pages_varietes.php" class=" active nav-link">Variétés Fruitières</a>
                        <a href="" class="nav-link">Guide Pratique</a>
                        <a href="" class="nav-link">Contact</a>
                    </ul>
                </nav>
                <div class="burger-icone">
                    <span class="line l1"></span>
                    <span class="line l2"></span>
                    <span class="line l3"></span>
                </div>
            </div>
        </header>
    </section>


    <div class="search-section container-style  ">
        <div class="content-style search-content">
            <div class="inputBlock">
                <input type="text" name="recherche" id="recherche" class="search" placeholder="Entrezle nom d'un arbre">
                <button class="btn-search ">Rechercher</button>
            </div>
        </div>
    </div>

    <main class="nos-varietes container-style">
        <div class="content-style variete">
            <h3>Liste d'arbre</h3>
            <div class="grille-varietes">
                <?php
                $varietes = [
                    [
                        'nom' => 'Avocatier',
                        'description' => 'Arbre tropical produisant des avocats riches en nutriments.',
                        'image' => 'IMAGE/avocat.avif',
                        'details' => 'L’avocatier se plante en fin de saison sèche, dans des sols bien drainés, riches en matière organique. Il préfère les climats tropicaux et subtropicaux humides. On le retrouve principalement en Afrique de l’Ouest, en Amérique centrale et en Asie du Sud. Un arrosage régulier est nécessaire pendant les premières années.'
                    ],
                    [
                        'nom' => 'Figuier',
                        'description' => 'Arbre méditerranéen reconnu pour ses figues sucrées.',
                        'image' => 'IMAGE/figue.avif',
                        'details' => 'Le figuier se plante de préférence au printemps ou à l’automne. Il aime les sols calcaires, secs, bien exposés au soleil. Il s’adapte très bien aux zones arides du sud de l’Europe, de l’Afrique du Nord et du Moyen-Orient. Résistant à la sécheresse, il demande peu d’entretien.'
                    ],
                    [
                        'nom' => 'Fraisier',
                        'description' => 'Plante basse produisant de savoureuses fraises rouges.',
                        'image' => 'IMAGE/fraise.avif',
                        'details' => 'Le fraisier se plante au printemps ou à l’automne dans un sol riche, léger et bien drainé. Il demande une exposition ensoleillée et un arrosage régulier. On le retrouve dans les zones tempérées d’Europe, d’Amérique du Nord et d’Afrique. Il convient parfaitement aux petits jardins ou en pot.'
                    ],
                    [
                        'nom' => 'Oranger',
                        'description' => 'Arbre au feuillage persistant donnant de belles oranges juteuses.',
                        'image' => 'IMAGE/orange.avif',
                        'details' => 'L’oranger se plante au printemps, dans un sol léger, sableux et bien drainé. Il a besoin de beaucoup de soleil et de chaleur. Cultivé dans le sud de l’Europe, en Afrique du Nord et en Amérique latine, il demande une irrigation régulière en période sèche et une protection contre le gel.'
                    ],
                    [
                        'nom' => 'Papayer',
                        'description' => 'Arbre tropical au tronc mince, produisant des papayes sucrées.',
                        'image' => 'IMAGE/papaye.avif',
                        'details' => 'Le papayer se plante en début de saison des pluies. Il préfère un sol profond, riche et bien drainé. Il pousse dans les régions tropicales et subtropicales comme l’Afrique centrale, l’Amérique latine et l’Asie du Sud-Est. Il craint le froid et le vent fort. La fructification commence dès la première année.'
                    ],
                    [
                        'nom' => 'Pêcher',
                        'description' => 'Arbre de taille moyenne offrant de délicieuses pêches.',
                        'image' => 'IMAGE/peche.jpg',
                        'details' => 'Le pêcher se plante entre novembre et mars, dans un sol drainé, légèrement acide, et exposé au soleil. Il résiste au froid mais redoute l’humidité. Il est cultivé principalement en Europe du Sud, en Chine et aux États-Unis. Une taille annuelle est nécessaire pour maintenir sa productivité.'
                    ],
                    [
                        'nom' => 'Pommier',
                        'description' => 'Arbre fruitier classique produisant des pommes sucrées ou acidulées.',
                        'image' => 'IMAGE/pomme.jpg',
                        'details' => 'Le pommier se plante en automne ou au printemps. Il aime les climats tempérés, un sol profond, riche en humus et bien drainé. Cultivé en Europe, en Amérique et en Asie, il nécessite une taille de formation et de fructification chaque année. Il fleurit au printemps et donne des fruits en automne.'
                    ],
                    [
                        'nom' => 'Prunier',
                        'description' => 'Arbre rustique donnant des prunes sucrées ou acidulées.',
                        'image' => 'IMAGE/prune.avif',
                        'details' => 'Le prunier s’adapte à la plupart des sols, mais préfère les terrains bien drainés. Il se plante à l’automne. Il supporte les climats froids et tempérés, comme ceux d’Europe et d’Asie. La taille est importante pour éviter la surcharge en fruits et assurer une bonne aération.'
                    ],
                    [
                        'nom' => 'Citronnier',
                        'description' => 'Petit arbre méditerranéen au feuillage parfumé.',
                        'image' => 'IMAGE/citron.avif',
                        'details' => 'Le citronnier se plante au printemps, dans des sols riches, bien drainés et en plein soleil. Il craint le gel et le vent, ce qui impose une culture en pot dans les régions froides. On le cultive dans les zones subtropicales : Méditerranée, Amérique du Sud et Asie.'
                    ],
                    [
                        'nom' => 'Poirier',
                        'description' => 'Arbre vigoureux produisant des poires juteuses.',
                        'image' => 'IMAGE/poire.avif',
                        'details' => 'Le poirier aime les sols profonds, frais et bien exposés. Il se plante à l’automne ou au printemps. Il s’adapte aux climats tempérés, comme en Europe ou au Canada. La taille permet de maintenir un bon équilibre entre bois et fruits.'
                    ],
                    [
                        'nom' => 'Cerisier',
                        'description' => 'Arbre élégant avec une floraison spectaculaire au printemps.',
                        'image' => 'IMAGE/cerise.jpg',
                        'details' => 'Le cerisier est planté en automne dans un sol bien drainé, légèrement calcaire. Il préfère les climats tempérés et les expositions ensoleillées. On le trouve dans de nombreuses régions d’Europe et d’Asie. Il nécessite peu d’entretien mais une taille légère après la fructification.'
                    ]
                ];



                foreach ($varietes as $variete) {
                    echo "<div class='carte-variete'>
    <div class='image-bloc'>
      <img src='{$variete['image']}' alt='{$variete['nom']}'>
    </div>
    <h3>{$variete['nom']}</h3>
    <p>{$variete['description']}</p>
    <button class='btn-detail' 
            data-nom='{$variete['nom']}' 
            data-description='{$variete['details']}'
            data-image='{$variete['image']}'>Voir plus</button>
  </div>";
                }

                ?>
            </div>
        </div>
        <div class="modal" id="modal-description">
            <div class="modal-content">
                <span id="close-modal">&times;</span>
                <h3 id="modal-title"></h3>
                <img id="modal-image" src="" alt="" class="modal-img">
                <p id="modal-text"></p>
            </div>
        </div>
    </main>

    <!-- Pied de page -->
    <footer class="footer">
        <p>&copy; <?= date("Y") ?> Plantabre - Tous droits réservés.</p>
    </footer>

</body>

</html>

</body>

</html>