<?php
include_once('head.php');
?>

<?php


  if(isset($_POST['nom'],$_POST['prenom'],$_POST['emailaddress'],
    $_POST['telephone'],$_POST['idvh'],$_POST['ville1']))
  {

//client//
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adressemail=$_POST['emailaddress'];
$numero_telephone=$_POST['telephone'];




$req = $bdd->prepare('INSERT INTO client(nom,prenom,numero_telephone,adressemail) VALUES(:nom , :prenom,:numero_telephone,:adressemail)');
$req->execute(array(
	
'nom'=>$nom,
'prenom'=>$prenom,
'numero_telephone'=>$numero_telephone,
'adressemail'=>$adressemail, ));

//reservation


$idvoiture=$_POST['idvh'];
$ville1=$_POST['ville1'];
$ville2=$_POST['ville2'];

$dated=$_POST['dated'];

$dater=$_POST['dater'];

$jours=$_POST['jours'];
$total=$_POST['total'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$emailaddress=$_POST['emailaddress'];
$telephone=$_POST['telephone'];



$req = $bdd->prepare('INSERT INTO reservation( lieu_livraison, lieu_retoure, date_depart, date_retoure, nombre_jours, total, nom_client, prenom_client, telephone, email, id_voiture,confirmation_reservation) VALUES(:lieu_livraison, :lieu_retoure, :date_depart, :date_retoure, :nombre_jours, :total, :nom_client, :prenom_client, :telephone, :email,:id_voiture,"1")');
$req->execute(array(
	'lieu_livraison'=>$ville1,
    'lieu_retoure'=>$ville2,
  
    'date_depart'=>$dated,
  
    'date_retoure'=>$dater,
   
    'nombre_jours'=>$jours,
    'total'=>$total,
    'nom_client'=>$nom,
    'prenom_client'=>$prenom,
    'telephone'=>$telephone,
    'email'=>$emailaddress,
    'id_voiture'=>$idvoiture,
 ));
if($req)
{








    
  
    ini_set("SMTP", "aspmx.l.google.com");
    ini_set("sendmail_from", "mejdiosmohamed@gmail.com");
    ini_set("sendmail_from", $_POST['email']);
    $message =  $_POST['comments'];
    $headers = $_POST['email'];
   
   
    $body="client nom  :".$_POST['nom']."\n"."Prenom :".$_POST['prenom']."\n"."telephone :".$_POST['telephone']."\n"."Adresse Email:".$_POST['email']."\n";
    
    mail("mejdiosmohamed@gmail.com", "Reservations", $message,$body);
    mail( $emailaddress, "Jidor Car ","Bonjour Nous vous remercions d'avoir choisi notre voiture et de la confiance que vous accordez à notre société. Nous avons bien reçu votre demande de réservation.
        Notre personnel va traiter votre demande et vous confirmera par email ou telephone  les disponibilités dans les 24 heures.

Amicalement,");












}

}
else
{
   header('location:index.php');
}
?>

<div class="wrap">


<div class="content">




<br>
<br>
<br>










<section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Success Booking </h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <h4>Nous avons bien reçu votre demande et vous contacterons le plus rapidement possible.
                                </br>
                                Merci
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">



 <?php

$idvoiture=$_POST['idvh'];


$sql = " SELECT  image , id_v FROM vehicule  where  id_v = '$idvoiture'";

$reponse = $bdd->query($sql);

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

?> 








                       <img src="adminwebmaster/pages/uploads/<?php echo $donnees['image'];?>" class="user-image"/>

                        <?
                    }
                        ?>




                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== Abou














<div class="clear" style="clear:both"></div>




 
</div>

</div>

<?php
include_once('footer.php');
?>
