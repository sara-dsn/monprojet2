 <div class="container-fluid col-12 col-md-3">
        <div class="row d-flex justify-content-center">
            <div >
                <div class="card border-0 bg-transparent">
                    <div class="card-body">
                        <img src="asset/the_district_brand/icone.png" class="card-img-top img-fluid"
                            alt="reseaux sociaux">
                    </div>
                </div>
            </div>
            

        </div>


    </div>
</div>
<div class="container-fluid d-flex justify-content-center col-12 col-md-3">
    <a class="mr-2 mb-4 text-dark" href="index.php?page=politique_de_confidentialite">Politique de confidentialité </a>
    <a class="ml-2 mb-4 text-dark" href="index.php?page=mention_legale"> Mentions légales</a>
</div>
</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="asset/js/script.js"></script>
    <script>
        $(document).ready(function () {

           var btn=$("#bottom"); 
           var aff=$("#plats");
           var visible=$("#visible");
           var a = $("#afficher");
           var form=$("#ff");
           var test=$("#gg");
           var titre=$("#titre");
           var affiche = $("#txt");
           var pp=$("#pp");
           var affichage = $("#categorie");
           var tel=$("#smm");
           var btn2=("#btnplt");
     form.hide();
     pp.hide();
     titre.hide();
     btn.hide();



       $.getJSON("plat.json", function (json) {
         
                var ctg = json.categorie;
                var plt = json.plat;
              

//                         // COMMANDE AFFICHAGE:
//           $(document).on("click", ".di", function (e) {
//             e.preventDefault();
//       var id=$(this).attr("value");
//       commande(id);
// });
//                 function commande(id){
                    
//    form.show(); 
//    btn.hide();
//     test.empty();
//     pp.show();
//     a.empty();

// titre.show();
// visible.hide();
//     $.each(plt, function (element, uno) {
//         var idpp=uno.id_plat;
//         if (idpp == id){ 
//                     var t = $( ` 
//                 <div class="card  col-12 col-md-3 mx-1 ">
//                     <img class="card-img-top rounded himg img-fluid"  src="asset/food/${uno.image}" alt="${uno.libelle}">
//                     <div class="card-body font-italic">
//                         <h5 class="  card-title font-weight-bold ">${uno.libelle}</h5>
//                         <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € </p>
//                             <span class="stock6 text-danger"><span>
//                     </div><div class="mt-auto mb-2 text-center"><a href="#" class="btn btn-warning t">Quantité : 1 </a></div>
//                 </div> `);                   

// pp.append(t);
//         };
//         });
//     };

// PLATS AFFICHAGE DE BASE DE 3 À 5:
    for (i = 3; i < 5; i++) {
        
        var leplat = plt[i];
        var card = $( `<div   class="card col-12 ml-1  mb-2 ">
    <img class="card-img-top rounded img-fluid himg" src="asset/food/${leplat.image}" alt="${leplat.libelle}">
    <div class="card-body font-italic">
        <h5  class="card-title  font-weight-bold ">${leplat.libelle}</h5>
        <p class="card-text ">${leplat.description}<br> Menu: ${leplat.prix} €  </p>
    </div> <div class="mt-auto mb-2 text-center"><a href="#" value="${leplat.id_plat}" class="btn btn-warning di t">Commander</a></div>
</div>`);
        tel.append(card);
    };



 
            
 // BARRE DE RECHERCHE:  
           
$("#btn").click(function () {
    
    search();

});

$("#recherche").on("keypress", function (e) {
    
    if(e.which===13){
    e.preventDefault();
    search();
};
}); 

function search() {
    
    a.empty();
    test.empty();
    visible.hide();
    btn.show();
    titre.hide();
    pp.empty();
    form.hide();
    var input = $("#recherche").val();

    $.getJSON("plat.json", function (json) {
        var plt = json.plat;
        

    
            var pla = plt.filter(function (p) {
                return p.libelle.toLowerCase().includes(input.toLowerCase());
            });  
        

    
        miseajour(pla);

        function miseajour(result) {
            
            $.each(result, function (element, uno) {
                var txt = $( ` 
            <div class="card   col-12 col-md-3 mx-1 ">
                <img class="card-img-top rounded img-fluid himg" src="asset/food/${uno.image}" alt="${uno.libelle}">
                <div class="card-body font-italic ">
                    <h5 class="card-title  font-weight-bold ">${uno.libelle}</h5>
                    <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € </p>
                </div> <div class="mt-auto mb-2 text-center"><a href="index.php?page=cuisine-italienne-indienne-street-food&id=${uno.id_plat}" value="${uno.id_plat}" class="btn btn-warning di t">Commander</a></div>
            </div>`);
                a.append(txt);
            });
        }
    });
};
          
            //  PLATS AFFICHAGE SELON CATEGORIE CLIQUÉE:                
$(".cat").click(function () {
    var id=$(this).find(".id").attr("value");
              plat(id);
              btn.show();

          });
          function plat(id){
         test.empty();
         a.empty();
         pp.empty();
   
            $.each(plt, function (element, uno) {
                var idcat=uno.id_categorie;
                if (idcat == id){ 
                            var t = $( ` 
                        <div class="card  col-12 col-md-3  mx-1 ">
                            <img class="card-img-top rounded himg img-fluid"  src="asset/food/${uno.image}" alt="${uno.libelle}">
                            <div class="card-body font-italic">
                                <h5 class="  card-title font-weight-bold ">${uno.libelle}</h5>
                                <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € </p>
                                
                            </div><div class="mt-auto mb-2 text-center"><a href="index.php?page=commande-livraison&id=${uno.id_plat}" value="${uno.id_plat}" class="btn btn-warning di t">Commander</a></div>
                        </div> 
                        
   `);
visible.hide();
test.append(t);
};
});
};
            // COMMANDE AFFICHAGE:
//           $(document).on("click", ".di", function (e) {
//             e.preventDefault();
//       var id=$(this).attr("value");
//       commande(id);
// });



//           function commande(id){
//             btn.hide();
//          test.empty();
//          pp.empty();
//          a.empty();
//     form.show();
//    titre.show();

//             $.each(plt, function (element, uno) {
//                 var idpp=uno.id_plat;
//                 if (idpp == id){ 
//                             var t = $( ` 
//                         <div class="card  col-12 col-md-3 mx-1 ">
//                             <img class="card-img-top rounded himg img-fluid"  src="asset/food/${uno.image}" alt="${uno.libelle}">
//                             <div class="card-body font-italic">
//                                 <h5 class="  card-title font-weight-bold ">${uno.libelle}</h5>
//                                 <p class="card-text ">${uno.description} <br> Menu: ${uno.prix} € </p>
//                                  <span class="stock6 text-danger"><span>
//                           </div><div class="mt-auto mb-2 text-center"><a href="#" class="btn btn-warning t">Quantité : 1 </a></div>
//                         </div> `);                   
// visible.hide();
// pp.append(t);
//                };
//                 });
//           };
// });
            
             // var url = window.location.href;

// BOUTTON RETOUR:
// $("#bottom").click(function(){
//     window.location.href=url;
//     history.back();
//     location.reload(true);
//     console.log("retour");
// });
            // PLATS AFFICHAGE DE BASE :
// for (i=0;i<plt.length;i++){
// var item=plt[i];
// var iche=$( `

//             <div class="card col-12 T ml-1 mb-1 mr-1 col-md-3 ">
//     <img class="card-img-top img-fluid rounded himg" src="asset/food/${item.image}" alt="${item.libelle}">
//     <div class="card-body font-italic">
//         <h5 class="card-title font-weight-bold">${item.libelle}</h5>
//         <p class="card-text mb-4">${item.description} <br> Menu: ${item.prix} €</p>
//         <span class="stock7 text-danger"></span>
//     </div>
//     <div class="mt-auto mb-1 mt-2 text-center"> <a href="#" value="${item.id_plat}" class="btn btn-warning di t">Commander</a></div>
// </div>
//   `);


// aff.append(iche);
// var stock = iche.find(".stock7");
//     stock.text(item.active === 'Yes' ? '' : 'Disponible prochainement');                   
//     };
   


// CATEGORIE AFFICHAGE DE BASE:
//                 for (i = 0; i < ctg.length; i++) {
//                     var item = ctg[i];
//                     var resultat = $( `<div class="t  cat card custom-card col-12 col-md-3 ml-2 mr-2 mb-4 ">
//                 <img class=" card-img-top taille rounded img-fluid" src="asset/category/${item.image}" alt="${item.libelle}">
//                 <div class="card-body pl-3">
//                     <h3 value="${item.id_categorie}" class=" titre card-title font-weight-bold font-italic id">${item.libelle}</h3>
//                 <span class="stock text-danger"><span>
                  
//                 </div>
//             </div>`);
//                     affichage.append(resultat);
//                     console.log(resultat);
// var stock = resultat.find(".stock");
//     stock.text(item.active === 'Yes' ? '' : 'Disponible prochainement');
//  };
 // PLATS AFFICHAGE DE BASE DE 1 À 3:
    //             for (i = 0; i < 3; i++) {
    //                 var truc = plt[i];
    //                 var r = $( `
    //                 <div  class="card  col-12 col-md-3 ml-1 mb-1 ">
    //                                 <img  class="card-img-top rounded himg img-fluid "  src="asset/food/${truc.image}" alt="${truc.libelle}">
    //                                 <div class="card-body font-italic">
    //                                     <h5 class="card-title font-weight-bold ">${truc.libelle}</h5>
    //                                     <p class="card-text ">${truc.description}<br> Menu: ${truc.prix} €  </p>
    //                                     <span class="stock3 text-danger"><span>
    //                                 </div> 
    //                                 <div class="mt-auto mb-2 text-center"> <a href="#" value="${truc.id_plat}" class="btn btn-warning di t">passer commande</a></div>
    //                             </div>

    //     `);

    //                 affiche.append(r);


    //                 var stock = resultat.find(".stock3");
    // stock.text(truc.active === 'Yes' ? '' : 'Disponible prochainement');
    //             };
       })
        });
    </script>
</body>

</html>