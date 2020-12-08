<?php
include '../HeaderFooter/headArticles.php'
?>
<!-- partie contenu -->
<div class="media">
    <div class="media-body article">
        <figure class="figure description">
            <img src="../Image/theorieComplot.png" class="imageArticle" alt="#" title="vive Donald">
            <figcaption>Les athlètes militaires Américains aux Jeux militaires mondiaux de Wuhan</figcaption>
        </figure>
        <h2 class="mt-0 mb-1 titreArticle">Coronavirus : l’origine</h2>
        <section>
            <article>
                <strong>Depuis le début de l’épidémie de la Covid-19, l’origine du virus est un mystère que cherche à percer les scientifiques du monde entier. L’explication vient d’être trouvée :
                </strong>
                <h3>Les États-Unis, simple victime du coronavirus ?</h3>
                <p>Est-ce un hasard si l’équipe des militaires américains s’est rendue à Wuhan (premier foyer de l’épidémie) pour participer aux Jeux militaires mondiaux du 22 au 27 octobre 2019, soit deux mois avant les premiers cas de Covid recensés dans cette ville ? Là-bas, les Américains ont eu l’occasion de passer à l’action en lâchant le virus dans un marché local. Il s’est propagé à partir de cet épicentre dans toute la Chine et le monde. Le virus a été fabriqué en amont, dans les laboratoires américains, les mêmes qui possèdent la formule du vaccin contre la Covid-19. En réalité, les militaires, les laboratoires américains et le gouvernement de Trump collaborent tous ensemble au nom de la fierté américaine...
                </p>
                <h3>Pourquoi attaquer la Chine ?</h3>
                <p>
                    La raison principale de cette manigance est la jalousie et la peur des Américains face à la montée en puissance de la Chine. En effet, cela a commencé par la guerre commerciale que se livrent les deux pays depuis ces dernières années. Il est impensable pour les États-Unis de perdre leur place de 1re puissance mondiale . Il serait donc logique et très avantageux pour eux de retourner les pays du monde entier contre leur ennemi la Chine. Non seulement, la crise sanitaire entraîne un ralentissement de croissance dans tous les pays, mais en plus les réparations pour compenser les
                    (Les athlètes pertes économiques et humaines qu’elle a provoquées sont réclamés auprès de la Chine. Comme les États-Unis l’ont planifié, la faute de cette crise est rejetée sur leur ennemi n°1.
                    Sans compter que les Américains peuvent en tirer d’autres avantages. Ils peuvent se débarrasser des personnes âgées sur leur territoire et commercialiser au monde le vaccin déjà trouvé à l’avance et gardé précieusement dans les réserves depuis longtemps.
                </p>
               <strong>D’ailleurs, les accusations récentes de Donald Trump selon lesquelles la Covid-19 aurait été créée dans les laboratoires de Wuhan ne peuvent que mettre encore plus en évidence sa stratégie de voiler la manigance.</strong>
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
            echo '<b>Mauvaise réponse ! Cet article est une fake news de type "théorie du complot".</b><br>
                <p>Nous vous conseillons de vous informer sur les fake news.</p>
                <p>Pour en savoir plus, cliquez <a href="Explicationfakenews.php">ici</a></p>';
        }
    }
    ?>
</div>
<?php
include '../HeaderFooter/Footer.php'
?>