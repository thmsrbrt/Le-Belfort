<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Le Belfort</title>
    <link href="../Styles/HeaderFooter.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../Image/LogoLeBelfort.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../Styles/explicationfakenews.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<?php
include '../HeaderFooter/Header.php'
?>
<main>
    <h1 class="text-center">Les types de fake news</h1>
                          <!-- pseudoscience -->
    <section class="container">
        <h2 class="btn btn-info container" data-toggle="collapse" data-target="#pseudoscience" aria-expanded="false" aria-controls="pseudoscience">
        <i class="fa fa-flask"></i> La pseudoscience
        </h2>
        <div class="collapse" id="pseudoscience">
            <div class="card card-body container-fluid">
                <ul class="row">
                    <li class="col-md-2"> <strong>But : </strong><br>Donner des <br> illusions</li>
                    <li class="col mx-4 text-justify"><strong>Définition : </strong><br> Elle s’appuie sur un raisonnement qui paraît scientifique mais est en réalité invalide, afin de nourrir une croyance ou promouvoir un produit. Cette fausse science donne des faux espoirs aux lecteurs. </li>
                    <li class="col mx-4 text-justify"><strong>Indices pour la repérer : </strong><br>
                        <ul>
                            <li> ne précise pas de noms d’organismes scientifiques ou d’experts </li>
                            <li>exagère les vertus ou les vices d’un produit </li>
                            <li> contre-dit les experts </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- propagande -->
     <section class="container">
        <h2 class="btn btn-info container"  data-toggle="collapse" data-target="#propagande" aria-expanded="false" aria-controls="propagande">
        <i class="fa fa-volume-up"></i> La propagande
        </h2>
        <div class="collapse" id="propagande">
            <div class="card card-body container-fluid">
                <ul class="row">
                    <li class="col-md-2"> <strong>But : </strong><br> Endoctriner</li>
                    <li class="col mx-4 text-justify"><strong>Définition : </strong><br> Le discours de propagande essaie de contrôler la façon de penser et les comportements en évitant l’intervention de la raison. Il est produit par une autorité ou un organisme (gouvernement, institution religieuse, parti politique, ...).</li>
                    <li class="col mx-4 text-justify"><strong>Indices pour la repérer :</strong> <br>
                        <ul>
                            <li> fait appel aux émotions (peur, colère, espoir, …) </li>
                            <li> répète les mêmes idées</li>
                            <li> rejette la faute sur un ennemi désigné </li>
                            <li> utilise des termes valorisants (justice, honneur, meilleur, …)</li>
                        </ul>
                    </li>    
                </ul>
            </div>
        </div>
    </section>
                    <!-- théorie conspirationniste -->
     <section class="container">
        <h2 class="btn btn-info container" data-toggle="collapse" data-target="#complot" aria-expanded="false" aria-controls="complot">
        <i class="fa fa-eye"></i> La théorie conspirationniste
        </h2>
        <div class="collapse" id="complot">
            <div class="card card-body">
                <ul class="row">
                    <li class="col-md-2"> <strong>But : </strong><br> Déstabiliser</li>
                    <li class="col mx-4 text-justify"><strong>Définition : </strong><br> Elle affirme que les événements ont été planifiés par un groupe secret de personnes ou une institution qui ne voudrait servir que leur propre intérêt. La théorie du complot sert à semer la confiance et la méfiance pour mieux déstabiliser.</li>
                    <li class="col mx-4 text-justify"><strong>Indices pour la repérer :</strong> <br>
                        <ul>
                            <li> prétend révéler une vérité</li>
                            <li> explique par la science, l’histoire </li>
                            <li> pointe des détails "troublants"</li>
                            <li> refuse le hasard </li>
                        </ul>
                    </li>    
                </ul>
            </div>
        </div>
    </section>
                             <!-- rumeur -->
     <section class="container">
        <h2 class="btn btn-info container" data-toggle="collapse" data-target="#rumeur" aria-expanded="false" aria-controls="rumeur">
        <i class="fa fa-comments"></i> La rumeur
        </h2>
        <div class="collapse" id="rumeur">
            <div class="card card-body">
                <ul class="row">
                    <li class="col-md-2"> <strong>But : </strong><br> Dénigrer</li>
                    <li class="col mx-4 text-justify"><strong>Définition : </strong><br> Il s’agit d’une information sur quelqu’un, un événement ou un organisme et partagée très rapidement sans être vérifiée. Elle peut atteindre à la réputation ou à l’honneur de la victime.</li>
                    <li class="col mx-4 text-justify"><strong>Indices pour la repérer :</strong> <br>
                        <ul>
                            <li> ne mentionne pas de source fiable ou de preuve ou bien elles sont invérifiables</li>
                            <li> raconte une histoire invraisemblable</li>
                        </ul>
                    </li>    
                </ul>
            </div>
        </div>
    </section>
                        <!-- article partisan -->
     <section class="container">
        <h2 class="btn btn-info container" data-toggle="collapse" data-target="#articlepartisan" aria-expanded="false" aria-controls="articlepartisan">
        <i class="fa fa-flag"></i> L'article partisan
        </h2>
        <div class="collapse" id="articlepartisan">
            <div class="card card-body">
                <ul class="row">
                    <li class="col-md-2"> <strong>But : </strong><br> Imposer une idée</li>
                    <li class="col mx-4 text-justify"><strong>Définition : </strong><br>Il essaie d’influencer l’opinion du lecteur. L'auteur prend parti, interprète les faits à sa manière et attaque d’autres opinions en prétendant être objectif et neutre.</li>
                    <li class="col mx-4 text-justify"><strong> Indices pour le repérer :</strong> <br>
                        <ul>
                            <li> utilise un registre passionné et émotionnel</li>
                            <li> attaque d'autres opinions </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
                        <!-- hoax -->
     <section class="container">
        <h2 class="btn btn-info container" data-toggle="collapse" data-target="#hoax" aria-expanded="false" aria-controls="hoax">
        <i class="fa fa-user-secret"></i> Le hoax
        </h2>
        <div class="collapse" id="hoax">
            <div class="card card-body">
                <ul class="row">
                    <li class="col-md-2"> <strong>But : </strong><br> Amuser ou Escroquer</li>
                    <li class="col mx-4 text-justify"><strong>Définition : </strong><br> Il s’agit d’un canular sur internet. C’est une histoire inventée ou déformée qui se propage rapidement en s’appuyant sur la crédulité et les émotions du lecteur. Il est surtout destiné à amuser les internautes.</li>
                    <li class="col mx-4 text-justify"><strong>Indices pour le repérer :</strong> <br>
                        <ul>
                            <li> appelle aux émotions</li>
                            <li> exagère</li>
                            <li> appelle à être partagée</li>
                        </ul>
                    </li>    
                </ul>
            </div>
        </div>
    </section>
                        <!-- piège à clics -->
     <section class="container">
        <h2 class="btn btn-info container" data-toggle="collapse" data-target="#piegeaclic" aria-expanded="false" aria-controls="piegeaclic">
        <i class="fa fa-money"></i> Le piège à clics
        </h2>
        <div class="collapse" id="piegeaclic">
            <div class="card card-body">
               <ul class="row">
                    <li class="col-md-2"> <strong>But : </strong><br>Gagner de l'argent</li>
                    <li class="col mx-4 text-justify"><strong>Définition : </strong><br> Aussi appelé "click-bait", il attire l’attention visuellement. Son contenu n’est pas à la hauteur des attentes et est superficiel ou n’apporte pas de réponses. Le but est de générer du trafic et des revenus publicitaires.</li>
                    <li class="col mx-4 text-justify"><strong>Indices pour le repérer :</strong> <br>
                        <ul>
                            <li> utilise des couleurs attractives</li>
                            <li> utilise de titres alléchants</li>
                            <li> emploie des mots-clés en vogue</li>
                        </ul>
                    </li>    
                </ul>
            </div>
        </div>
    </section>
                    <!-- parodie satirique -->
     <section class="container">
        <h2 class="btn btn-info container" data-toggle="collapse" data-target="#parodiesatirique" aria-expanded="false" aria-controls="parodiesatirique">
        <i class="fa fa-bell"></i> La parodie satirique
        </h2>
        <div class="collapse" id="parodiesatirique">
            <div class="card card-body">
             <ul class="row">
                    <li class="col-md-2"> <strong>But : </strong><br> Faire réagir</li>
                    <li class="col mx-4 text-justify"><strong>Définition : </strong><br> Afin de critiquer, se moquer et faire réagir les lecteurs, il attaque par la provocation et le sarcasme. Il est écrit sur un ton humoristique pour rendre le sujet plus léger, plus agréable à lire. Il peut aussi comporter de propos exagérés et absurdes. Le site peut être une contre-façon d'un site d'actualité célèbre.</li>
                    <li class="col mx-4 text-justify"><strong>Indices pour la repérer :</strong> <br>
                        <ul>
                            <li> emploie un ton décalé et humoristique</li>
                            <li> attaque par la provocation </li>
                            <li> amplifie voire déforme </li>
                            <li> son site ressemble beaucoup à un site d’actualité et porte un nom très similaire</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php
include '../HeaderFooter/Footer.php'
?>

