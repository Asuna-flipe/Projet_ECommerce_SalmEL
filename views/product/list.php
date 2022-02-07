<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');

$data = new ProductsController();
$products= $data->getAllProducts();
//dd($products);

?>

  <div class="topnav" style="display:flex;justify-content:space-between; background-color:white;margin:30px;">
      <div class="logoimg">
          <img   src="images/logo_ecommerce.png" style="width:234px; height:80px"/>
      </div>
      <div style="margin-top:6px">
        <a class="active" href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=product/list">Liste des produits</a>
        <a href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=order/list">Liste des commandes</a>
        <a href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=customer/list">Liste des clients</a>
      </div>
      <div>
         <a class="logout" href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/logout.php"><button  onclick=logout() style="border: 3px solid #af0e6b;" type="button" class="btn btn-outline-warning logout-btn">Se déconnecter</button></a>
      </div>
  </div>  

  <div class="container mt-4">
            <div class="card border-info">
                 <div class="card-header bg-info text-white">
                     <h1> <center> GESTION DES PRODUITS </center> </h1>
                </div>
                <br>
                <div class="card-header bg-info text-white">
                    <a class="btn btn-light" role="button" href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=product/add" add style=";margin-top: 20px;  text-align: center;font-size: 18px;'Baloo Bhaijaan', cursive;width: 140px;height: 40px">Ajouter Produit</a>
                </div>
                
<div class="card-body"> 
<table class="table table-hover">  
  <thead>
    <tr colspan=7>
      <th scope="col">ID</th>
      <th scope="col">Nom du produit</th>
      <th scope="col">Type du produit</th>
      <th scope="col">Prix</th>
      <th scope="col">Total des ventes</th>
      <th scope="col">Statut</th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <tbody>
                                              <?php
                  foreach($products as $product){
                  echo "<tr><td>" . $product["id"]."</td>
                            <td>" . $product["name"]."</td>
                            <td>" . $product["type"]."</td>
                            <td>" . $product["price"]."</td>
                            <td>" . $product["status"]."</td>
                            <td>" . $product["total_sales"]."</td>
                            <td><img class='rounded-circle mr-2' width='60' height='60'  height='50px' width='50px' src='".$product["images"][0]["src"]."'></td>
                    

                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=product/update'>
                            <input type='hidden' name='id' value=".$product["id"].">
                            <button class='btn btn-success'>Modifier</button>
                            </form>
                           

                           
                            <form method='post' class='mr-1' action='?page=product/delete'>
                            <input type='hidden' name='id' value=".$product["id"].">
                            <button class='btn btn-danger' onclick=myselect()>Supprimer</button>
                            </form>
                            </td>
                            
                            </tr>";
                
                  }
                  ?>
                  </tbody>
</table>


</div>
 </div>
            
</div>

<script>
    function myselect()
    {
      console.log("clicked");
      if (!(confirm('Etes vous sur de vouloir supprimer ce produit ?'))) return false;
    }

    function logout()
    {
      console.log("clicked logout");
      if (!(confirm('Etes vous sur de vouloir se déconnecter ?'))) return false;
    }

    
</script>