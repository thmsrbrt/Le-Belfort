<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Le Belfort</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../Styles/HeaderFooter.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../Image/LogoLeBelfort.png">
    <link rel="stylesheet" type="text/css" href="../Styles/StyleArticlesTexte.css">
    <style>
        .pSpecial {
            font-size: 24px;

        }
        #like {
            text-align: center;

        }
        .imagespec {
            align-items: center;
            padding: 10px;
            max-width: 1000px;
            max-height: 100%;
            width: auto;
            display: block;
            margin-left: auto;
            margin-right: auto }
        }
        div>div>section>article>img {
            display: block;
            margin-left: auto;
            margin-right: auto
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
include '../HeaderFooter/Header.php'
?>
<!-- partie contenu -->
<div class="media">
    <div class="media-body article">
        <h2 class="mt-0 mb-1 titreArticle">Nordpresse décide de publier toutes les caricatures du PROPHÈTE</h2>
        <img src="../Image/warning.jpg" alt="Important" class="imagespec">
        <section class="texteArticle">
            <article>
                <p class="pSpecial">Nordpresse n’a pas peur de ses fanatiques intégristes qui voient en leur prophète l’alpha et l’oméga de leur pensée. C’est pour cette raison que nous publions les caricatures de leur prophète.
                    <br>Les voici.
                </p>
                <img src="../Image/1.jpg" alt="">
                <img src="../Image/2.jpg" alt="">
                <img src="../Image/3.jpg" alt="">
                <img src="../Image/4.jpg" alt="">
                <img src="../Image/5.jpg" alt="">
                <img src="../Image/6.jpg" alt="">
                <img src="../Image/7.jpg" alt="">
                <img src="../Image/8.jpg" alt="">
                <img src="../Image/9.jpg" alt="">
                <img src="../Image/10.jpg" alt="">
                <img src="../Image/11.jpg" alt="">
                <img src="../Image/12.jpg" alt="">
                <img src="../Image/13.jpg" alt="">
                <img src="../Image/14.jpg" alt="">
                <img src="../Image/15.jpg" alt="">
                <img src="../Image/16.jpg" alt="">
                <br>
                <p class="pSpecial" id="like">YOU MAY LIKE</p>
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
            echo '<b>Mauvaise réponse ! Cet article est une fake news de type "parodie-satirique".</b> <br>
                <p>Nous vous conseillons de vous informer sur les fake news.</p>
                <p>Pour en savoir plus, cliquez <a href="Explicationfakenews.php">ici</a></p>';
        }
    }
    ?>
</div>
<?php
include '../HeaderFooter/Footer.php'
?>