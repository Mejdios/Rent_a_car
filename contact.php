<?php
include('head.php');
?>

    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>contact</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Pour nous contacter, veuillez remplir les champs ci dessous</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">

     <form  method="post" action="" role="form">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="index.html">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <input type="text" placeholder="Full Name" name="name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="email-input">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="website-input">
                                        <input type="text" placeholder="telephone" name="telephone">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <input type="text" placeholder="Subject">
                                    </div>
                                </div>
                            </div>

                            <div class="message-input">
                                <textarea name="review" cols="30" rows="10" placeholder="Message" name="comments"></textarea>
                            </div>

                            <div class="input-submit">
                                <button type="submit">Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


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
  <strong>Success!</strong> nous avons bien reçu votre message et nous vous en remercions.
</div>
 <?php
     
    }
?>
</form>











    </div>
    <!--== Contact Page Area End ==-->

    <!--== Map Area Start ==-->
    <div class="maparea">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.041951562832!2d-7.587912784872755!3d33.36997078079711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda63a975723fb01%3A0x36a43ade39731673!2sA%C3%A9roport%20international%20Mohammed%20V%20de%20Casablanca!5e0!3m2!1sfr!2sma!4v1656889902365!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--== Map Area End ==-->

    
   

  <?php
  include("footer.php");
  ?>