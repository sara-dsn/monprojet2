
<div id="visible">
    <div class="col-12 d-flex justify-content-center">
        <h1 class="font-weight-bold font-italic">Nos Catégories </h1>
    </div>
    <div class="w-100 row d-flex justify-content-center">
        <div class="col-3 d-none d-md-block">
            <div class="card border-0 bg-transparent">
                <div class="card-body">
                    <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
                </div>
            </div>
        </div>

        <div class=" row col-10 col-md-8  " >
            <?php 
             foreach($ctg as $categorie){
                if($categorie->active == 'Disponible' ) { 
                    $nbr++;?>
                <div class="t cat card custom-card col-12 col-md-3 ml-2 mr-2 mb-4 ">
                    <img class=" card-img-top taille rounded img-fluid" src="asset/category/<?=$categorie->image?>" alt="<?=$categorie->libelle?>">
                    <div class="card-body pl-3">
                        <h3 value="<?=$categorie->id?>" class=" titre card-title font-weight-bold font-italic id"><?=$categorie->libelle?></h3>
                        <span class="stock text-success"><?=$categorie->active?><span>
                    
                    </div>
                </div>
            <?php if ($nbr==6){
                $nbr=0;
                break;
            } }};?>         
        </div>
    
    </div>
    <div class="d-flex justify-content-between mt-4">
        <a type="submit" href="index.php" class="btn btn-dark t" >Précedent</a>
        <a type="submit" href="index.php?page=repas-amiens" class="btn btn-dark t" >Suivant</a>
    </div>
</div>
