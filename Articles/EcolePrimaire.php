<?php
include '../HeaderFooter/headArticles.php'
?>
<!-- partie contenu -->
<div class="media">
    <div class="media-body article">
        <h2 class="mt-0 mb-1 titreArticle">Une école primaire interdit le lancer d'élèves à Avignon</h2>
        <section class="texteArticle">
            <article>
                <p>L'établissement a interdit le lancer d'élèves après que certains parents ont utilisé cette technique pour pallier leur retard, d'après
                    <em>« La Provence »</em>.
                </p>
                <img src="../Image/Ecole.jpg" alt="" class="imageArticle">
                <em>« Interdiction de lancer les enfants au dessus du portail à Avignon»</em>
                <p>L'école primaire de la Trillade, avenue des Sources à Avignon, a dû prendre une mesure difficilement croyable : interdire le lancer d'élèves. Depuis mi-septembre, l'établissement a affiché des dessins informatifs à ce sujet à côté de son portail,
                    <a href="https://www.laprovence.com/actu/insolite/6174569/avignon-le-lancer-deleves-interdit-a-la-trillade.html#xtor=Nonli">raconte le journal La Provence</a>
                    . On peut y lire :
                        <em>« Quand je suis en retard, je reviens à 10 heures, ou 15 heures »</em>
                    ainsi que : <em>« Je ne lance pas mes enfants par-dessus le portail ! »</em>
                </p><p>
                    <em>« Des parents qui arrivaient après la sonnerie jetaient littéralement leurs enfants »</em>
                    , explique Sanaa Meziane, la directrice de l'école, interrogée par <a href="https://www.lepoint.fr/tags/la-provence">La Provence</a>
                    . Elle se veut cependant rassurante : aucun enfant n'a été blessé par l'initiative imprudente, quoiqu'originale, de ses parents.
                </p>
                <blockquote class="twitter-tweet">
                    <p lang="fr" dir="ltr">Certains parents &quot;jetaient&quot; leurs enfants au-dessus du portail quand ils arrivaient en retard...
                        <a href="https://twitter.com/hashtag/Insolite?src=hash&amp;ref_src=twsrc%5Etfw">#Insolite</a>
                        <br> <a href="https://t.co/QQ9y3TkOMu">https://t.co/QQ9y3TkOMu</a>
                    </p>&mdash; La Provence (@laprovence)
                    <a href="https://twitter.com/laprovence/status/1325780186541993984?ref_src=twsrc%5Etfw">November 9, 2020</a>
                </blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <h3>Des affiches pour prévenir la récidive</h3>
                <p>
                    <em>« Ce n'est pas arrivé tant de fois que ça, mais pour le peu que c'est arrivé, on a préféré prendre les devants »
                    </em>, ajoute la directrice dans les colonnes du quotidien régional. Elle a d'ailleurs laissé les affiches devant l'école afin qu'elles agissent
                    <em>« comme une forme de rappel »</em>.
                </p>
                <p>Modifié le 10/11/2020 à 08:50 - Publié le 09/11/2020 à 17:05 | Le Point.fr
                </p>
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
