<?php
include_once('head.php');
?>


<script>
function myFunction() {
  document.getElementById("retoure").style.display = "flex";
}
</script>
    <!--== SlideshowBg Area Start ==-->
    <section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h1>Location de voiture au Maroc
 </h1>
                                <p>✓ Pas de frais cachés ✓ Assistance 24/7 ✓ Annulation gratuite <br> </p>
                                <p>Meilleurs prix de location de voitures</p>
                                
                                
                                    


                                <div class="book-ur-car" style="
    background: #002e94ad;border-radius: 25px;">
    
   
    <a href="#" onclick="myFunction()" style="color:white">Ville de dépot différente?</a>

    
                                    <form action="reservation.php" method="post">
                                        <div class="pick-location bookinput-item" >
                                            <select class="custom-select" name="ville1">
                                                <option value="Casablanca">Lieu de Livraison </option>
                                                <option value="Casablanca">Casablanca</option>
                                              <option value="Marrakech">Marrakech</option>
                                           
                                              <option value="Rabat">Rabat</option>
                                              <option value="Tanger">Tanger</option>
                                            </select>
                                        </div>

                                        <div class="pick-location bookinput-item" id="retoure" style="display:none">
                                            <select class="custom-select" name="ville2">
                                                <option value="Casablanca">Lieu de Retour </option>
                                                <option value="Casablanca">Casablanca</option>
                                              <option value="Marrakech">Marrakech</option>
                                           
                                              <option value="Rabat">Rabat</option>
                                              <option value="Tanger">Tanger</option>
                                            </select>
                                        </div>




                                        <div class="pick-date bookinput-item">
                                            <input id="startDate2" placeholder="Date de départ" name="datedepart" required="Date" />
                                        </div>

                                        <div class="retern-date bookinput-item">
                                            <input id="endDate2" placeholder="Date de retour"  name="datearriver" required="Date" />
                                        </div>
                                        
                                        
                                        
                                        
                                        

                                        <div class="car-choose bookinput-item">
                                           

<select name="choix" class="custom-select"> 
   
<option value="DACIA LOGAN">Choisir une voiture</option>
<?php

$sql = " SELECT  DISTINCT nom , prixjours FROM vehicule ";

$reponse = $bdd->query($sql);

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

?>

 <option value="<?php echo $donnees['nom'] ;  ?>"  required="required"> <?php echo $donnees['nom']; ?></option>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>
<option value="bm"></option>
</select>





                                        </div>

                                        <div class="bookcar-btn bookinput-item" style="
  
  background: #d81800;
    height: 80px;
    height: 46px;
    border-radius: 20px;
    text-align: center;
    cursor: pointer;
    margin: 1px 46px auto auto;
    position: relative;
    float: none;
    ">
                                            <button type="submit">Offre</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== SlideshowBg Area End ==-->

    <!--== About Us Area Start ==-->

    <!--== About Us Area End ==-->

    <!--== Partner Area Start ==-->
   
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                       
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa  fa-tachometer"></i>
							<h3>Kilométrage illimité</h3>
							<p>kilométrage illimité gratuit sur un grand nombre de véhicules.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-file"></i>
							<h3>Assurances comprises</h3>
							<p>Assurances de voiture comprises.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-users"></i>
							<h3>2ème conducteur gratuit</h3>
							<p>Le conducteur supplémentaire est totalement gratuit .</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-clock-o"></i>
							<h3> Service 24H/24 , 7J/7</h3>
							<p>Du lundi au Dimanche 24H/24</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-plane"></i>
							<h3>Livraison partout au Maroc</h3>
							<p>Livraison partout au maroc, à n'importe quels moments</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						
						<!-- Single Service End -->
					</div>
				</div>
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">1550</span>+</p>
                                        <h4>CLIENTS HEUREUX</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">250</span>+</p>
                                        <h4>VOITURES EN STOCK</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">5</span>+</p>
                                        <h4>Bureau dans les villes</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

<?php
  include_once('footer.php');
  ?>