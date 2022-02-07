<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Order.php';
require __DIR__ . '/../../controllers/OrdersController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['id']))
{
$existOrder = new OrdersController();
$order=$existOrder->getoneOrder();
//print_r($order->line_items[0]->name);
//print_r($order->id);
}
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];

$existOrder = new OrdersController();
$existOrder->updateOrder($id);

}
?>

<div class="container mt-4 col-lg-8" style="margin-top:200px;">
            <div class="card border-info" style="
                        margin-top: 67px;
                        ">
                <div class="card-header bg-info">
                    <h4 style="
                        color: white;
                        ">Modifier la Commande</h4>
                </div>
         <div class="card-body">
         
          <form class="user" method="post">
          <div class="form-group"type='hidden' > 
            <label for="id">id</label>
            <input type="text" name="id" class="form-control" placeholder="customer" value="<?php echo $order->id;?>">
         </div>
                 <table style="width:95%">    
                <tr style="margin-bottom:10px;">    
                  <td>Prénom : </td>   
                  <td style="width:128%"> <input type="text" name="first_name" class="form-control" value="<?php echo $order->billing->first_name;?>"></td>  
                </tr>   
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Nom : </td>   
                  <td><input type="text" name="last_name" class="form-control"  value="<?php echo $order->billing->last_name;?>"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Numéro de télèphone : </td>   
                  <td> <input type="text" name="phone" class="form-control"  value="<?php echo $order->billing->phone;?>"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Email : </td>   
                  <td> <input type="text" name="email" class="form-control" value="<?php echo $order->billing->email;?>"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Adresse : </td>   
                  <td> <input type="text" name="address_1" class="form-control"   value="<?php echo $order->shipping->address_1;?>"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Produit ID du produit : <span><?php echo $order->line_items[0]->name;?></span></td>   
                  <td> <input type="text" name="product_id" class="form-control"   value="<?php echo $order->line_items[0]->product_id ;?>"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Quantité : </td>   
                  <td> <input type="text" name="quantity" class="form-control"   value="<?php echo $order->line_items[0]->quantity;?>"></td>  
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
                     <td><input type="submit" name="submit" value="Modifier la commande"  class="btn btn-success"/></td> 
                     <td> <a  href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=order/list" class="btn btn-primary">Annuler</a> </td>
                </tr>  
              
                </table>                        
         </form>
                                      
      </div>
   </div>
</div>