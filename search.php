 <?php include 'header.php'?>
<div class="row">
<?php
if(isset($_POST['textsearch'])){
	require 'config.php';
$strkey=$_POST['texts'];
$sql="SELECT * FROM `book` where bname like '%".$strkey."%'";
$query=mysqli_query($conn,$sql);
$num=mysqli_num_rows($query);
if($num > 0){
while($product=mysqli_fetch_array($query)){
	?>

<div class="col-lg-3 col-md-3 col-sm-12">
	<form>

	<div class="card">
 			<h3 class="card-title"><?php echo $product['bname']; ?></h3>
 			<div class="card-body">
 				<img src="<?php echo $product['b_img']; ?>" alt="hulk" class="img-fluid">
 				    
 		<a href="book.php?id=<?php echo $product['b_id'];?>" name="buy" class="btn btn-outline-secondary pull-right">DISCOVER</a></h5>
 				



 			</div>
 		</div>
 	</form>
 </div>

<?php
}
}
}
?>
</div>