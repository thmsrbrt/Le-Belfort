<?php
include '../HeaderFooter/headArticles.php'
?>
<!-- partie contenu -->
<div class="media article">
    <div class="media-body">
        <h2 class="mt-0 mb-1 titreArticle">ALERTE ENLÈVEMENT JULIE À VALDOIE</h2>
        
        <div class="texteArticle">
            <strong>Julie une fillette de 8 ans a été enlevée hier matin vers 19h devant chez elle à Valdoie, dans le Territoire de Belfort (90) par deux hommes cagoulés et habillés en noirs.
                <br>Elle fait 1m26, a des cheveux châtains et courts et des yeux bleus, porte un blouson bleu ciel, jean, baskets blanches et bonnet vert. Les ravisseurs sont montés avec elle à bord d’une fourgonnette blanche Peugeot.
                <br>Si vous localisez la fille ou les suspects, contactez le numéro d’alerte à l’enlèvement 0 825 100 520.
            </strong>
            <p>
                <em>« Nous nous en voulons de ne pas avoir accordé plus de temps à notre fille à cause du travail. Nous devons absolument la retrouver pour passer du temps de qualité avec elle et lui montrer que nous pouvons être de meilleurs parents.»
                </em>, a dit la mère de la petite fille avec une voix tremblante, avant d’éclater en sanglot. L’anniversaire de la fillette approchant, le père comptait lui offrir la maison de poupée qu’elle désirait depuis deux ans :
                <em>« Elle aura 9 ans dans un mois, j’ai peur de ne pas pouvoir le fêter tous ensemble et lui remettre son cadeau. »
                </em>.
            </p>
            <p>Pour augmenter les chances de trouver leur précieuse fille, les parents souhaiteraient faire appel à un détective, mais n’en pas les moyens. Leurs proches ont alors monté une cagnotte solidaire pour les aider.
            </p>
            <!-- mettre ce paragraphe en gras non strong -->
            <p>
                <b>Partagez cette information aux personnes sur les réseaux sociaux et aux proches. Avertissez-les de cet enlèvement et envoyez le numéro et le lien de la cagnotte en signe de solidarité à la famille.</b>
            </p>
            <p>N° d’alerte à l’enlèvement : 0 825 100 520</p>
            <p>Site de la cagnotte :
                <a href="https://www.participons-soyons-solidaire/986znd23Od3-pour-julie/" >www.participons-soyons-solidaire/986znd23Od3-pour-julie/</a>
            </p>
        </div>
    </div>
    <img src="../Image/AlerteEnlevement.jpg" class="ml-3 imageArticle" alt="#">
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
