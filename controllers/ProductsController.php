<?php
require_once '././models/Product.php';

class ProductsController{
   public function getAllProducts()
   {
       $products= Product::getAll();
       return $products;
   } 


        
public function addProduct()
{
    if(isset($_POST['submit']))
    {
      
     //   echo($_POST["name"]);
       // echo($_FILES["fileUpload"]["name"]);

     $data = [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'regular_price' =>  $_POST['regular_price'],
        'description' => $_POST['description'],
        'short_description' => $_POST['short_description'],
        'categories' => [
            [
                'id' => 9
            ],
            [
                'id' => 14
            ]
        ],
        'images' => [
            [
                
                'src' => 'http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/images/'.$_FILES["fileUpload"]["name"],
            ],
        ]
    ];


    }

    Product::add($data);
    header('Location: http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=product/list');

}
public function getoneProduct()
{
    if(isset($_POST['id']))
    {
        $data= array(
            'id' => $_POST['id']
        );
    }
  $product= Product::getProduct($data);
  return $product;
}


public function updateProduct($id)
{
    if(isset($_POST['submit']))
    {
      
        echo($_FILES["fileUpload"]["name"]);
    
     $data = [
         
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'regular_price' =>  $_POST['regular_price'],
        'description' => $_POST['description'],
        'short_description' => $_POST['short_description'],
        'categories' => [
            [
                'id' => 9
            ],
            [
                'id' => 14
            ]
        ],
        'images' => [
            [
                
                'src' => 'http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/images/'.$_FILES["fileUpload"]["name"],
            ],
           
        ]
    ];
    }

   Product::update($data,$id);
   header('Location: http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=product/list');

}
public function deleteProduct()
{
    if(isset($_POST['id']))
    {
        $data['id']= $_POST['id'];
        
    }
  Product::delete($data);
  header('Location: http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=product/list');

}


}
?>