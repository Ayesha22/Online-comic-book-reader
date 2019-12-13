
<?php include 'config.php'?>
<?php

if(isset($_GET['id2'])){
	$id1=$_GET['id2'];
}
$query= "SELECT `b_pdf` FROM `book` where b_pdf='$id1'";
//echo$query;
$result = mysqli_query($conn, $query);
while($product=mysqli_fetch_array($result)){

	

$filename = $product['b_pdf']; 
  //print_r($filename);
 //echo $projectid;  
/*
$file=$product['b_pdf'];
$filename=$product['b_pdf'];*/
header('Content-type:application/pdf');
header('Content-Disposition:inline;filename="'.$filename.'"');
header('Content-Transfer-Encoding:binary');
header('Accept-Ranges:bytes');
@readfile($filename);


}

?>
