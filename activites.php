<html>
    <head>
        <title>PoroTour - Activités</title>
        <meta charset="utf-8">
        <?php require "pages/bases/head.php"; ?>
    </head>
    <body>
        <!-- Nav -->
        <?php require "pages/bases/nav.php"; ?>
       <!-- Fin Nav -->

        <div class="banniere-margin-top"></div>

        <section id="activites" class="bg-cover bg-center h-200" style="background-image: url(static/imgs/porotour-1.jpg);">
            <div class="description text-arial-black h1">
              <div>
                <div>
                    Les activités
                </div>
              </div>
            </div>
        </section>
        <div class="native-cool-back-section-effect" style="top: -20px"></div>

        <!-- Visite -->
        <section id="visites" class="pb-2 mt-3">
            <div class="h2 text-center text-arial-black color-green">Visite de sites touristiques et culturels</div>
            <div class="mt-2 section-text-center">
                La Région du Poro possède un grand patrimoine touristique et son passé (pré/post) colonial en d'elle l'une fait des plus grande relique de l'histoire de la Côte d'Ivoire   
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="poro-card">
                    <div class="header" style="background-image: url(static/imgs/muse.jpg)">
                        <div class="overlay"></div>
                        <div class="bottom-content">Musé de Korhogo</div>
                    </div>
                    <div class="body">
                        <div class="content">
                            Il s'agit d'une simple visite du musé de Korhogo qui concentre des pièces historique de l'époque du fondateur.
                        </div>
                    </div>
                </div>
                <div class="poro-card">
                    <div class="header" style="background-image: url(static/imgs/case-sacre-niofon.jpg)">
                        <div class="overlay"></div>
                        <div class="bottom-content">La case sacré de Niofon</div>
                    </div>
                    <div class="body">
                        <div class="content">
                            A Niofoin, cette majestueuse trône au centre du village.
                            Niofoin, situé dans le nord de la Côte d'Ivoire entre Boundiali et Korhogo, est un village Sénoufo fait de cases en construction soudanaise de banco.                        </div>
                    </div>
                </div>

                <div class="poro-card">
                    <div class="header" style="background-image: url(static/imgs/karite.jpg)">
                        <div class="overlay"></div>
                        <div class="bottom-content">Fabrique du beurre de karité</div>
                    </div>
                    <div class="body">
                        <div class="content">
                            La fabrication du beurre de karité est l'une des activités far de la région. Elle fait partie des activités traditionnelles de la région
                        </div>
                    </div>
                </div>

                <div class="poro-card">
                    <div class="header" style="background-image: url(static/imgs/korogho-nuit.jpg)">
                        <div class="overlay"></div>
                        <div class="bottom-content">Parade nocturne</div>
                    </div>
                    <div class="body">
                        <div class="content">
                            Cette activité consistera à visiter la plus animée des villes de la région
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin visite -->

        <!-- Dégustation -->
        <section id="degustation" class="pt-2 pb-2 mt-2 bg-muted">
            <div class="h2 text-center text-arial-black color-green">Dégustation culinaire</div>
            <div class="mt-2 section-text-center">
                Goûtez aux mets de la région.
            </div>
            <div class="d-flex justify-content-center mt-1">
                <div class="m-2">
                    <div class="circle-200 bg-cover border-muted bg-center" style="background-image: url(static/imgs/plat-nord-gban.jpg);"></div>
                    <figcaption class="porotour-legende-3">Gban</figcaption>
                </div>
                <div class="m-2">
                    <div class="circle-200 bg-cover border-muted bg-center" style="background-image: url(static/imgs/plat-nord-kabato-mais.png);"></div>
                    <figcaption class="porotour-legende-3">Kabato de mais</figcaption>
                </div>
                <div class="m-2">
                    <div class="circle-200 bg-cover border-muted bg-center" style="background-image: url(static/imgs/plat-nord-lafidi.jpg);"></div>
                    <figcaption class="porotour-legende-3">Lafidi Fonio</figcaption>
                </div>     
            </div>
        </section>
        <!-- Fin degustation -->

        <!-- Spectacle -->
        <section id="spectales" class="pt-2 pb-2">
            <div class="h2 text-center text-arial-black color-green">Spectacles de danses traditionnelles</div>
            <div class="mt-2 section-text-center">
                Assitez aux spectacles de danses traditionelles les plus populaires de région.
            </div>
            <div class="d-flex justify-content-center mt-1">
                <div class="m-2">
                    <div class="circle-200 bg-cover border-muted bg-center" style="background-image: url(static/imgs/danseurs-boloye3.jpg);"></div>
                    <figcaption class="porotour-legende-3">Le boloye</figcaption>
                </div>
                <div class="m-2 d-flex flex-column align-items-center">
                    <div class="circle-200 bg-cover border-muted bg-center" style="background-image: url(static/imgs/nzolo.jpg);"></div>
                    <figcaption class="porotour-legende-3">Le N'ZOLO ou danse des Tam-tam</figcaption>
                </div>   
            </div>
        </section>
        <!-- Fin spectacle -->

        <!-- Parade nocturne -->
        <section id="parade" class="pt-2 pb-2 bg-muted">
            <div class="h2 text-center text-arial-black color-green">La parade nocturne</div>
            <div class="mt-2 section-text-center">
                Allons dans les coins les plus chaud de la région !
            </div>
            <div class="d-flex justify-content-center mt-1">
                <div class="m-2 d-flex flex-column align-items-center">
                    <div class="circle-400 bg-cover border-muted bg-center" style="background-image: url(static/imgs/korogho-nuit.jpg);"></div>
                    <figcaption class="porotour-legende-3">Korogho la nuit</figcaption>
                </div>   
            </div>
        </section>
        <!-- Fin visite -->

        <?php require "pages/bases/footer.php"; ?>

    </body>
</html>