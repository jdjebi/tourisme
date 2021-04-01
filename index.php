<html>
    <head>
        <title>PoroTour - Accueil</title>
        <meta charset="utf-8">
        <?php require "pages/bases/head.php"; ?>
    </head>
    <body>
        <!-- Nav -->
        <?php require "pages/bases/nav.php"; ?>
       <!-- Fin Nav -->

        <!-- Banniere -->

        <div class="banniere-margin-top"></div>
        <div class="banniere">
            <div class="overlay"></div>
            <div class="banniere-container back-content">
                <div class="bg-presentation"></div>
                <div class="bg-porotour"></div>
            </div>
            <div class="banniere-container top-content">
                <div class="content-presentation color-white">
                    <div class="content-porotour-overlay"></div>
                    <div class="content">
                        <div>
                            <div class="text-arial-black">
                                <div class="h1">Bienvenue</div>
                                <div class="h1">Sur le site touristique</div>
                                <div class="h1">De la Région du Poro</div>
                            </div>
                            <!--
                            <div class="mt-5">
                                <a href="#porotour-menu" class="text-arial-black porotour-btn porotour-btn-white">Decouvrir</a>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
                <div class="content-porotour color-white">
                    <div class="content text-center">
                        <div class="h1 text-birdlove porotour-title">PoroTour 2021</div>
                        <div class="mt-1 text-25">La plus grande excursion touristique de la Région du Poro</div>
                        <div class="mt-3 text-center">
                            <a href="inscription.php" class="text-arial-black porotour-btn porotour-btn-white">Participer !</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cool-back-section-effect"></div>
        </div>

        <!-- Fin Banniere -->

        <!-- Section de naviguation -->

        <section id="porotour-menu" class="position-relative mt-3">
            
            <div class="bottom-illustrations position-relative">
                <img id="bague-sef-1" class="illustration" src="static/imgs/bague-cameleon.png" alt="Bague de caméleon Sénoufo">
                <img id="masque-sef-1" class="illustration" src="static/imgs/masque-senoufo2.png" alt="Masque Sénoufo">
                <img id="masque-sef-2" class="illustration" src="static/imgs/masque-senoufo.png" alt="Bague de caméleon Sénoufo">
            </div>

            <div>
                <div class="h1 text-center text-arial-black">A la découverte de la Région du Poro</div>
                <div class="menu mt-3">
                    <div class="main-card">
                        <div id="presentation-card" class="box-card">
                            <div>
                                <div class="overlay"></div>
                                <div class="top-content">
                                        <div>
                                            <a class="label" href="#presentation">Présentation de la région</a>
                                        </div>
                                </div>
                                <div class="content">
                                        <div>
                                            <video autoplay muted="true" loop="true">
                                                <source src="static/korhogo.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                </div>
                            </div> 
                        </div>
                        <div id="menu-items">
                            <div class="content">
                                <div id="faune-card" class="menu-item box-card">
                                    <div class="overlay"></div>
                                    <div class="top-content">
                                        <div>
                                            <a class="label" href="#faune">La faune et la lore</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="separation"></div>
                                <div id="reflief-card" class="menu-item box-card">
                                    <div class="overlay"></div>
                                    <div class="top-content">
                                        <div>
                                            <a class="label" href="#relief">Le relief</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" mt-3 position-relative">
                 <!--
                <div class="bague-illustration-2 d-none">
                    <img class="w-300" src="static/imgs/bague-cameleon-2.png" alt="Bague Caméleon">
                </div>
                
                <div class="h2 text-center text-arial-black">
                    Une région riche et pleine de surprise !
                </div>
                -->                

                <div class="atout-cards mt-2">
                    <a href="#histoire">
                        <div id="histoire-card" class="atout-card">
                            <div class="top-content">
                                <span>Histoire et culture</span>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </a>
                    <a href="#nourriture">
                        <div id="nourriture-card" class="atout-card">
                            <div class="top-content">
                                <span>Les specialités culinaires</span>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </a>
                    <a href="#villes">
                        <div id="villages-card" class="atout-card">
                            <div class="top-content">
                                <span>Les villes</span>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </a>
                </div>
                <div class="atout-cards">
                    <a href="#activtes">
                        <div id="activites-card" class="atout-card">
                            <div class="top-content">
                                <span>Les activtés du PoroTour 21</span>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </a>
                    <a href="#galerie">
                        <div id="galerie-card" class="atout-card">
                            <div class="top-content">
                                <span>Explorer la galerie</span>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="native-cool-back-section-effect" style="top: -20px"></div>
        </section>

        <!-- Fin Section -->
        
        <!-- Section sur la faune -->
        <section id="presentation" class="porotour-section mt-1">
            <div class="h1 text-center text-arial-black mb-1 color-green mb-1">Présentation de la région</div>
            <div class="d-flex">
                <div class="section-wp-100 d-flex align-items-center">
                    <div class="content">
                        <div class="h2 text-arial-black mb-1 color-green">Situation géographique</div>
                        <div class="section-text">
                            La Région du Poro est une région du nord de la Côte d'Ivoire dont le chef lieu est Korogho. 
                            Son nom lui vient du bois sacré <strong>"le Poro"</strong> qui est le lieu d'une initiation comme la fête de génération chez la Ebrié.
                            Elle est limitée au nord par la République du Mali, au sud par la région du Béré, à l’est par les régions du Tchologo et du Hambol et à l’ouest par la région de la Bagoué.
                        </div>
                    </div>
                </div>
                <div class="section-wp-100 d-flex align-items-center justify-content-center flex-column">
                    <img class="w-400" src="static/imgs/carte-region-poro.jpg" alt="Catre du poro">
                    <figcaption class="porotour-legende">Catre de la Région du Poro</figcaption>
                </div>
            </div>
            <div class="d-flex">
                <div class="section-wp-100 d-flex align-items-center justify-content-center flex-column">
                    <div class="circle-400" style="background-image: url(static/imgs/danseurs-boloye.jpg); background-size: cover;"></div>
                    <figcaption class="porotour-legende">Danseurs boloye</figcaption>
                </div>
                <div class="section-wp-100 d-flex align-items-center">
                    <div class="content right">
                        <div class="h2 text-arial-black mb-1 color-green">Peuplement</div>
                        <div class="section-text">
                            Elle est peuplée pour l'essentiel de <strong class="color-green"> Malinkés et de Sénoufos</strong> avec également une minorité de <strong class="color-green">bergers Peuls</strong> .
                            Dans toute la région, la musique du balafon et celle de la kora accompagne la plupart des cérémonies, notamment les funérailles.
                            Elle jouxte le district du Denguélé dont la ville principale est Odienné ainsi que le Mali et le Burkina Faso.
                            La richesse de la région est essentiellement agricole, notamment par la production de coton, destinée à l'exportation.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin section -->

        <div class="porotour-divider div-transparent mt-3"></div>

        <!-- Section de presentation de la region -->
        <section id="faune" class="porotour-section mt-2">
            <div class="h1 text-center text-arial-black mb-1 color-green mb-1">La faune et la flore</div>
            <div class="d-flex">
                <div class="section-wp-100 d-flex align-items-center">
                    <div class="content">
                        <div class="h2 text-arial-black mb-1 color-green">La faune</div>
                        <div class="section-text">
                            Dans la région vivent les calaos, animaux fétiches pour les sénoufos, des babouins, des guenons, des phacochères, des potamochères, des perdrix et des francolins ainsi que des antilopes, essentiellement des cobes de Buffon et des guib harnachés. <br>
                            On y trouve également beaucoup d'agoutis dont la chair est très appréciée et les margouillats pullulent.
                        </div>
                        <div class="mt-2">
                            <a href="pages/galerie.php#faune" class="porotour-btn porotour-btn-green porotour-btn-caret">Plus de détails</a>
                        </div>
                    </div>
                </div>
                <div class="section-wp-100 d-flex flex-wrap align-items-center justify-content-center">
                    <div class="w-400">
                        <div class="flex-grow-box">
                            <div class="card-animal" style="background-image: url(static/imgs/phacochere.jfif);">
                                <figcaption class="porotour-legende-2">Phacochère</figcaption>
                            </div>
                        </div>
                        <div class="flex-grow-box">
                            <div class="card-animal" style="background-image: url(static/imgs/predrix.jpg);">
                                <figcaption class="porotour-legende-2">Perdrix</figcaption>
                            </div>
                            <div class="card-animal" style="background-image: url(static/imgs/agouti.jpg);">
                                <figcaption class="porotour-legende-2">Agouti</figcaption>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="section-wp-100 d-flex align-items-center">
                    <div class="content">
                        <div class="h2 text-arial-black mb-1 color-green">La flore</div>
                        <div class="section-text">
                            La végétation est celle de la savane arborée.
                            Les flamboyants et les hibiscus sont nombreux et la savane abrite des fromagers, des baobabs ainsi que des anacardiers, des nérés et des karités. <br>
                            On y retrouve aussi les habituels arbres à fleurs tropicaux tels que les frangipaniers, les bougainvilliers, les acacias ou les ananas roses ainsi que de multiples variétés d'orchidées, spécialité du pays.
                        </div>
                        <div class="mt-2">
                            <a href="pages/galerie.php#flore" class="porotour-btn porotour-btn-green porotour-btn-caret">Plus de détails</a>
                        </div>
                    </div>
                </div>
                <div class="section-wp-100 d-flex flex-wrap align-items-center justify-content-center">
                    <div class="w-400">
                        <div class="flex-grow-box">
                            <div class="card-animal bg-center" style="background-image: url(static/imgs/flamboyants.jpg);">
                                <figcaption class="porotour-legende-2">Flamboyant</figcaption>
                            </div>
                        </div>
                        <div class="flex-grow-box">
                            <div class="card-animal" style="background-image: url(static/imgs/baobab.jpg);">
                                <figcaption class="porotour-legende-2">Baobab</figcaption>
                            </div>
                            <div class="card-animal" style="background-image: url(static/imgs/anacardier.png);">
                                <figcaption class="porotour-legende-2">Anarcardier</figcaption>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Fin section -->

        <!-- Section relief-->
        <section id="relief" class="bg-muted pt-2 pb-2">
            <div class="h2 text-center mb-1 text-arial-black color-green">Le relief</div>
            <div class="section-text-center">
                Le relief est plat et parsemé de petites montagnes et collines isolés qui dominent
                les plaines et les plateau dont le plus connu est <br> <strong class="color-grren">le « Mont Korhogo »</strong>.
            </div>
            <div class="d-flex justify-content-center flex-wrap mt-2">
                <div class="m-2">
                    <div class="circle-200 bg-cover" style="background-image: url(static/imgs/montagne-1.jpg);"></div>
                    <figcaption class="porotour-legende-3">Wolo tobele korgoh 1</figcaption>
                </div>
                <div class="m-2">
                    <div class="circle-200 bg-cover" style="background-image: url(static/imgs/mont-korogho4.jpg);"></div>
                    <figcaption class="porotour-legende-3">Mont Korogho</figcaption>
                </div>
                <div class="m-2">
                    <div class="circle-200 bg-cover" style="background-image: url(static/imgs/montagne-2.jpg);"></div>
                    <figcaption class="porotour-legende-3">Wolo tobele korgoh 2</figcaption>
                </div>
            </div>
            <div class="mt-1 text-center">
                <a href="pages/galerie.php#relief" class="porotour-btn porotour-btn-green porotour-btn-caret">Plus d'images</a>
            </div>
        </section>
        <!-- Fin section-->

        <!-- Section histoire et culture -->
        <section id="histoire" class="porotour-section">
            <div class="d-flex">
                <div class="section-wp-100 bg-cover position-relative" style="background-image: url(static/imgs/histoire-1.jpg);">
                    <figcaption class="porotour-legende-2">Pelofro Gbon Coulibaly et de son fils Béma Coulibaly, fondateur de Korhogo</figcaption>
                </div>
                <div class="section-wp-100 d-flex align-items-center">
                    <div class="content">
                        <div class="h2 text-arial-black mb-1 color-green">Histoire</div>
                        <div class="section-text">
                            Les Sénoufos, partis du nord-est de la Côte d'Ivoire depuis la ville de Kong, à la recherche de bonnes terres, arrivèrent dans la région où ils résident actuellement. 
                            C'est ainsi que peu à peu d'autres peuples venant par vagues ont commencé à s'installer dans la region.
                            À la fin du XIX siècle, la région sera sous la domination de Samory Touré, fondateur de l'empire du Wassoulou. Mais ce dernier fût éjecté par le colonisateur dont l'administration erriga Korhogo en chef-lieu du nord, qui après l'indépendance de la Côte d'Ivoire deviendra de Région du Poro avec 4 département:
                            <ul>
                                <li>Korhogo</li>
                                <li>Sinématiali</li>
                                <li>Dikodougou</li>
                                <li>M’Bengué</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="section-wp-100">
                    <div class="content">
                        <div class="h2 text-arial-black mb-1 color-green">Culture</div>
                        <div class="section-text">
                            L'artisanat et les rites tradtionelles sont les poumons cultutrels de la régions chaque village ou ville ayant sa spécialité et sa spécificité dont les plus célèbres en termes
                            de tradition sont <strong class="color-green">La danse Boloye et le Poro</strong> et en terme d'artisanat, le tissage.
                        </div>
                    </div>
                    <div>
                        <div class="d-flex flex-grow-box mt-1">
                            <div class="h-300 bg-cover position-relative" style="background-image: url(static/imgs/poro1.jpg);">
                                <figcaption class="porotour-legende-2">Danse boloye</figcaption>
                            </div>
                            <div class="h-300 bg-cover bg-center position-relative" style="background-image: url(static/imgs/culture-2.jpg);">
                                <figcaption class="porotour-legende-2">Machine tissé</figcaption>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-wp-100 bg-cover position-relative" style="background-image: url(static/imgs/culture-1.jpg);">
                    <figcaption class="porotour-legende-2">Musée Pélèforo Gbon Coulibaly de Korhogo</figcaption>
                </div>
            </div>
        </section>
        <!-- Fin section -->

        <!-- Section Villes -->
        <section id="villes" class="flex-grow-box pt-2 pb-2">
            <div class="d-flex align-items-center justify-content-center">
                <div class="circle-400 bg-center bg-cover" style="background-image: url(static/imgs/village-2.jpg);"></div>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <div>
                    <div class="h2 text-arial-black">Les villes de la région</div>
                    <div class="color-green section-text">
                        <ul>
                            <li>Korogho - Danse boloye et Poro</li>
                            <li>Kong - Monument tombal du capitaine MARCHAND</li>
                            <li>Ferkéssédougou - Mosquée du 17ème siècle</li>
                            <li>Boundiali - Danse ngoron</li>
                            <li>Odiénné - Grottes des Lossogo </li>
                        </ul>
                    </div>
                    <div class="mt-1">
                        <a href="pages/galerie.php#villes" class="porotour-btn porotour-btn-green porotour-btn-caret">Découvrir en images</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin section-->

        <!-- Section spécialités culinaires -->
        <section id="nourriture" class="bg-muted pt-2 pb-2">
            <div class="h2 text-center mb-1 text-arial-black color-green">Les spécialités culinaires</div>
            <div class="section-text-center">
                Des mets nourrissant favorisant une santé de fer et 100% naturels.
            </div>
            <div class="d-flex justify-content-center flex-wrap mt-2">
                <div class="m-2">
                    <div class="rect-300 rounded bg-cover bg-center shadow-4" style="background-image: url(static/imgs/kabato.jpg);"></div>
                    <figcaption class="porotour-legende-3 mt-1">Kabato</figcaption>
                </div>
                <div class="m-2">
                    <div class="rect-300 rounded bg-cover bg-center shadow-4" style="background-image: url(static/imgs/sauce-tchonron-1.jpg);"></div>
                    <figcaption class="porotour-legende-3 mt-1">Tô de maïs et sauce Tchonron</figcaption>
                </div>
                <div class="m-2">
                    <div class="rect-300 rounded bg-cover bg-center shadow-4" style="background-image: url(static/imgs/Le_tô_de_mil.jpg);"></div>
                    <figcaption class="porotour-legende-3 mt-1">Tô de mil</figcaption>
                </div>
            </div>
            <div class="mt-1 text-center">
                <a href="pages/galerie.php#nourriture" class="porotour-btn porotour-btn-green porotour-btn-caret">Plus d'images</a>
            </div>
        </section>
        <!-- Fin section-->

        <!-- Section activités -->
        <section id="activites" class="bg-cover bg-center" style="background-image: url(static/imgs/porotour-1.jpg);">
            <div class="description text-arial-black h1">
              <div>
                <div>
                    Le Région du Poro
                </div>
                <div>Ou</div>
                <div>Les Terres de Samory</div>
              </div>
            </div>
            <div class="contenu bg-dark">
                <div class="text-25">
                    <div>
                        Le PoroTour 2021 est une visite touristique de la Région du Poro.
                        Il s'agit de visiter l'ensemble des activités et sites touristiques de la région avec en plus des d'activités tels que des dégustations culinaires.
                    </div>
                    <div class="mt-2">
                        <a href="activites.php#" class="porotour-btn porotour-btn-white text-arial-black porotour-btn-caret">Voir les activités</a>
                    </div>
                </div>
           </div>
        </section>
        <div class="native-cool-back-section-effect" style="top: -20px"></div>
        <!-- Fin section-->

        <?php require "pages/bases/footer.php"; ?>

    </body>
</html>