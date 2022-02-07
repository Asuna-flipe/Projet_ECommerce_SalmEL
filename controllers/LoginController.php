<?php
require_once '././models/Login.php';

class LoginController
{
    public function auth()
    {
       try{

      if(isset($_POST['submit']))
       {
           $data['ck']=$_POST['ck'];
           $data['cs']=$_POST['cs'];
           $data['site']=$_POST['site'];
           $result=Login::connect($data);
           session_start();
           $_SESSION['site']= $data['site'];
           $_SESSION['ck']= $data['ck'];
           $_SESSION['cs']=$data['cs'];

           $_SESSION['logged']=true;

           header('Location: http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/?page=product/list'); }

      }catch(Throwable  $ex){

            return redirect('http://localhost:8088/ELAAKKOUCHI_Salma_woocommercePhPApp/index.php')->with('msg', 'Wrong Informations!! please try again!');
        } 
    }
}
 ?>