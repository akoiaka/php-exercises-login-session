<?php
// page2.php

session_start();

echo 'Bienvenue sur la page numéro 2<br />';

echo $_SESSION['couleur']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);

// Vous pourriez utiliser la constante SID ici, tout comme dans la page page1.php
echo '<br /><a href="index.php">page 1</a>';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="./Semantic UI/semantic.js"></script>
    <title>Journal</title>
</head>

<body>

<h2>Acces à l'espace sécurisé</h2>

<?php
include('connection.php');
//include('image.php');
include('recupdonnees.php');
include('restit.php');
?>
<form action="recupdonnees.php" method="post" class="ui form">
<input type="text" placeholder="Votre nom" name="identifiant">
<input type="password" name="pass">
    <button type="submit" ui secondary button>ENVOYER</button>
</form>

<script type="text/javascript" src="script.js"></script>

</body>
</html>
