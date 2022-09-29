

<?php
define('HOST', 'localhost');
define('USER','dietnsgk_mejdi');
define('PASSWORD','hmimide');
define('BDD','dietnsgk_rentcar');
define('PORT','3306');
 
try
{
    $bdd = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.BDD, USER, PASSWORD);

    
}
catch(Exception $err)
{
    die('erreur ['.$err->getCode().'] '.$err->getMessage());
}



?>
<?php

$sql = " SELECT   marque , prixjours FROM vehicule ";

$reponse = $bdd->query($sql);

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

?>

 <option value="<?php echo $donnees['marque'] ;  ?>"  required="required"> <?php echo $donnees['marque']; ?></option>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>
?>