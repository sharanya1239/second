<?php
session_start();
if(isset($_POST["Login"]))
{
    $_SESSION["name"] = $_POST["username"];
     $_SESSION['last_login_timestamp'] = time();
    header("location:index2.php");
}
?>

<html>
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
   <div class="w3-top" style="background-color:#B03060">
  <div class="w3-bar  w3-card" style="background-color:#B03060">
  <h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;background-color:#B03060;" ><img class="img-responsive sp-default-abs" src="image/joy.jpg" width="10%" style="padding-bottom: 13px;" alt="abs"> </h1>
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  
  </div>
</div>
  
    <style type="text/css">
        #ab1:hover{cursor:pointer;}
    </style>
<body style="background:url('image/hs.jpg')no-repeat;background-size:cover;">
   
<div class="container"   style="width:400px;margin-top:10px;">
    <div class="card">
        <img src="image/tar.jpg" class="card-img-top">
    <div class="card-body">
    <form class="form-group" ! action="func.php" method="post">
        <label>Username  : </label><br>
        <input type="text" name="username" class="form-control" placeholder="enter username"><br>
        <label>Password  :</label><br>
        <input type="password" name="password" class="form-control" placeholder="enter password"><br>
        <input type="Submit" name="Login" id="ab1" class="btn btn-primary">
    </form>
    </div>
    </div>
    </div>
  
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>                                                 </body>
</html>
