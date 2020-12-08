<?php
include '../HeaderFooter/headArticles.php'
?>
<!-- partie contenu -->
<div class="media article">
    <div class="media-body ">
        <h2 class="mt-0 mb-1 titreArticle">Donald Trump qualifie Emmanuel Macron de "Premier ministre" lors d'un meeting</h2>
        <section class="texteArticle">
            <!-- texte plus gros a spécifier -->
            <p>"J'aime beaucoup le Premier ministre Macron mais je lui ai demandé comment l'accord [de Paris] avançait, ils n'y arrivent pas vraiment", a déclaré le président et candidat républicain.
            </p>
            <p>Une étude scientifique réalisé sur les dangers par un institut privé scientifique en 2019 et 2020 ont récemment permis de conclure que la 5G ne présente aucun risque de santé sur le corps humain. Cette étude a été menée en partenariat avec l’opérateur téléphonique Orange.
            </p><br>
            <p>C'est une gaffe de taille. Le président américain
                <a href="https://www.francetvinfo.fr/monde/usa/presidentielle/donald-trump/">Donald Trump</a>
                , qui se moque régulièrement des bourdes supposées de son rival
                <a href="https://www.francetvinfo.fr/monde/usa/joe-biden/">Joe Biden</a>
                , s'est à son tour illustré samedi 17 octobre par une erreur, en rétrogradant son homologue français
                <a href="https://www.francetvinfo.fr/politique/emmanuel-macron/">Emmanuel Macron</a> au rang de
                <em>"Premier ministre"</em>.
            </p>
            <p>Lors d'un meeting de campagne dans l'Etat du Michigan, le président américain, en campagne pour sa réélection, a voulu souligner les réalisations menées durant son mandat. Après avoir évoqué l'ancien accord de libre-échange avec le Canada et le Mexique, renégocié depuis par ses soins, Donald Trump a donné son avis sur l'accord de Paris pour le climat, dont les Etats-Unis se sont retirés après son élection en 2016.
            </p>
            <p><em>"Vous savez ce que j'ai également arrêté ? L'accord sur l'environnement de Paris. J'aime beaucoup le Premier ministre Macron mais je lui ai demandé comment l'accord avançait, ils n'y arrivent pas vraiment"
                </em>, a déclaré le président américain. Lui et son homologue français avaient noué une relation proche peu après l'élection d'Emmanuel Macron, avant que leurs relations ne se détériorent sensiblement.
            </p>
            <p>Publié le 18/10/2020 10:39<br>Mis à jour le 18/10/2020 10:46
            </p>
        </section>
    </div>
    <figure class="figure description">
        <img src="../Image/Trump.jpg" class="imageArticle" alt="#" title="vive Donald">
        <figcaption>Donald Trump pendant un meeting de campagne à Muskegon, dans le Michigan (Etats-Unis), le 17 octobre 2020.  (REY DEL RIO / GETTY IMAGES NORTH AMERICA / AFP)
        </figcaption>
    </figure>
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
            echo '<b>Mauvaise réponse, cet article est vrai !</b> <br>
                <p>Nous vous conseillons de vous informer sur les fake news.</p>
                <p>Pour en savoir plus, cliquez <a href="Explicationfakenews.php">ici</a></p>';
        }
    }
    ?>
</div>
<?php
include '../HeaderFooter/Footer.php'
?>
