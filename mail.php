<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
    $retour = mail('flaviencoulmeau@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From : webmaster@monsite.fr');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>