<?php include 'header.php'?>
<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Comic Reader</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<!--<link href="product_style.css" rel="stylesheet">-->
	
</head>
<body>

<?php 
$id1=$_GET['id'];
//echo $id1;

$query= "SELECT `bname`, `bcategory`, `b_pdf`, `b_desc`,`b_img` FROM `book` where b_id='$id1'";
//echo$query;
$result = mysqli_query($conn, $query);
	//echo $result;
$num=mysqli_num_rows($result);
if($num > 0){

	while($product=mysqli_fetch_array($result)){
		//print_r($product);
		?>
	
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-lg-6">
		<h2><?php echo $product['bname'];?></h2>
		<p><?php echo $product['b_desc'];?>They are confronted by the Justice League of America, who doubt their motives-and as their true plans unfold, the two teams do battle. Contains over 100 pages of bonus material!</p>
<h4>Bibliographic information</h4>
<p>Title-Justice: The Deluxe Edition<br>
Author-Jim Krueger<br>
Illustrated by-Alex Ross<br>
Publisher-DC Comics, 2019<br>
Length-496 pages</p>
		<br>

		<!--<a href="read1.php?id=<?php //echo $product['b_id'];?>" class="btn btn-primary">Read now</a>-->


<a href="read.php" class="btn btn-primary">Read now</a>
</div>
	<div class="col-lg-6">
		<img src="<?php echo $product['b_img'];?>" class="img-fluid">

	</div>
</div>
</div>

<?php
}
}
?>




</body>
</html>

