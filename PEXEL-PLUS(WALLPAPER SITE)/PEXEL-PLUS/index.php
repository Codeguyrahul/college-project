<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <title>Bootstrap </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
 <body>

<?php  include 'menu.php'; ?>   

 

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\pic1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\pic2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\pic3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


	</div>
	</div>
</section>
<section  class="my-5">
    <div class="py-5">
        <h2 class="text-center">PICTURE </h3>
	</div>
	<div class="container-fluid">


	    <div class="row">
           <div class="col-lg-4 col-md-4 col-12">
           	<div class="card">

                <img class="card-img-top" src="img\laptop.jpg" alt="Card image">

                <div class="card-body">

                    <h4 class="card-title">desktop wallpaper</h4>

                    <p class="card-text">laptop/pc</p>

                    <a href="drive.php" class="btn btn-primary">click here</a>
                </div>

                </div>

                </div>

                 <div class="col-lg-4 col-md-4 col-12">
           	<div class="card">

                <img class="card-img-top" src="img\tablet1.jpg" alt="Card image">

                <div class="card-body">

                    <h4 class="card-title">tablet wallpaper</h4>

                    <p class="card-text">tab&ipads</p>

                    <a href="drive1.php" class="btn btn-primary">click here</a>
                </div>
                
                </div>

                </div>
                 <div class="col-lg-4 col-md-4 col-12">
           	<div class="card">

                <img class="card-img-top" src="img\iphone12.jpg" alt="Card image">

                <div class="card-body">

                    <h4 class="card-title">phone wallpaper</h4>

                    <p class="card-text">mobile& iphone</p>

                    <a href="drive2.php" class="btn btn-primary">click here</a>
                </div>
                
                </div>

                </div>

            </div>
		
	     </div>
	</section>
<section  class="my-5">
	
	<div class="py-5">
		<h1 class="text-center">About Us</h1>
	</div>
	<div class="container-fluid">
	<div class="row">	
	
	<div class="col-lg-6 col-md-6 col-12">
		<img src="img\pic4.jpg" class="img-fluid aboutimg">
	</div>
	<div class="col-lg-6 col-md-6 col-12">

	 <h2 class="display-4">PEXELS PLUS</h2>

	 <P clas=" py-3">this website is easy to use for download and find the picture</P>
	<a href="about.php" class="btn btn-success" >more</a>
</section>
	
	

	
	<section  class="my-5">
    <div class="py-3">
      <h2 class="text-center">Log In / Sign Up</h2>
	  </div>
	
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="Email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Contact</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="Comments"></textarea>
				</div>
			

				<button type="submit" class=" btn btn-success">log in</button>
        <button type="submit" class=" btn btn-success">sign up</button>
				
			
		</form>
	</div>

    
      
    </form>
  </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">pexels plus.com</p>
</footer>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>