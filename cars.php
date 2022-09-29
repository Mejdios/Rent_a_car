<?php
include('head.php');
?>

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>NOS VOITURES</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Meilleurs prix de location de voitures</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
<form action="choix.php" method="GET">

            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                <div class="row">






<?php
    $i =0;
  $sql = " SELECT  id_v, nom, marque, prixjours,Type ,image  FROM vehicule ";

    $reponse = $bdd->query($sql);

    foreach ($reponse as $donnee) {
        ?>
      
<input type='hidden' name='choix' value=<?php echo $donnee['nom'];?> />


                        
                            <!-- Single Car Start -->

                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb">
                                      <img src="adminwebmaster/pages/uploads/<?php echo $donnee['image'];?>" id="imgs"  ></div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#"><?php echo $donnee['nom'] ; ?></a></h2>
                                        <h5><?php echo $donnee['prixjours'] ; ?> /Par jour</h5>
                                        
                                        <ul class="car-info-list">
                                            <li>AC</li>
                                            <li>Diesel</li>
                                            <li><?php echo $donnee['Type'];?></li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                        </p>
                                        <a href="<?= $donnee['id_v']?>" class="rent-btn" data-toggle="modal" data-target="#myModal<?php echo $donnee['id_v']; ?>">Réserver</a>
                                    </div>
                                </div>
                            </div>

<div class="modal fade" id="myModal<?php echo $donnee['id_v']; ?>"tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  


<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      




<div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
           
           
              <h1 style="text-align: center;color: #facd33">Réserver</h1>
            
            <form action="reservation.php" method="post">
              
                  <div class="col-sm-12">
                  <div class="form-group">
   <div class="car-list-thumb"><img src="adminwebmaster/pages/uploads/<?php echo $donnee['image'];?>"  ></div>

<input type="hidden" name="choix" value="<?php echo $donnee['nom'] ;  ?>">
 <h2 style="text-align: center;font-size: 18px;color: red;"><?php echo $donnee['marque'] ;  ?> 




                  
                                        </div>
                  
                <div class="col-sm-12">
                  <div class="form-group">
                   
                 

                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                      <span class="form-label">AGENCE DE DÉPART</span>
                                            <select class="form-control" name="ville1" >
                                              
                                              <option value="Marrakech">Marrakech</option>
                                              <option value="Casablanca">Casablanca</option>
                                              <option value="Rabat">Rabat</option>
                                              <option value="Tanger">Tanger</option>
                                            </select>
                                            <br>
                                            
                                            <span class="form-label">AGENCE DE RETOUR</span>
                                            <select class="form-control" name="ville2" >
                                              
                                              <option value="Marrakech">Marrakech</option>
                                              <option value="Casablanca">Casablanca</option>
                                              <option value="Rabat">Rabat</option>
                                              <option value="Tanger">Tanger</option>
                                            </select>
                                            <br>
                    <span class="form-label">DATE DE DÉPART</span>
                    <input class="form-control" name="datedepart" type="date" required>
                  </div>
                </div>
               
              </div>
                <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <span class="form-label">DATE DE RETOUR</span>
                    <input class="form-control" name="datearriver" type="date" required>
                  </div>
                </div>
               
              </div>
              <div class="form-btn">
                <button class="submit-btn">Réserver</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>






    </div>
  </div>









</div>






        <?php
        $i++;
        if ($i % 2 ==0) {
            echo '</div><div class="row">';

        }
    }
    ?>










                    </div>
                    
                </div>
                <!-- Car List Content End -->
            </div>
            </form>
        </div>
    </section>
    <!--== Car List Area End ==-->

    <!--== Footer Area Start ==-->

  <?php
  include("footer.php");
  ?>