<?php include 'header.php'?>
<?php include 'config.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Book Reader</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	
</head>
<body>


<!-- Navigation 
<Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1" class="active"></li>
	<li data-target="#slides" data-slide-to="2" class="active"></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="web project/marvel-movie_1263x544.png">
		<div class="carousel-caption">
			<!--<h1 class="display-2">Find your book</h1>
			<h3>easy and quick</h3>
			<!--<button type="button" class="btn btn-outline-light btn-lg">VIEW</button>
			<a href="marvels.php"><button type="button" class="btn btn-primary btn-lg">Get started</button></a>-->
		</div>
	</div>
	<div class="carousel-item">
		<img src="web project/Website_DC-Banners (2).jpg">
	</div>
	<div class="carousel-item">
		<img src="web project/jla.jpg">
	</div>
</div>
</div>


<!--Jumbotron--> 
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">A web portal to find and read comic books. Find your book - easy and quick</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="marvels.php"><button type="button" class="btn btn-outline-second btn-lg">Discover</button></a>
		</div>
	</div>
</div>



<!--- Three Column Section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fab fa-monero"></i>
            <h3>MARVEL</h3>
			<p>A new age marvel story</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fab fa-dochub"></i>
			<h3>DC</h3>
			<p>to new DC fans</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fab fa-meetup"></i>
			<h3>MANGA</h3>
			<p>To Japan and more</p>
		</div>
	</div>
</div>


<!--- Two Column Section -->
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-lg-6">
		<h2>If you buy it....</h2>
		<p>Comico.com is an online comic book store in India where you can discover,view and read your favourite Marvel comic books, DC comic books,Archie comics and Manga. We are India's only exclusive online comic book store with the largest collection of comic books and Graphic Novels.</p>
		<br>
		 <form action="search.php" method="post">
           <input type="text" name="texts" placeholder="Search..." class="form-control">
           		 <input type="submit" value="Search" name="textsearch" id="submit" class="btn btn-block">
	
          <!--  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>-->
          </form>
        </div>
	
	<div class="col-lg-6 container-fluid padding">
		<!--<img src="web project/capture.png" class="img-fluid">-->
		<script language="Javascript">
	var i=0;
	var images=[];
	var time=2000;

	images[0]='web project/marvel-movie.png';
	images[1]='web project/spiderman-game.jpg';
	images[2]='web project/16 - 1 (1).png';
	images[3]='web project/joker4.jpg';
	


	function changeImg(){
		document.slide.src = images[i];
		if(i<images.length-1){
			i++;

		}else{
			i=0;

		}
		setTimeout("changeImg()",time);
	}
	window.onload=changeImg;


</script>
<div class="container-fluid">
<img height="500" postion="center" name="slide" src="caputure.png" width="750" />
</div>
	</div>
</div>
</div>

<hr class="my-4">
<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
			
		</div>
	</div>
</figure>

<hr>
<!--- Emoji Section -->

  
<!--- Meet the team -->
<div class="container-fluid padding">
	<div class="row Welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Latest Release</h1>
		</div>
	</div>
</div>


<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-3">
		<div class="card">
            <img class="card-imd-top" src="web%20project/barutoManga.jpg">
			<div class="card-body">
				<h4 class="card-title">BARUTO</h4>
				<p class="card-text">A new gen story</p>
				<a href="search1.php" class="btn btn-outline-secondary">SEE MORE</a>
			</div>
	    </div>
    </div>
        <div class="col-md-3">
		<div class="card">
			<img class="card-imd-top" src="web%20project/marvel-the-sorcerer-supreme-original-imaes9hfvdzxatfd.jpeg">
			<div class="card-body">
                <h4 style='text-trasform:uppercase' class="card-title">sorcerer-supreme</h4>
				<p class="card-text">Strange world of doctors</p>
				<a href="search1.php" class="btn btn-outline-secondary">SEE MORE</a>
			</div>
	    </div>
        </div>
        <div class="col-md-3">
		<div class="card">
			<img class="card-imd-top" src="web%20project/DEathNote.jpg">
			<div class="card-body">
				<h4 class="card-title">DEATHNOTE</h4>
				<p class="card-text">A brief deathnote</p>
				<a href="search1.php" class="btn btn-outline-secondary">SEE MORE</a>
			</div>
	    </div>
        </div>
        <div class="col-md-3">
		<div class="card">
			<img class="card-imd-top" src="web%20project/Manga/Naruto-2jpg.jpg">
			<div class="card-body">
                <h4 class="card-title">Naruto-2</h4>
				<p class="card-text">A story of warrior</p>
				<a href="search1.php" class="btn btn-outline-secondary">SEE MORE</a>
			</div>
	    </div>
        </div>
</div>
</div>




<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>connect</h2>
		</div>
	<div class="col-12 social padding">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
	</div>

</div>
</div>
<?php include 'footer.php'?>
</body>
</html>