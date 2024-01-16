<?php 
 
// Connexion à la base de données
$db=new PDO('mysql:host=localhost;dbname=district','admin','dosana');

// $db=new PDO('mysql:host=localhost;dbname=dosana','dosana','dosana');
// configurer le mode erreur PDO pour générer des exceptions :
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = $db->prepare("SELECT * FROM categorie ");
$requete->execute();
$ctg = $requete->fetchAll(PDO::FETCH_OBJ);

$tplat = $db->prepare("SELECT * FROM plat ");
$tplat->execute();
$plt = $tplat->fetchAll(PDO::FETCH_OBJ);

$table = $db->prepare("SELECT * FROM plat INNER JOIN commande ON plat.id = commande.id_plat ORDER BY commande.quantite DESC");
$table->execute();
$best = $table->fetchAll(PDO::FETCH_OBJ);

$nbr=0;
$nbr2=0 ;
// var_dump($tableau)
// var_dump($_REQUEST);


    
?>





<!-- if(isset($_GET["cat"])){
    echo `  <div class="col-3   ">
    <div class="card border-0 bg-transparent">
        <div class="card-body">
            <img src="asset/cat.fond/cuisinier.png" class="card-img-top img-fluid" alt="Cuisinier">
        </div>
    </div>
</div>`;
};
<?php foreach($ctg as $categorie){
                if($categorie->active == 'Disponible' ) { 
                    $nbr++;?>
                    <form class=" col-12 col-md-3  ml-2 mr-2 mb-4" method="get" action="DAO.php">
                <div name="cat" value="<?=$categorie->id?>"class=" ff t cat card custom-card  ">
                    <img class=" card-img-top taille pt-2 pl-2 pr-2 rounded img-fluid" src="asset/category/<?=$categorie->image?>" alt="<?=$categorie->libelle?>">
                    <div class="card-body pl-3">
                        <h3  class=" titre card-title font-weight-bold font-italic id"><?=$categorie->libelle?></h3>
                        <span class="stock text-success"><?=$categorie->active?><span>
                    
                    </div>
                </div>
                </form>
            <?php if ($nbr==6){
                $nbr=0;
                break;
            } }};?>  -->