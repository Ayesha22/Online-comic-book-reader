
<?php include 'header.php'?>
<?php include 'config.php'?>
<?php 
if(isset($_POST['submit'])){
  require 'config.php';
  $name1=$_POST['name'];
  $comment=$_POST['comment_content'];
  
$sql="INSERT INTO `user review`( `name`,`comment`) VALUES('$name1','$comment')";
mysqli_query($conn,$sql);
}
?>


<h3 style="margin-bottom: 20px";>REVIEW</h3>
<div  class="container-fluid" style="margin-top: 20px";>
	<form method="POST" id="comment_form" action="add_comment.php">
		<div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                </div>
		<div class="form-group">
                  <textarea name="comment_content" id="comment_content" class="form-control" placeholder="enter comment" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="submit" name="submit" id="submit" class="btn btn-info">
               
                <a href="index1.php"><button type="button" class="btn btn-info">Skip<button></a>
                	 </div>
            </form>
            
</div>

