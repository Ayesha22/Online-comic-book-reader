
<?php 
if(isset($_POST['signup'])){
  require 'config.php';
  $name=$_POST['name'];
  //$pwd=$_POST['password'];-->
  $pwd=md5($_POST['password']); 
  $mail=$_POST['email'];
  $phone=$_POST['phone'];
  $add=$_POST['address'];
$sql="INSERT INTO userinfo(`name`, `password`, `email`, `phone`,`address`) values('$name','$pwd','$mail','$phone','$add') ";
mysqli_query($conn,$sql);
 echo "<script>alert('Registered successfully.');</script>";


}

?>