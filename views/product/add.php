<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['submit']))
{

       $statusMsg = '';
        $backlink = '<a href="./">Go back</a>';
        $targetDir = 'images/';
        $fileName = basename($_FILES["fileUpload"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        
        if(isset($_POST["submit"]) && !empty($_FILES["fileUpload"]["name"])) {
            $allowTypes = array('jpg', 'png','jpeg','gif','pdf');
            if(!file_exists($targetFilePath))
            {
                if(in_array($fileType,$allowTypes)) {
                    if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFilePath)) {
                        $newProduct = new ProductsController();
                        $newProduct->addProduct();
                    }
                }
            }
        
        }
        else{
            $statusMsg = 'Please Select a file to upload.' .$backlink;
        }
        
           echo $statusMsg;
        

//$newProduct = new ProductsController();
//$newProduct->addProduct();


}


?>

<div class="container mt-4 col-lg-8" style="margin-top:200px;">
            <div class="card border-info" style="
                        margin-top: 67px;
                        ">
                <div class="card-header bg-info">
                    <h4 style="
                        color: white;
                        ">Nouveau Produit</h4>
                </div>
         <div class="card-body">
         
          <form  class="user" method="post" enctype="multipart/form-data">
                 <table style="width:95%">    
                <tr style="margin-bottom:10px;">    
                  <td>Nom de produit: </td>   
                  <td style="width:128%"><input class="form-control form-control-user" type="text"  placeholder="Name..." name="name"></td>  
                </tr>   
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Type de produit: </td>   
                  <td><input class="form-control form-control-user" type="text"  placeholder="type..." name="type"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Prix de produit: </td>   
                  <td><input class="form-control form-control-user" type="text"  placeholder="Regular Price..." name="regular_price"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Description de produit: </td>   
                  <td><input class="form-control form-control-user" type="text"  placeholder="Description..." name="description"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Description courte sur le produit: </td>   
                  <td><input class="form-control form-control-user" type="text"  placeholder="Short Description..." name="short_description"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
               
                <tr>   
                <td> 
                   <div class="form-group"> 
                        <label for="customer">images</label>
                         <input name="fileUpload" type="file"  class="hidden" >
                         
                    </div>
                  
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
                     <td><input type="submit" name="submit" value="Ajouter produit"  class="btn btn-success"/></td> 
                     <td> <a href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=product/list" class="btn btn-primary">Annuler</a> </td>
                </tr>  
              
                </table>                        
         </form>
                                      
      </div>
   </div>
</div>
    
