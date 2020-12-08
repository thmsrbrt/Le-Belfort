<?php
include '../HeaderFooter/headArticles.php'
?>
<!-- partie contenu -->
<div class="media">
    <div class="media-body article">
        <h2 class="mt-0 mb-1 titreArticle">KIM JONG-UN PLEURE PENDANT SON DISCOURS LORS D’UN DÉFILÉ MILITAIRE</h2>
            <section class="texteArticle">
                <img src="../Image/KIM%20JONG.jpg" class="ml-3 imageArticle" alt="#">
                <p>Kim Jong Un a prononcé un discours lors d'un défilé militaire à l'occasion du 75
                    <sup>ème</sup> anniversaire de son parti. [KCNA VIA KNS / AFP]
                </p>
                <!-- texte plus grand que le reste -->
                <p>À l’occasion des 75 ans du Parti du Travail, qui dirige le pays, la Corée du Nord a organisé un gigantesque défilé militaire à Pyongyang. Lors de son discours, Kim Jong Un n’a pu s’empêcher de verser quelques larmes, signe d’une «très grande pression sur ses épaules», selon des experts.
                </p>
                <p>Pendant une grande partie de son discours,
                    <a href="https://www.cnews.fr/kim-jong-un">Kim Jong Un
                    </a> a manifesté sa gratitude envers le peuple nord-coréen, et s’est excusé de ne pas avoir réussi à améliorer le quotidien de ses habitants malgré leur soutien indéfectible.
                    <em>«Notre peuple a placé toute sa confiance en moi, aussi haute que le ciel et aussi profonde que la mer, mais je n’ai pas toujours été à la hauteur. Je suis vraiment désolé pour ça»
                    </em>, a-t-il déclaré, rapporte le
                    <a href="http://m.koreatimes.co.kr/pages/article.asp?newsIdx=297398">Korea Times
                    </a>. Il a par ailleurs retiré ses lunettes pour essuyer ses larmes au milieu du discours.
                </p>
                <p>Une manière de faire assez inhabituelle pour le dirigeant nord-coréen.
                    <em>«Dans ce message, on peut comprendre que Kim ressent une grande pression. Pendant son discours, il a utilisé les termes "graves défis", "inmombrables épreuves" et "catastrophes sans précédent dans l’histoire". Cela montre ses difficultés à gouverner, et il se sent stressé par la crainte que son peuple puisse être en colère ou influencé par ces difficultés»
                    </em>, analyse Hong Min, directeur du département de la Corée du Nord à l’Institut Coréen pour l’unification nationale dans le journal sud-coréen. Une manière d’attirer aussi la sympathie de son peuple, selon les experts.
                </p>
                <p>Le dirigeant s’est tout de même félicité de compter aucun cas de coronavirus dans le pays, devant une foule non-masquée, et a annoncé donner tout son soutien aux personnes souffrant du Covid-19 à travers le monde.
                </p>
                <p>Ce défilé était aussi l’occasion de dévoiler un nouveau
                    <a href="https://www.cnews.fr/missile">missile
                    </a> balistique intercontinental. Il a prévu que toute la force nucléaire serait mobilisée en cas de menace, mais n’a pas attaqué directement les États-Unis, avec lesquels
                    <a href="https://www.cnews.fr/monde/2020-03-31/la-coree-du-nord-menace-dinterrompre-le-dialogue-avec-les-etats-unis-941972">les négociations sur le nucléaire sont toujours dans l’impasse</a>.
                </p>
                <p>Par CNEWS -  Mis à jour le 12/10/2020 à 16:04<br>Publié le 12/10/2020 à 16:03
                </p>
            </section>
    </div>
</div>
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

