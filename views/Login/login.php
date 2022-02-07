<?php include 'views/includes/header1.php';
?>

<?php
require __DIR__ . '/../../controllers/LoginController.php';


if(isset($_POST["submit"]))
{
    $login=new LoginController();
    $login->auth();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemonada">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link href="./Style/style.css" rel="stylesheet">
</head>
<style>
    #GFG {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #613155;
}

#GFG::before {
    content: "";
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;

    /* Specify the background image to be used */
    background-image:  url('images/backfashion.png') !important;
    background-size: cover;

    /* Specify the background image */
    opacity: 0.2;
}
</style>

<body>
    <div id="GFG">
    <div  class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5" style="
                        background: #FFFFFF;
                        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
                        border-radius: 27px;
                    ">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="border-radius: 5% 0% 0 5%;background-image: url(images/backlogonew.png);background-size:cover;">  </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4" style="font-family: 'Baloo Bhaijaan', cursive; font-size:22px;">Bienvenue à Salma's Fashion !</h4>
                                    </div>
                                    <form class="user" method="post">
                                 
                                        <div class="form-group" >
    <label for="Consumer key">Site</label>
    <input type="text" name="site" class="form-control" id="Consumer key" placeholder="Enter site url">

  </div>
  <div class="form-group" >
    <label for="Consumer key">Consumer key</label>
    <input type="password" name="ck" class="form-control" id="Consumer key" placeholder="Enter Consumer key">

  </div>
  <div class="form-group">
    <label for="secret key">Secret key</label>
    <input type="password" name="cs" class="form-control" id="secret key" aria-describedby="emailHelp" placeholder="Enter secret key">
  </div>
   <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit" style="background-color: rgb(186 15 114); border:none;font-size: 25px;">Connect</button>

                                          
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>





</div>
</div>
</div>
</div>

