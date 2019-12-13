<?php include 'config.php'?>
<?php 
session_start();
if(isset($_POST['login'])){
  $mail=$_POST['email'];
  $pwd=md5($_POST['password']);
  $sql = "SELECT * FROM userinfo WHERE email = '$mail' and password = '$pwd'";
      $result = mysqli_query($conn,$sql);
      $total=mysqli_num_rows($result);
      if($total==1){
        $_SESSION['email_']=$mail;
        echo"login success";
        header('location:index1.php');

      }
else{
 echo "<script>alert('Login fail.');</script>";
}
}

 









/*

if(isset($_POST['login'])){
  
  $mail=$_POST['email'];
  $pwd=md5($_POST['password']);
  session_start();
  if(isset($_SESSION['email'])){
    echo "<h1>Welcome" .$_SESSION['email']."</h1>";
    echo "<br><a href='index1.php'><input type=button value=logout></a>";
  }
  else{
    if($_POST['email']==$mail && $_POST['password']==$pwd){
      $_SESSION['email']=$mail;
      echo "<script>location.href='marvels.php'</script>";

    }
  }
}

/* $sql = "SELECT id FROM userinfo WHERE email = '$mail' and password = '$pwd'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         echo "success";
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }
}*/
?>