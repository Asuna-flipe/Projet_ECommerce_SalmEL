<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');

$data = new OrdersController();
$orders= $data->getAllOrders();
//print_r($orders[0]["line_items"][0]["name"]);

?>
 <div class="topnav" style="display:flex;justify-content:space-between; background-color:white;margin:30px;">
      <div class="logoimg">
          <img   src="images/logo_ecommerce.png" style="width:234px; height:80px"/>
      </div>
      <div style="margin-top:6px">
        <a  href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=product/list">Liste des produits</a>
        <a class="active" href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=order/list">Liste des commandes</a>
        <a href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=customer/list">Liste des clients</a>
      </div>
      <div>
         <a class="logout" href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/logout.php"><button style="border: 3px solid #af0e6b;" type="button" class="btn btn-outline-warning logout-btn">Se déconnecter</button></a>
      </div>
  </div>  

  <div class="container mt-4">
            <div class="card border-info" style="
              width: 151%;
              margin-left: -25.5%;
          ">
                 <div class="card-header bg-info text-white">
                     <h1> <center> GESTION DES COMMANDES </center> </h1>
                </div>
                <br>
                <div class="card-header bg-info text-white">
                <a class="btn btn-light" role="button" href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=order/add" add style=";margin-top: 20px;  text-align: center;font-size: 18px;'Baloo Bhaijaan', cursive;width:200px;height: 40px">Ajouter commande</a>
                </div>
                
<div class="card-body"> 
<table class="table table-hover">  
  <thead>
    <tr colspan=7>
      <th scope="col">ID Commande</th>
      <th scope="col">Client</th>
      <th scope="col">Adresse</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Product ID</th>
      <th scope="col">Quantité</th>
      <th scope="col">Date commande</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
                                          
   
  <tbody>
                                              <?php
                                              $i=0;
                  foreach($orders as $order){
                  echo "<tr><td>" . $order["id"]."</td>
                            <td>" .  $order["billing"]["first_name"]." ".$order["billing"]["last_name"]."</td>
                           
                            <td>" . $order["shipping"]["address_1"]."</td>
                            <td>" . $order["billing"]["phone"]."</td>
                            <td>" . $order["billing"]["email"]."</td>
                            <td>" . $orders[$i]["line_items"][$i]["product_id"] ." : ".$orders[$i]["line_items"][$i]["name"]  ."</td>
                            <td>" . $orders[$i]["line_items"][$i]["quantity"]."</td>
                            <td>" . $order["date_created"]."</td>
                            <td>" . $order["status"]."</td>
                          
                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=order/update'>
                            <input type='hidden' name='id' value=".$order["id"].">
                            <button class='btn btn-success'>Modifier</button>
                            </form>
         
                           
                            <form method='post' class='mr-1' action='?page=order/delete'>
                            <input type='hidden' name='id' value=".$order["id"].">
                            <button class='btn btn-danger' onclick=myselect2()>Supprimer</button>
                            </form>
                            </td>
                            
                            </tr>";
                           // $i++;
                  }
                  
                  ?>
                  </tbody>
</table>

</div>
 </div>
            
</div>

<script>
    function myselect2()
    {
      console.log("clicked");
      if (!(confirm('Etes vous sur de vouloir supprimer cette commande ?'))) return false;
    }
</script>