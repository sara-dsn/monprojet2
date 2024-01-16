<?php session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPHMailer\PHPMailer\Exception;
 require_once 'vendor/autoload.php';
 $mail =new PHPMailer(true);
//  $mail->isSMTP();
 $mail-> Host = '127.0.0.1';
 $mail->SMTPAuth = false;
 $mail-> Port=8025;
 $mail->setFrom('the_district@gmail.com');
 $mail->addAddress($_SESSION["e"]);
 $mail->isHTML(true);
 $mail->Subject='Votre commande arrive !';
 $mail->Body= "Bonjour ".$_SESSION["np"]."! <br><br> Votre ".$_SESSION["l"]." à ".$_SESSION["p"]."€ arrive à ".$_SESSION["a"]." dans moins de 30 minutes !";
 if($mail){
  try{
    $mail->send();
  }catch(exception $e){
    echo"Envoie du  mail échoué, voici l'erreur : ", $mail->ErrorInfo;
  }
 }
        ?>
        <!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>The District</title>
</head>

<body>
    <div class="parallax-body">

        <div class="container-fluid">
        <?php
  
    include 'DAO.php';
 // Si 'url' de la session n'est pas égal à celui de la page ouverte:
 if (!isset($_SESSION['url'])) {
    if (isset($_SERVER['HTTP_REFERER'])) {
        $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
    }
    else {
        $_SESSION['url'] = '';
    }
 }
 else {
    if (isset($_SERVER['HTTP_REFERER'])) {
        $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
    }
    else {
        $_SESSION['url'] = '';
    }
 }


// if (($_SESSION['url'])!=($_SERVER['HTTP_REFERER'])) {

//  // alors 'url' de la session est égale à l'URL de la page ouverte:
//     $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
// }

// //  sinon si 'url' n'est pas défini :
// elseif (!isset($_SESSION['url']) ) {

//  // alors on met à jour l''url' de la session:
//     $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
// };
    ?>

<hr>
<!-- <div><?= $_SESSION['url'] ?></div> -->
<hr>
<div class="container-fluid">
<div class="row  pr-0 pl-0 mr-0 ml-0">
    <img class="image-fluid pl-0 col-5 col-md-2 " src="asset/the_district_brand/facebook_cover_photo_1.png"
        alt="logo-the-District">
    <div class="col">
        <nav class="navbar navbar-expand-sm  bg-transparent navbar-light d-flex justify-content-end ">

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav col-12 ">
                    <li class="nav-item w-25   ">
                        <a class="nav-link h2   font-weight-bold font-italic text-right"
                            href="index.php"><u>Accueil</u></a>
                    </li>
                    <li class="nav-item h2  w-25">
                        <a class="nav-link font-weight-bold font-italic text-right "
                            href="index.php?page=cuisine-italienne-indienne-street-food"><u>Catégorie</u></a>
                    </li>
                    <li class="nav-item  h2 w-25 ">
                        <a class="nav-link font-weight-bold font-italic text-right"
                            href="index.php?page=repas-amiens"><u>Plats</u></a>
                    </li>
                    <li class="nav-item  h2 w-25">
                        <a class="nav-link font-weight-bold font-italic text-right"
                            href="index.php?page=contact-vendeur"><u>Contact</u></a>
                    </li>

                </ul>
            </div>

        </nav>
    </div>
</div>

<div class="item-content position-relative d-md-none">
    <img class="img-fluid w-100 mt-2" id="bandeau" src="asset/cat.fond/fond-bordeau.png"alt="bandeau de décoration couleur bordeaux">
    <div class="position-absolute d-flex justify-content-between w-100 bandeausm">
        <img class="img-fluid w-25" alt="verre de vin" src="asset/cat.fond/vin.png">
        <img class="img-fluid w-25" alt="cuisinier" src="asset/cat.fond/petitCuisinier.png">
    </div>
</div>
<div class="item-content position-relative mt-0 d-none d-md-block mt-3 mb-4 ">
    <video autoplay loop muted playsinline poster="asset/the_district_brand/video.mp4" id="coupe"class=" w-100 ">
        <source src="asset/the_district_brand/video.mp4" type="video/mp4">
    </video>
    <div class="search-bar position-absolute">
        <nav class="navbar navbar-light bg-transparent d-none d-md-block">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" id="recherche"
                    placeholder="rechercher...">
                <button class="btn btn-outline-danger my-2 my-sm-0" id="btn" type="button">go!</button>
            </form>
        </nav>

    </div>
</div>
     <div class="w-100 d-flex row">
                 <div class="row justify-content-center " id="afficher"></div>
                 <div class="col-12 text-center" > <a type="submit" id="go" href="index.php?page=réclamation-envoyer" style="display:none" class="btn btn-dark t text-center mt-4" >Précedent</a></div>
            </div>
        <div id="visible">
      <div class="container-fluid col-12 mb-4 mt-1 d-flex  ">
        <div class="col-2 d-none d-md-block ">
           <div class="card border-0 bg-transparent  ">
            <div class="card-body">
               <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid  " alt="Cuisinier">
             </div>
           </div>
        </div>
        <div calss="col-10 justify-content-center mt-4 ">
          <h2 class="mt-4 ml-4">Votre commande est envoyée,<br> Notre livreur va vous contacter dans moins de 5 minutes .</h2><br>
          </div>
          </div>
         <div class="w-100 d-flex justify-content-center"> <a type="submit" class="btn btn-dark t " href="index.php">Retourner sur la page d'acceuil</a></div>
        
      </div>
     
      <?php
        include('footer.php');
        ?>
