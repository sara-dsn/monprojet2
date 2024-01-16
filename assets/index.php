

            <?php
            include('header.php');
           
            ?>
        
            
<div class="w-100 d-flex row">
              <div class="row justify-content-center " id="afficher"></div>
            </div>

            <div class="w-100 row d-flex  justify-content-center">
             
                <div class="row col-9 justify-content-center" >
                    <div id="gg" class="row justify-content-center mt-4 "></div>
                   
                </div>
            </div>
            <div id="titre">
                <div class="col-12 d-flex justify-content-center">
                     <h1 class="font-weight-bold font-italic ml-2 pr-4">Votre Commande :</h1>
                </div></div>
            <div class="w-100 d-flex justify-content-center row">
                    
            <div class="row col-10 cardContainer  ml-3 d-flex justify-content-center " id="pp"></div>
            </div>
            <div id="ff">
                <div  class="container-fluid  col-12  mb-4 mt-4">
                    <div class="row ">
                        <div class="col-2 d-none d-md-block ">
                            <div class="card border-0 bg-transparent  ">
                                <div class="card-body">
                                 <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
                                </div>
                            </div>
                        </div>
                        <form class="col-12 col-md-8 " method="POST" action="form_commande.php">

                            <div class="col-12    mb-4 mt-4 ">
                                <label class="font-weight-bold font-italic text-right">Nom et
                                Prénom</label>
                                <input type="text" id="np" name="np" class="form-control ">
                                <div id="nompre"
                                    class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                    style="display:none;" role="alert">
                                    <strong>Ce champ est obligatoire</strong>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-12 col-md-6   mb-4 mt-4">
                                    <label class="font-weight-bold font-italic text-right">Email</label>
                                    <input type="text" id="e2" name="e" class="form-control">
                                    <div id="email2"
                                        class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                        style="display:none;" role="alert">
                                        <strong>Ce champ est obligatoire </strong>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-4 mt-4">
                                    <label class="font-weight-bold font-italic text-right">Téléphone</label>
                                    <input type="text" id="t2" name="t" class="form-control">
                                    <div id="tel2"
                                        class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                                        style="display:none;" role="alert">
                                        <strong>Ce champ est obligatoire</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12 mb-4 mt-4">
                                <label class="font-weight-bold font-italic text-right">Votre Adresse</label>
                                <textarea class="form-control" id="a" name="a" rows="4"></textarea>
                                <div id="adresse"
                                    class="alert alert-danger alert-dismissible fade bg-transparent border-0 show"
                                    style="display:none;" role="alert">
                                    <strong>Ce champ est obligatoire</strong>
                                </div>
                            </div>
                            <div class="container-fluid col-12 ">
                                <div class=" d-flex justify-content-center col-12 col-md-10  ml-4 pl-4 ">

                                    <input type="submit" href="index.php?page=livreur" name="bouton" id="bouton"
                                     class="btn btn-dark font-weight-bold font-italic  t" value="Envoyer">
                                </div>
                            </div>
                           
                            <div class="col-12 col-md-10 mt-4 d-flex justify-content-center"> <a type="submit" class="btn btn-dark t " href="index.php">Retourner sur la page d'acceuil</a></div>
                     
                    </form>

                    
                    </div>
                </div>


            </div>

          
        </div>
                <div class="col-12 text-center">
                    <!-- <button type="submit" id="bottom" onclick="history.back(); location.reload(true);" class="btn btn-dark t text-center mt-4" >Précedent</button> -->
                    <!-- <button type="button" id="bottom" onclick="window.history.go(-1)" class="btn btn-dark t text-center mt-4">Précédent</button> -->
                    <button type="button" id="bottom" onclick="window.location.href='<?php echo $_SESSION['url']; ?>'" class="btn btn-dark t text-center mt-4">Précédent</button>

                   

                </div>
           
                <main>
    <?php
 
    // on change le body en fonction de quelle page est cliquée:
    if(!isset($_GET['page'])|| empty($_GET['page'])||$_GET['page']=='acceuil'){
      include('acceuil.php');
    }else if($_GET['page']=='cuisine-italienne-indienne-street-food'){
        include('categorie.php');
    }
    else if($_GET['page']=='repas-amiens'){
        include('plats.php');
    }
    else if($_GET['page']=='commande-livraison'){
        include('commande.php');
    }
    else if($_GET['page']=='contact-vendeur'){
        include('contact.php');
    }
    else if($_GET['page']=='réclamation-envoyer'){
        include('demande.php');
    }
    else if($_GET['page']=='livraison'){
        include('livreur.php');

    } else if($_GET['page']=='mention_legale'){
        include('mention_legale.php');
    }
    else if($_GET['page']=='politique_de_confidentialite'){
        include('politique.php');

    };                           
    
 
    
    
    ?>

</main>


            <?php
            include('footer.php');
            ?>
        