
<?php


require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['submit']))
{
$newCustomer= new CustomersController();
$newCustomer->addCustomer();


}
?>



 <div class="container mt-4 col-lg-8" style="margin-top:200px;">
            <div class="card border-info" style="
                        margin-top: 67px;
                        ">
                <div class="card-header bg-info">
                    <h4 style="
                        color: white;
                        ">Nouveau Client</h4>
                </div>
         <div class="card-body">
         
          <form class="user" method="post">
                 <table style="width:95%">    
                <tr style="margin-bottom:10px;">    
                  <td>Email: </td>   
                  <td style="width:128%"><input class="form-control form-control-user" type="text"  placeholder="Email" name="email"></td>  
                </tr>   
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Prénom : </td>   
                  <td><input class="form-control form-control-user" type="text"  placeholder="First name" name="first_name"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Nom: </td>   
                  <td> <input class="form-control form-control-user" type="text"  placeholder="Lastname" name="last_name"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Username : </td>   
                  <td> <input class="form-control form-control-user" type="text"  placeholder="Username" name="username"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Adresse : </td>   
                  <td> <input class="form-control form-control-user" type="text"  placeholder="Adress" name="address_1"></td>  
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
                     <td><input type="submit" name="submit" value="Ajouter Client"  class="btn btn-success"/></td> 
                     <td> <a href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=customer/list" class="btn btn-primary">Annuler</a> </td>
                </tr>  
              
                </table>                        
         </form>
                                      
      </div>
   </div>
</div>
