<?php

    class Personne{

        private $nom;
        private $prenoms;
        private $date_naissance;
        private $sexe;
        private $contact;
        private $email;

        public function __construct($nom,$prenoms,$sexe,$date_naissance,$contact,$email){
            $this->nom = $nom;
            $this->prenoms = $prenoms;
            $this->sexe = $sexe;
            $this->date_naissance = $date_naissance;
            $this->contact = $contact;
            $this->email = $email;
        }

        public function NomComplet(){
            return $this->nom." ".$this->prenoms;
        }
    }

    if($_POST){
        $nom = $_POST['nom'];
        $prenoms = $_POST['prenoms'];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $sexe = $_POST['sexe'];
        $date_naissance = $_POST['date_naissance'];
    
        $personne = new Personne($nom,$prenoms,$sexe,$date_naissance,$contact,$email);

    }

?>
<html>
    <head>
        <title>PoroTour - S'inscrire</title>
        <meta charset="utf-8">
        <?php require "pages/bases/head.php"; ?>
    </head>
    <body class="bg-muted bg-cover bg-center" style="background-image: url(static/imgs/mont-korogho2.jpg)">
        <!-- Nav -->
        <?php require "pages/bases/nav.php"; ?>
        <!-- Fin Nav -->

        <div class="banniere-margin-top"></div>

        <section class="mt-5 pt-3 mb-5">
            <div class="card-panel  shadow-4">
                <div class="h1 text-arial-black color-green">Inscription</div>

                <?php if(isset($personne)): ?>
                <div class="text-white color-white bg-green p-1 mb-3 bg-green text-bold">Inscription réussie, Rendez-vous à notre siège pour les formalités !</div>
                <?php endif ?>

                <form action="" method="POST">
                    <div>
                        <label for="nom">Nom: </label>
                        <input id="nom" type="text" name="nom" required>
                    </div>
                    <div>
                        <label for="prenoms">Prénoms:</label>
                        <input id="prenoms" type="text" name="prenoms" required>
                    </div>
                    <div>
                        <label for="sexe">Sexe:</label>
                        <input id="sexe" type="radio" name="sexe" value="m"> Masculin
                        <input type="radio" name="sexe" value="f"> Féminin
                    </div>
                    <div>
                        <label for="date_naissance">Date de naissance:</label>
                        <input id="date_naissance" type="date" name="date_naissance" required>
                    </div>
                    <div>
                        <label for="contact">Contact:</label>
                        <input id="contact" type="text" name="contact" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input id="email" type="email" name="email" required>
                    </div>
                    <div>
                        <button class="porotour-btn porotour-btn-green" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>

        <?php require "pages/bases/footer.php"; ?>

    </body>
</html>