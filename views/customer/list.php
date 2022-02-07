<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';
require __DIR__ .'/../../views/includes/header.php';


$data = new CustomersController();
$customers= $data->getAllCustomers();

?>
 <div class="topnav" style="display:flex;justify-content:space-between; background-color:white;margin:30px;">
      <div class="logoimg">
          <img   src="images/logo_ecommerce.png" style="width:234px; height:80px"/>
      </div>
      <div style="margin-top:6px">
        <a  href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=product/list">Liste des produits</a>
        <a href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=order/list">Liste des commandes</a>
        <a class="active" href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=customer/list">Liste des clients</a>
      </div>
      <div>
         <a class="logout" href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/logout.php"><button style="border: 3px solid #af0e6b;" type="button" class="btn btn-outline-warning logout-btn">Se déconnecter</button></a>
      </div>
  </div>  


  <div class="container mt-4">
            <div class="card border-info" style="
              width: 136%;
              margin-left: -17%;
          ">
                 <div class="card-header bg-info text-white">
                     <h1> <center> GESTION DES CLIENTS </center> </h1>
                </div>
                <br>
                <div class="card-header bg-info text-white">
                <a  class="btn btn-light" role="button" href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=customer/add" add style=";margin-top: 20px;  text-align: center;font-size: 18px;'Baloo Bhaijaan', cursive;width: 140px;height: 40px">Ajouter client</a>
                </div>
                
<div class="card-body"> 
<table class="table table-hover">  
  <thead>
    <tr colspan=7>
      <th scope="col">ID Client</th>
      <th scope="col">Email</th>
      <th scope="col">Client</th>
      <th scope="col">Username</th>
      <th scope="col">Adresse</th>
         <th scope="col">Action</th>
      
    
    </tr>
  </thead>
                                          
                                <?php
                  foreach($customers as $customer){
                  echo "<tr><td>" . $customer["id"]."</td>
                            <td>" . $customer["email"]."</td>
                            <td>" . $customer["first_name"]." ".$customer["last_name"]."</td>
                            <td>" . $customer["username"]."</td>
                            <td>" .  $customer["billing"]["address_1"]."</td>
                            
                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=customer/update'>
                            <input type='hidden' name='id' value=".$customer["id"].">
                            <button class='btn btn-success'>Modifier Client</button>
                            </form>
                           

                           
                            <form method='post' class='mr-1' action='?page=customer/delete'>
                            <input type='hidden' name='id' value=".$customer["id"].">
                             <button class='btn btn-danger' onclick=myselect3()>Supprimer Client</button>
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
    function myselect3()
    {
      console.log("clicked");
      if (!(confirm('Etes vous sur de vouloir supprimer ce Client ?'))) return false;
    }
</script>