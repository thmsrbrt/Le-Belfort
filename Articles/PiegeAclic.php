<?php
include '../HeaderFooter/headArticles.php'
?>
<!-- partie contenu -->
<div class="media article">
    <div class="media-body ">
        <h2 class="mt-0 mb-1 titreArticle">Donald Trump qualifie Emmanuel Macron de "Premier ministre" lors d'un meeting</h2>
        <section class="texteArticle">
            <!-- texte plus gros a spécifier -->
            <p>Avec le confinement d’hiver/printemps, les manifestations et émeutes contre le racisme et les violences policières,
                ont eu une année 2020 bien chargée. Comme le second confinement a commencé depuis le 29 octobre, un gendarme de Paris fait part de son avis sur le civisme des citoyens français pendant l’actuel confinement.
            </p>
            <p><em>« Depuis le début le confinement, nous avons remarqué que beaucoup d’habitants des quartiers sensibles se réunissaient entre familles et entre amis, encore plus que pendant le premier confinement.
                </em></p><p>
                    La semaine dernière nous avons reçu des appels de personnes signalant une fête trop bruyante organisée chez leurs voisins dans un immeuble du XVIIe arrondissement. Nous somme allés leur rendre visite le surlendemain pour donner un avertissement, il s’agissait d’une famille congolaise arrivée en France l’année dernière qui fêtait l’anniversaire de leur fille adolescente dans leur appartement. Ils étaient une quinzaine de personnes agglutinées les unes les autres, sous un toit.
                </p><p><em>
                    C’est très irresponsable. C’est déjà le deuxième confinement, et des cas comme ça existent toujours. En général, quand on les questionne ils répondent que ça n’est arrivé que deux ou trois fois et qu’ils ne font ça qu’entre membres de la famille ou amis proches. Je tiens à rappeler que cette irresponsabilité peut non seulement nuire aux personnes que vous connaissez mais aussi à celles que vous ne connaissez pas.
                    C’est le devoir de tous de rester confinés au mieux possible. »
                </em></p><p><em>
                    À ne pas oublier que le non-respect du confinement peut vous valoir une amende de 135€ et une probabilité d’attraper la Covid-19.
                </em></p>
        </section>
    </div>
    <figure class="figure description">
        <img src="../Image/Gendarme.png" class="imageArticle" alt="#" title="vive Donald">
        <figcaption>Un gendarme qualifie la famille d’« irresponsable».<figcaption>
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
            echo '<b>Mauvaise réponse ! cet article est une fake news de type "piège à clics"</b> <br>
                <p>Nous vous conseillons de vous informer sur les fake news.</p>
                <p>Pour en savoir plus, cliquez <a href="Explicationfakenews.php">ici</a></p>';
        }
    }
    ?>
</div>
<?php
include '../HeaderFooter/Footer.php'
?>
