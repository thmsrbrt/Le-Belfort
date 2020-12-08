<?php
include '../HeaderFooter/headArticles.php'
?>
<!-- partie contenu -->
<div class="media">
    <div class="media-body article">
        <img src="../Image/Lucie-Muljar-et-ses-enfants.jpg" class="ml-3 imageArticle" alt="#">
        <h2 class="mt-0 mb-1 titreArticle">Le Nobel d’économie décerné à une mère célibataire avec trois enfants ayant réussi à boucler le mois de septembre</h2>
        <section>
            <article>
                <strong>Le prix de la Banque royale de Suède en sciences économiques en mémoire d’Alfred Nobel, ou prix Nobel d’économie, a été attribué lundi à la Française Martine Muljar, 47 ans,
                    <em>« pour sa détermination et sa gestion exemplaire des petits budgets.</em>
                </strong>
                <p>
                    <em>« La lauréate a posé les bases d’une nouvelle forme d’économie en période de crise et de grande précarité. Celle-ci repose en partie sur des restrictions budgétaires drastiques en matière de loisir ou de confort global. C’est cet aspect pragmatique et pratique, loin des grandes théories qui a été récompensé »
                    </em>
                    ,souligne l’Académie royale des sciences de Suède.
                </p>
                <p>Le prix d’une valeur de huit millions de couronnes (910 000 euros environ), décerné chaque année depuis 1969, clôt la saison des Nobel. Une enveloppe qui devrait soulager quelque peu cette mère de famille aux abois dont le travail est légitimement reconnu aujourd’hui.
                </p>
                <br><p>Publié le 14/10/2013 par <a href="http://www.legorafi.fr/author/la_redaction/">La Rédaction</a></p>
            </article>
        </section>
    </div>

</div>
<!-- partie question -->
<div class="article questionnaire">
    <?php include "../AutresPages/questionnaire.php"; ?>
    <?php
    if (isset($_POST['reponse'])) {
        $reponse = htmlentities($_POST['reponse']);

        if ($reponse == 'True') {
            echo '<b>Bravo, Bonne réponse !</b><br><br>
                <p>Pour en savoir plus, cliquez <a href="Explicationfakenews.php">ici</a></p>';
        } else {
            echo '<b>Mauvaise réponse ! Cet article est une fake news de type "hoax".</b> <br>
                <p>Nous vous conseillons de vous informer sur les fake news.</p>
                <p>Pour en savoir plus, cliquez <a href="Explicationfakenews.php">ici</a></p>';
        }
    }
    ?>
</div>
<?php
include '../HeaderFooter/Footer.php'
?>
