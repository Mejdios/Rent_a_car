<?php
ob_start();
include('head.php');
?>

<body class="loader-active">


   

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>VOTRE RÉSERVATION</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Résumé de la réservation.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

<div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-6">
                    <div class="section-title  text-center">
                        <h2>Voiture</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <form method="post" action="validation.php" >




<?php

 if(isset($_POST['ville1'],$_POST['choix']))
{
$choix=$_POST['choix'];
$sql = " SELECT   id_v ,nom, marque, typecarburant, prixjours, matricule, port, passager, image ,Type,clim FROM vehicule where  nom like '$choix' ";

$reponse = $bdd->query($sql);

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

?>



<h2 class="text-center"><?php echo $donnees['nom'] ; ?></h2>
Marque: <?php echo $donnees['marque'] ; ?>

<img class="text-center" src="adminwebmaster/pages/uploads/<?php echo $donnees['image'];?>" width="600" >
<br>
<h4 class="text-center">
<span style="color: red"><?php echo $donnees['prixjours'] ; ?></span> DH (par jour)
</h4>
<input type="hidden" name="idvh" value=<?php echo $donnees['id_v'];?>   >       
  
                        
                          
                        
                         
                         
                          <img src="images/icons8-air-conditioner-16.png" alt="" width="19" height="20">
                          Clim : <?php echo $donnees['clim'] ; ?>
                         
                       
                          <img src="images/icons8-users-16.png" alt="" width="19" height="20">
                          Passagers: <?php echo $donnees['passager'] ; ?>
                        
                         <img src="images/icons8-suitcase-16.png" alt="" width="19" height="20">
                         Valise(s): 4
                        
                         <img src="images/icons8-rear-door-16.png" alt="" width="19" height="20">
                          Portes : <?php echo $donnees['port'] ; ?>
                         
                        <img src="images/icons8-gas-16.png" alt="" width="19" height="20">
                            Carburant: <?php echo $donnees['typecarburant'] ; ?>
                            
                  
                    
                      
                


<?php
$amount_per_day =$donnees['prixjours'];
$datedepart = $_POST["datedepart"];
$datearriver =$_POST["datearriver"];

$jmoins = ((strtotime($datearriver)) - strtotime($datedepart));
$jmoins = round($jmoins / (60*60*24)); 


  $total =$jmoins * $amount_per_day; // total*/
 

}
$ville1=$_POST['ville1'];
  //$lieu1=$_POST['lieu1'];
  $ville2=$_POST['ville2'];
  //$lieu2=$_POST['lieu2'];
  //$heure1=$_POST['heure1'];
  //$heure2=$_POST['heure2'];
  $choix=$_POST['choix'];
  $dated=$_POST["datedepart"];
  $dater=$_POST["datearriver"];
   $jours=$jmoins;
   /*echo " <span  style='color:#134A87;padding-left:20px;'> * Vous réserver un véhicule : </span>".$choix;*/

/*affihcer  les  valeurs selectionne */
if(!empty($_POST['service1']))
{
echo "<span  style='color:#134A87;padding-left:20px;'> * suppléments gratuits :</span>";
foreach($_POST['service1'] as $val)
{
echo '<span  style="color:red;margin-left:5px;">-'.$val.'</span>';
}

}
?>
<input type="hidden" name="ville1" value=<?php echo $ville1 ?>  />
<input type="hidden" name="ville2" value=<?php echo $ville2 ?>  />

<input type="hidden" name="dated" value=<?php echo $dated ?>  />

<input type="hidden" name="dater" value=<?php echo $dater ?>  />

<input type="hidden" name="jours" value=<?php echo $jours ?>  />
<input type="hidden" name="choix" value=<?php echo $choix ?>  />
<input type="hidden" name="total" value=<?php echo $total ?>  />
            
       



<?php
}
else{
header('location:index.php');
}
?>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-title  text-center">
                        <h2>Details</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <h4> Période de la location : <span style="color:green"><?php  echo $jmoins; ?>Jours</span> | Payer à la livraison : <span style="color: red"><?php echo $total;?>  </span><I style="color:red;font-size: 12px">/Dh</I></h4>

                  <b class="infort">Informations relatives au conducteur</b>
                  <div class="form-group">
                  <label for="user">Nom</label>
                  <input type="text" name="nom" required="required" class="form-control" />
                  </div>
                  <div class="form-group">

                  <label for="user">Prénom</label>
                  <input type="text" name="prenom" required="required" class="form-control"/>
                  </div>
                  <div class="form-group">

                  <label for="emailaddress">Adresse E-mail :</label>
                  <input  name="emailaddress" required="required" type="email" class="form-control" />
                  </div>

                  <div class="form-group">
                  <label for="telephone">Numero de telephone:</label>
                  <input type="text" name="telephone" required="required"  class="form-control"/>
                  </div>
                  <div class="form-group">
               
                 <button class="btn btn-danger btn-block">RÉSERVER MAINTENANT</button>
                 </div>
                

                </div>  














                
                 
                    
</form>













<?php



    if (isset($_POST['email'])) {
    
  
    ini_set("SMTP", "aspmx.l.google.com");
    ini_set("sendmail_from", "tmbtp.mejdiosmohamed@gmail.com");

    $message =  $_POST['comments'];
    $headers = $_POST['email'];
    
    $body="client nom :".$_POST['name']."\n"."telephone :".$_POST['telephone']."\n"."Adresse Email:".$_POST['email']."\n";
    
    mail("tmbtp.mejdiosmohamed@gmail.com", "Reservations", $message,$body);
    ?>
    <div class="alert alert-success">
 
 <?php
     
    }
    ?>

























                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>







  

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
   




    </section>
    <!--== Car List Area End ==-->

    <!--== Footer Area Start ==-->
 
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>


  <?php
  include("footer.php");
  ?>

<?php
 ob_end_flush();
?>