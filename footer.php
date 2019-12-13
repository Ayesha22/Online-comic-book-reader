<?php include 'config.php'?>
<?php 
if(isset($_POST['emailsubscribe'])){
	$subscriberemail1=$_POST['subscriberemail'];
	
$sql="INSERT INTO tblsubscriber(`SubscriberEmail`) VALUES('$subscriberemail1')";
mysqli_query($conn, $sql);

echo "<script>alert('Subscribed successfully.');</script>";


}
?>

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
  

</head>


<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
			
				<img src="capture.png">
				<p style="margin-top: 20px";><a href="about.php">About us</a></p>
				

				<!--<hr class="light">
				<p>newbie.@gmail.com</p>
				<p>street</p>-->
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Contact us</h5>
				<hr class="light">
				<p>comico.@gmail.com</p>
				<p>9174-4444-3211</p>
			</div>
			<!--<div class="col-md-4">
				<hr class="light">
				<h5>our hours</h5>
				<hr class="light">
				<p>email.ff@gmail.com</p>
				<p>street</p>
			</div>-->
			<div class="col-md-4">
          <h6>Subscribe Newsletter</h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" name="emailsubscribe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest comic news to our subscribed users every week.</p>
          </div>
        </div>
			<div class="col-12">
				<hr class="light">
				<h5>&copy;comico.com</h5>
			</div>

		</div>
	</div>
</footer>


</html>