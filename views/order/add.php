<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['submit']))
{
$newOrder = new OrdersController();
$newOrder->addOrder();


}
?>

 <div class="container mt-4 col-lg-8" style="margin-top:200px;">
            <div class="card border-info" style="
                        margin-top: 67px;
                        ">
                <div class="card-header bg-info">
                    <h4 style="
                        color: white;
                        ">Nouvelle Commande</h4>
                </div>
         <div class="card-body">
         
          <form class="user" method="post">
                 <table style="width:95%">    
                <tr style="margin-bottom:10px;">    
                  <td>Prénom : </td>   
                  <td style="width:128%"> <input type="text" name="first_name" class="form-control" placeholder="customer firstName"></td>  
                </tr>   
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Nom : </td>   
                  <td><input type="text" name="last_name" class="form-control" placeholder="customer LastName"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Numéro de télèphone : </td>   
                  <td> <input type="text" name="phone" class="form-control" placeholder="customer Phone"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Email : </td>   
                  <td> <input type="text" name="email" class="form-control" placeholder="customer Email"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Adresse : </td>   
                  <td> <input type="text" name="address_1" class="form-control" placeholder="customer Adress"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Id du produit: </td>   
                  <td><input type="text" name="product_id" class="form-control" placeholder="Product Id"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>   
                 
                <td>Quantité : </td>   
                <td> 
                     <input type="text" name="quantity" class="form-control" placeholder="Product Quantity">
                </td>
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr style="
                        display: flex;
                        justify-content: space-between;
                        width: 267%;
                        "> 
                     <td><input type="submit" name="submit" value="Ajouter commande"  class="btn btn-success"/></td> 
                     <td> <a  href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=order/list" class="btn btn-primary">Annuler</a> </td>
                </tr>  
              
                </table>                        
         </form>
                                      
      </div>
   </div>
</div>