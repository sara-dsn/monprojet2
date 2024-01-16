<?php
session_start();
    
if(isset($_POST["bouton"])){var_dump($_REQUEST);
$nompre=$_POST["np"];
$email=$_POST["e"];
$telephone=$_POST["t"];
$adresse=$_POST["a"];
$prix= $_POST["p"] ;
$libelle= $_POST["l"];
 var_dump($_POST);
//  var_dump($_GET);
function np($nompre){
    $validation= "/^[a-zA-Z]+\s[a-zA-Z]+$/";
    if (preg_match($validation,$nompre)){
return true;
    }
    else{
        echo " <p>Veuillez entre votre nom et votre prénom s.v.p<p>";
        return false;
        
    };
};

function e($email){
    $validation= "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,3}$/";
    if (preg_match($validation,$email)){
return true;
    }
    else{
        echo " <p>Veuillez entre votre email s.v.p<p>";
        return false;
       
    };
};
function t($telephone){
    $validation= "/^[0-9]{10,}$/";
    if (preg_match($validation,$telephone)){
return true;
    }
    else{
         echo " <p>Veuillez entre votre numéro de téléphone s.v.p<p>";
        return false;
       
    };
};
function a($adresse){
    $validation= "/^[0-9]+\s[a-zA-Z\s]+$/";
    if (preg_match($validation,$adresse)){
return true;
    }
    else{
        echo " <p>Veuillez entre votre adresse s.v.p<p>";
        return false;
        
    };
};
 if(np($nompre)==true&e($email)==true &t($telephone)==true &a($adresse)==true){
$_SESSION["p"]=$prix;
$_SESSION["l"]=$libelle;
$_SESSION["np"]=$nompre;
$_SESSION["e"]=$email;
$_SESSION["t"]=$telephone;
$_SESSION["a"]=$adresse;
$nomFichier="L".date("Y-m-d-H-i-s");
$contenuFichier="Nom et Prénom: ".$_SESSION["np"]
."\r\n  Email : ".$_SESSION["e"]
."\r\n  Telephone : ".$_SESSION["t"]
."\r\n  Adresse :".$_SESSION["a"];
file_put_contents($nomFichier,$contenuFichier);



         
header("Location: livreur.php");
exit();
}
 else{
unset($_SESSION["auth"]);
session_destroy();
// echo "Veuillez remplir correctement le formulaire s.v.p <br>";
// echo "nom: ".n($nom);
// echo "<br>prenom: ".p($prenom);
// echo "<br>email: ".e($email);
// echo "<br>telephone: ".t($telephone);
// echo "<br>demande: ".d($demande);
// header("Location: .php");
// exit();

 };




};
?>