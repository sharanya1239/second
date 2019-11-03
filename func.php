<?php
$con=mysqli_connect("localhost","root","","test");
if(isset($_POST['Login'])){ 
$username=$_POST['username'];
$password=$_POST['password'];
$query="select  * from logindb where username='$username' and  password='$password'";  
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
   header("location:abshetty.php");
}
else
{
     echo "<script>alert('error login')</script>";
     echo "<script>window.open('login1.php','_self')</script>";
}
}

?>