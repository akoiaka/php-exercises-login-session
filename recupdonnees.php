<?php
session_start();

$nom=$_POST['identifiant'];
$code=sha1($_POST['pass']);
$date=date("Y-m-d H:i:s");
//var_dump($saison, $image, $commentaire);

include('connection.php');
if(isset($_POST['identifiant'],$_POST['pass']))
{
//   securité
// $nom = mysql_real_escape_string(htmlspecialchars(trim($POST['nom'])));
//    $nom = mysql_real_escape_string(htmlspecialchars(trim($POST['message'])));
    $req = $bdd->prepare("INSERT INTO donnees_utilisateur (nom, code, date)
VALUES (:nom, :code, :date)");
    $req->execute(array(
        'nom' => $nom,
        'code' => $code,
        'date' => $date
    ));
//print_r($bdd->errorInfo());    echo "<span class='success'>Vos donnees ont étées envoyées</span>";
    echo '<br /><h2>Vous pouvez maintenant saisir votre animal et couleur favoris</h2><br/><form>
<input type="text" placeholder="couleur" name="couleur"><br/>
<input type="text" placeholder="animal" name="animal"><br/>
<input type="button" name="valider">
</form>';

    $couleur=sha1($_POST['couleur']);
    $animal=sha1($_POST['animal']);
    $date=date("Y-m-d H:i:s");

    $req = $bdd->prepare("INSERT INTO stockage_donnees (couleur, animal, date)
VALUES (:couleur, :animal, :date)");
    $req->execute(array(
        'couleur' => $nom,
        'animal' => $code,
        'date' => $date
    ));
}
else{
    echo "<span class='error'>Veuillez compléter tous les champs</span>";
}

echo '<h2>Cliquer ci-dessous pour quitter la cession</h2><br/>
<button class="deconnecter ui secondary button" name="deconnecter" placeholder="CLIQUER POUR DECONNECTER">DISCONNECT</button>';
?>
<script>
$(document).ready(function(){
    $('.deconnecter').click(function() {
        alert('coucou ca marche');
        <?php session_destroy();?>
    });
    });

</script>