
            <div class="container-fluid  " >
                <div class="w-100 d-flex row">
                     <div class="row justify-content-center " id="afficher"></div>
                   
                </div>
            </div>
           
            <div class="row d-flex justify-content-center ml-3 mr-3" >
               
                <div id="gg" class="row justify-content-center mt-4"></div>
              
            </div>
            <div id="visible">
                <div class="col-12 d-flex justify-content-center">
                     <h1 class="font-weight-bold font-italic mr-4 pr-4">Votre Commande :</h1>
                </div>
               
                <div class="d-flex justify-content-center">
<?php 
if(isset($_GET["id"])){
   foreach($plt as $element)
    if ($_GET["id"]== $element->id){ 
 ?>
    <div class="card  col-12 col-md-2 ml-4 ">
        <img class="card-img-top img-fluid mt-2" name="" value="" src="asset/food/<?=$element->image?>" alt="burger360">
            <div class="card-body">
            <h5 class="card-title" ><?=$element->libelle?></h5>
            <p class="card-text"  value="<?=$element->prix?>"><?=$element->description?><br> Total : <?=$element->prix?> €</p>
            <button class="btn btn-warning t">Quantité: 1</button>
        </div>
    </div>
</div>



<div class="container-fluid col-12 d-none d-md-block mb-4 mt-4">
    <div class="row ">
            <div class="col-2 ">
            <div class="card border-0 bg-transparent  ">
                <div class="card-body">
                    <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
                    </div>
                </div>
        </div>
         <form class="col-8 " method="POST" action="form_commande.php">

        <div class="col mr-4 pr-4 ml-2 mb-4 mt-4 ">
            <label class="font-weight-bold font-italic text-right">Nom et
                Prénom</label>
            <input type="text" name="np" id="np" class="form-control">
            <div id="nompre"
                class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                style="display:none;" role="alert">
                <strong>Ce champ est obligatoire</strong>
            </div>
        </div>

        <div class="form-row">
            <div class="col mr-4 ml-4 mb-4 mt-4">
                <label class="font-weight-bold font-italic text-right">Email</label>
                <input type="text" name="e" id="e" class="form-control">
                <div id="email"
                    class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                    style="display:none;" role="alert">
                    <strong>Ce champ est obligatoire </strong>
                </div>
            </div>
            <div class="col mr-4 ml-4 mb-4 mt-4">
                <label class="font-weight-bold font-italic text-right">Téléphone</label>
                <input type="text" name="t" id="t" class="form-control">
                <div id="tel"
                    class="alert alert-danger alert-dismissible bg-transparent border-0 fade show"
                    style="display:none;" role="alert">
                    <strong>Ce champ est obligatoire</strong>
                </div>
            </div>
        </div>
        <div class="form-group mr-4 ml-4 mb-4 mt-4">
            <label class="font-weight-bold font-italic text-right">Votre Adresse</label>
            <textarea class="form-control" name="a" id="a" rows="4"></textarea>
            <div id="adresse"
                class="alert alert-danger alert-dismissible fade bg-transparent border-0 show"
                style="display:none;" role="alert">
                <strong>Ce champ est obligatoire</strong>
            </div>
        </div>
        <div class="container-fluid col-12 ">
            <div class="item-content text-center ml-4 pl-4 ">
            <input type="hidden" class="card-text" name="l" value="<?=$element->libelle?>">
            <input type="hidden" class="card-text" name="p" value="<?=$element->prix?>">
                            <input type="submit" name="bouton"
                    class="btn btn-dark font-weight-bold font-italic text-right t" href="index.php?page=livraison&id=<?=$element->id?>" value="Envoyer">
            </div>
        </div>
    </form>

                </div>
            </div>
           

            <?php };}; ?>


            <div class="w-100 mt-3 d-flex justify-content-center"> <a type="submit" class="btn btn-dark t " href="index.php">Retourner sur la page d'acceuil</a></div>
        </div>

        
        </div>
       