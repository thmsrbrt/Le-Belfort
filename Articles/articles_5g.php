<?php
include '../HeaderFooter/headArticles.php'
?>
<!-- partie contenu -->
<div class="media">
    <div class="media-body article">
        <h2 class="mt-0 mb-1 titreArticle">Effets de la 5G sur notre santé</h2>
            <section class="texteArticle">
                    <strong>Une étude scientifique réalisée sur les dangers par un institut privé scientifique en 2019 et 2020 a récemment permis de conclure que la 5G ne présente aucun risque de santé sur le corps humain. Cette étude a été menée en partenariat avec l’opérateur téléphonique Orange.
                    </strong>
                <article>
                    <h3>Les ondes de la 5G ne nuisent pas</h3>
                    <p>L’étude est composée de trois étapes, la recherche, le test sur une population échantillon et l’analyse des effets biologiques.
                        <em>« Avec l’aide des antennes et capteurs installés par Orange, la première étape a permis de trouver les caractéristiques de la 5G, notamment son taux d’émission d’ondes, essentiel à l’étude de ses conséquences sur la santé »
                        </em> explique le docteur Florent Bouvier de l’institut. Ensuite, les données de santé humaine ont été collectés chez une population échantillon de 100 personnes issues d’une ville en région parisienne.
                        <em>« Nous avons analysé et mesuré la potentielle dangerosité de la 5G sur le corps humain. Les rayonnements électromagnétiques provoquent un faible échauffement des tissus, ainsi qu’aucun impact négatif sur le cerveau »
                        </em>.
                    </p><p>
                        L’institut en a conclu que, contrairement à ce que certains scientifiques prétendent, l’exposition à la 5G n’est pas cancérigène et néfaste pour l’humain.
                    </p>
                    <h3>L’étude a également mené à une autre conclusion...</h3>
                    <p>En analysant les résultats de l’impact de la 5G sur le cerveau, une comparaison sur les conséquences sur la santé avec la 4G a pu être dégagée. Leurs effets biologiques sont similaires. Cependant, l’institut a également découvert lors des tests qu’il avait un impact psychologique positif sur les volontaires.</p>
                    <p>En effet, le cerveau secrétait des dopamines (hormones du bonheur) liés non seulement au plaisir du divertissement, mais aussi à la satisfaction de l’extrême rapidité des
                        utilisations de ce nouveau réseau. Par exemple, les téléchargements des vidéos, l’envoi d’e-mails chargés, la navigation internet à une vitesse record ont bouleversé leur quotidien. Les volontaires étaient donc plus heureux pendant la période de l’expérience grâce à la 5G, 50 fois plus rapide que son prédécesseur la 4G.
                        </p>
                    <strong>Ces résultats scientifiques pourront rassurer les utilisateurs et les scientifiques français et internationaux qui auraient été sceptiques au déploiement de la 5G dans leur pays. Quant au lancement en France, il est pour bientôt. D’ailleurs, il est d'ores et déjà possible de choisir un forfait compatible 5G sur le site internet d’Orange.
                    </strong>
                </article>
            </section>
    <figure class="figure description">
        <img src="../Image/5g2.png" class="imageArticle" alt="#" title="vive Donald">
        <figcaption>La 5G est-elle plus dangereuse que la 4G ?
        </figcaption>
    </figure>
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
            echo '<b>Mauvaise réponse ! Cet article est une fake news de type "pseudoscience".</b> <br>
                <p>Nous vous conseillons de vous informer sur les fake news.<br>
                Pour en savoir plus, cliquez <a href="Explicationfakenews.php">ici</a></p>';
        }
    }
    ?>
</div>
<!-------->
<?php
include '../HeaderFooter/Footer.php'
?>
