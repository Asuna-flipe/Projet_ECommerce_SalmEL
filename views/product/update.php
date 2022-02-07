<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Product.php';
require __DIR__ . '/../../controllers/ProductsController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['id']))
{
$existProduct = new ProductsController();
$product=$existProduct->getoneProduct();
print_r($product->images[0]->name);
}
if(isset($_POST['submit']))
{
        $id=$_POST['id'];
        $name=$_POST['name'];

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
                        $existProduct = new ProductsController();
                        $existProduct->updateProduct($id);
                    }
                }
            }
        
        }
        else{
            $statusMsg = 'Please Select a file to upload.' .$backlink;
        }
        
           echo $statusMsg;



$existProduct = new ProductsController();
$existProduct->updateProduct($id);

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
         
          <form class="user" method="post" enctype="multipart/form-data">

          <div class="form-group"type='hidden' > 
            <input type="hidden" name="id" class="form-control" placeholder="customer" value="<?php echo $product->id;?>">
        </div>
                 <table style="width:95%">    
                <tr style="margin-bottom:10px;">    
                  <td>Nom de produit: </td>   
                  <td style="width:128%"><input class="form-control form-control-user" type="text"  value="<?php echo $product->name;?>" name="name"></td>  
                </tr>   
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Type de produit: </td>   
                  <td><input class="form-control form-control-user" type="text"   value="<?php echo $product->type;?>" name="type"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Prix de produit: </td>   
                  <td><input class="form-control form-control-user" type="text" value="<?php echo $product->regular_price;?>" name="regular_price"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Description de produit: </td>   
                  <td><input class="form-control form-control-user" type="text"   value="<?php echo $product->description;?>" name="description"></td>  
                </tr>  
                <tr style="
                        height: 23px;
                        ">
                        <td></td>
                </tr>
                <tr>    
                  <td>Description courte sur le produit: </td>   
                  <td><input class="form-control form-control-user" type="text"  value="<?php echo $product->short_description;?>" name="short_description"></td>  
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
                         <input id="files" name="fileUpload" type="file" class="hidden" title="<?php echo $product->images[0]->name;?>">
                         <label for="files"><?php echo $product->images[0]->name;?></label>
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
                     <td><input type="submit" name="submit" value="Modifier produit"  class="btn btn-success"/></td> 
                     <td> <a href="http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=product/list" class="btn btn-primary">Annuler</a> </td>
                </tr>  
              
                </table>                        
         </form>
                                      
      </div>
   </div>
</div>
    

