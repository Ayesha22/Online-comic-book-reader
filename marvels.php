<?php include 'header.php'?>
<?php include 'config.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Book Store</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
	
</head>
<body>

<div class="row">
<?php
$query= "SELECT `b_id`, `bname`, `bcategory`, `b_publisher`, `b_pdf`, `b_isbn`, `b_desc`, `b_img` FROM `book` WHERE bcategory='marvel'";

$result = mysqli_query($conn, $query);
	
$num=mysqli_num_rows($result);
if($num > 0){

	while($product=mysqli_fetch_array($result)){
		//print_r($product);
		?>
		<div class="col-lg-3 col-md-3 col-sm-12">
 	<form>
 		<div class="card">
 			<h6 class="card-title"><?php echo $product['bname']; ?></h6>
 			<div class="card-body">
 				<img src="<?php echo $product['b_img']; ?>" alt="hulk" title="Marvels" class="img-fluid">
 				<!--<h5>&#8377;<?php //echo $product['b_price'];?>  -->    
 				<a href="book.php?id=<?php echo $product['b_id'];?>" name="buy" class="btn btn-outline-secondary pull-right">DISCOVER</a></h5>
 				



 			</div>
 		</div>
 	</form>
 </div>


 <?php

}
}


?>
 


  <!-- Pagination -
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>-->
</div>
</div>
<?php include 'footer.php'?>
</body>
</html>