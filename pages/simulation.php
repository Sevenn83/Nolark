<!doctype html>
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Présentation de la team !</title>
        <meta charset="UTF-8" />
        <meta name="author" content="Prénom Nom" />
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/simulation.css" />

        <link rel="stylesheet" href="../css/team.css" />
    </head>
    <body>
      <header>
        <nav>
          <ul>
            <li><a href="../index.php">Accueil</a></li>
              <?php
              include '../includes/headerPages.php';
               ?>
        </ul>
        </nav>
      </header>
        <br />
        <section id="formulaire">
          <form id="form_contact" name="form_contact" action="#">
              <fieldset id="coordo">
                  <legend>Simulateur</legend>
                  <p><label for="#num_ancien">Années d'ancienneté :</label> <input type="number" name="anciennete" id="anciennete" min="0" max="100" class="simulationForm" /></p>
                  <p><label for="#num_S20">Casques S20 vendus :</label> <input type="number" name="S20" id="S20" min="0" max="999" class="simulationForm" /></p>
                  <p><label for="#num_xspirit">Casques X-Spirit vendus :</label> <input type="number" name="XSpirit" id="XSpirit" min="0" max="500" class="simulationForm" /></p>
                  <p><label for="#num_multi">Casques Multitec vendus :</label> <input type="number" name="Multitec" id="Multitec" min="0" max="500" class="simulationForm" /></p>
                  <p><label for="#result_total">Total :</label> <input type="text" name="result_total" id="result_total" disabled="disabled" />
              <!-- ------------------------Bouton Calculer / effacer----------------------------- -->
              <p id="controles">
                  <input type="reset" name="btn_reset" value="Reset" />
              </p>
          </form>
        </section>
        <div id="vide"></div>
        <footer><p>&copy;2016 Nolark - Créé par <a href="mailto:davvmoli@gmail.com">David Molinari</a><p></footer>
          <script src="../js/simulation.js"></script>


    </body>
</html>
