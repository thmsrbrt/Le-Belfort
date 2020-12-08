<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page de contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../Styles/HeaderFooter.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/Image/LogoLeBelfort.png">
    <link rel="stylesheet" href="../Styles/StyleContacts.css">
</head>
<body>
<?php
include '../HeaderFooter/Header.php'
?>
<form name="contact" method="post" class="article">
    <h2 class="titreArticle">Remplisser ce formulaire pour prendre contacts :</h2>
    <fieldset class="formulaire">
        <input class="case" type="text" name="nom" placeholder="Nom" size="30" maxlength="50"
               value="<?php if (isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']);?>">

        <input class="case" type="text" name="prenom" placeholder="Prénom" maxlength="50" size="30"
               value="<?php if (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']);?>"><br>

        <input class="case" type="email" name="email" placeholder="E-mail" maxlength="80" size="30"
               value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">

        <input class="case" type="number" name="telephone" placeholder="Votre numéro" maxlength="50" size="30"
               value="<?php if (isset($_POST['telephone'])) echo htmlspecialchars($_POST['telephone']);?>">

        <input class="case" type="text" name='objet' maxlength="100" size="30" placeholder="Objet"
               value="<?php if (isset($_POST['objet'])) echo htmlspecialchars($_POST['objet']);?>">
        <textarea class="case" style=overflow:scroll;resize:both name="message" placeholder="Votre message" cols="90"
                  rows="5"><?php if (isset($_POST['message'])) echo htmlspecialchars($_POST['message']);?></textarea><br>
        <input type="submit" value="Envoyer" class="btn btn-success" id="valider">
    </fieldset>
</form>
<?php
if(isset($_POST['email'])) {
    $email_to = "LeBelfort@gmail.com";
    $email_subject = $_POST['objet'];
    function died($error)
    {
        echo "Nous sommes désolés, mais des erreurs ont été détectées dans le" .
            " formulaire que vous avez envoyé. ";
        echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
        die();
    }

    if (!isset($_POST['nom']) || !isset($_POST['prenom']) ||
        !isset($_POST['email']) || !isset($_POST['telephone']) ||
        !isset($_POST['message'])) {
        die('Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' . ' problème.');
    }
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $email)) {
        $error_message .= 'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
    }
    $string_exp = "/^[A-Za-z0-9 .'-]+$/";
    if(!preg_match($string_exp,$nom)) {
        $error_message .= 'Le nom que vous avez entré ne semble pas être valide.<br />';
    }
    if(!preg_match($string_exp,$prenom)) {
        $error_message .= 'Le prénom que vous avez entré ne semble pas être valide.<br />';
    }
    if(strlen($error_message) > 0) {
        died($error_message);
    }
    $email_message = "Détail.\n\n";
    $email_message .= "Nom: ".$nom."\n";
    $email_message .= "Prenom: ".$prenom."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Telephone: ".$telephone."\n";
    $email_message .= "Message: ".$message."\n";

    $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);

?>
    <p class="reussite">Merci de nous avoir contacter. Nous vous contacterons très bientôt.</p>
<?php
}
?>
<?php
include '../HeaderFooter/Footer.php'
?>
