<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Kids Games</title>
	<link rel="stylesheet" type="text/css" href="styling.css">
	<style>
		img {

		}
	</style>
</head>
<body>
	<?php session_start(); 
	 ?>
	<div class="main_heading p-2 text-center" id="Home">
		
  		<h1><img src="logo.jpg" align="left" class="image"><span style='font-size:60px;'>&#8458;</span>ames<span style='font-size:60px;'>4</span>u</h1>
  		<p>Add Fun To Your Life</p> 
	</div><br><br>

<!---navigation bar-->

	<nav class="navbar navbar-expand-sm navbar-dark sticky-top">
 	 	<div class="container-fluid">
    		<div class="collapse navbar-collapse" id="mynavbar">
      			<ul class="navbar-nav me-auto">
      				<li class="nav-item" id="nav-item">
          				<img src="user_logo.jpg" style="height: 35px; width: 35px; border-radius: 20px; margin-top: 6px;">
        			<spam style="color: white; font-size: 20px; font-weight: 600; margin-right: 28px;" class="btn" ><?php echo $_SESSION['username']; ?></spam></li>
       	 			<li class="nav-item" id="nav-item">
          				<button type="button" class="btn btn-outline-light text-dark  m-2"><a href="#Home">Home</a></button>
        			</li>
        			<li class="nav-item">
          				<button type="button" class="btn btn-outline-light text-dark m-2"><a href="#Contact">Contact</a></button>
       	 			</li>
        			<li class="nav-item">
          				<button type="button" class="btn btn-outline-light text-dark m-2"><a href="SignIn.html">Logout</a></button>
        			</li>
      			</ul>
    		</div>
    		<div class="dropdown">
    			<button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">---Kids Games---</button>
    			<ul class="dropdown-menu">
      				<li><a class="dropdown-item" href="game1.php">Indoor Games Intro</a></li>
      				<li><a class="dropdown-item" href="Young1.php">Young People Games</a></li>
      				<li><a class="dropdown-item" href="Old1.php">Old people Games</a></li>
      				<li><a class="dropdown-item" href="family1.php">Family Games</a></li>
    			</ul>
  			</div>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      			<span class="navbar-toggler-icon"></span>
    		</button>
  
		</div>
	</nav>
	<br>
	<div class="content container" id="content">
		<h1>Indoor Games For Kids</h1>
		<h2>1. Balancing Beam</h2>
		<p>This is an easy activity and can be great for younger kids and toddlers and helps them improve motor skills and their balance.</p>
		<img src="balance_kids.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
		<p>
			<b>What You Will Need : </b>
			<ul>
				<li>Coloured tape</li>
				<li>Flat floor space to play</li>
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>Stick different coloured tapes tape on the floor.
			Each coloured tape can have a different rule to walk on. For example, you can ask the kid to walk on one leg on the red coloured tape
			The child has to walk only on the tape. If he falls off the tape, he’ll be out of the game.
			The child that walks the entire length of the tape without falling off the tape wins the game</p>
			
			<p><b>No. of participants : 1 or 2</b></p>

			<h2>2. Indoor Bowling :</h2>
		<p>Create a simple bowling alley in your house and have fun. This game is also ideal for hand-eye coordination in children.</p>
		<p>
			<img src="Indoor_Bowling_kids.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
			<b>What You Will Need : </b>
			<ul>
				<li>Flat floor space to play</li>
				<li>Ten empty bottles or soda cans</li>
				<li>Plastic ball or a tennis ball</li>
				<li>Tape</li>
				<li>Marker</li>
				<li>Spray Paint</li>
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>Using the tape, create a bowling lane
			Peel off the wrappers of the cans and the bottles and spray paint them. Allow them to dry.
			Arrange the bottles at the end of the line. You may arrange it like bowling pins or stack them on top of each other to form a pyramid
			Ask the child to strike this arrangement using the ball
</p>
			
			<p><b>No. of participants : 1 or 2</b></p>

			<h2>3. Hide and seek :</h2>
		<p>With some space inside the house, you can play this for hours.</p>
		<img src="Hide_and_seek_kids.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
		<p>
			<b>Required Area</b>
			<ul>
				<li>Space to play inside the house</li>
				
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>Ask one child to close his eyes and count till 20 until the rest of them hide in different places</p>
		
			<ul>
				<li>Once the seeker is done with counting, he will have to go to find others</li>
				<li>The first person to be caught has to count the next time when the others hide again</li>
			</ul>
		</p>
			
			<p><b>No. of participants : Group of kids</b></p>

			<h2>4. Bubble game:</h2>
		<p>This is one of the easiest ways to enjoy bubbles indoor without creating a mess.</p>
		<img src="Bubble_kids.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
		<p>
			<b>What You Will Need : </b>
			<ul>
				<li>Straw</li>
				<li>Dishwashing soap</li>
				<li>Plate</li>
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>Place a small amount of dishwashing soap on a plate and pour some water on it and mix it until some suds begin to form.
Ask your child to place one end of the straw in the suds and blow gently from the other end to make bubbles.
</p>
			
			<p><b>No. of participants : 1 or More</b></p>

			<h2>5. Musical chair :</h2>
		<p>It is an energetic game which brings energy among kids</p>
		<img src="Chair_kids.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
		<p>
			<b>What You Will Need : </b>
			<ul>
				<li>Music</li>
				<li>Chairs</li>
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>	• Place chairs (1 less than the total number of players) in a circle<br>
				•	Play music and ask the players to dance around the chairs<br>
				•	When the music stops, they will need to sit on the closest chair. The person without a chair is out of the game. This chair and music game is very much fun
		</p>
			
			<p><b>No. of participants : A Group of People</b></p>

	</div>
	<hr class="container">

	<div class="container">

		<ul class="pagination justify-content-center pg-dark" style="margin:20px 0">
    <li class="page-item"><a class="page-link" href="game1.php">&laquo;</a></li>
    <li class="page-item"><a class="page-link" href="game1.php">1</a></li>
    <li class="page-item active"><a class="page-link" href="Kids1.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Young1.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Old1.php">4</a></li>
    <li class="page-item"><a class="page-link" href="family1.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Young1.php">&raquo;</a></li>
  </ul>

  </div>
  <hr class="container">
  <div class="container" id="Contact">
  	<h2>Contact info</h2>
  	<footer class="text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-floating m-1"
        
        href="#!"
        role="button"
        ><i class="fa fa-facebook"></i></a>

      <!-- Twitter -->
      <a
        class="btn  btn-floating m-1"
        
        href="#!"
        role="button"
        ><i class="fa fa-twitter"></i></a>

      <!-- Google -->
      <a
        class="btn btn-floating m-1"
        
        href="#!"
        role="button"
        ><i class="fa fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-floating m-1"
        
        href="#!"
        role="button"
        ><i class="fa fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-floating m-1"
        
        href="#!"
        role="button"
        ><i class="fa fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-floating m-1"
        
        href="#!"
        role="button"
        ><i class="fa fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #000080;">
    © Copyright 2022 games4u. All Rights Reserved <br>
    <a class="text-white" href="#" style="text-decoration: underline;">Tearms & Privacy Policy</a>
  </div>
  <!-- Copyright -->
</footer>
  </div>
  
</body>
</html>