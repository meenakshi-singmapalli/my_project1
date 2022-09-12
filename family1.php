<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Family Games</title>
	<link rel="stylesheet" type="text/css" href="styling.css">
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
          				<button type="button" class="btn btn-outline-light text-dark  m-2"><a href="#Contact">Contact</a></button>
       	 			</li>
        			<li class="nav-item">
          				<button type="button" class="btn btn-outline-light text-dark  m-2"><a href="SignIn.html">Logout</a></button>
        			</li>
      			</ul>
    		</div>
    		<div class="dropdown">
    			<button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">---Family Games---</button>
    			<ul class="dropdown-menu">
      				<li><a class="dropdown-item" href="game1.php">Indoor Games Intro</a></li>
      				<li><a class="dropdown-item" href="Kids1.php">Kids Games</a></li>
      				<li><a class="dropdown-item" href="Young1.php">Young people Games</a></li>
      				<li><a class="dropdown-item" href="Old1.php">Old Games</a></li>
    			</ul>
  			</div>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      			<span class="navbar-toggler-icon"></span>
    		</button>
  
		</div>
	</nav>
	<br><br><br>
	<div class="content container" id="content">
		<h1>Family Indoor Games</h1>
		<h2>1. Pass The Story</h2>
		<p>This simple game can be a great family activity that  will enjoy. This family game is sure to get the creative juices flowing.</p>
		<img src="pass_story_family.jpg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
		<p>
			<b>What You Will Need : </b>
			<ul>
				<li>Pen</li>
				<li>Blank Paper</li>
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>1. The first player writes down the first line and folds that part of the paper horizontally. He/ she has to write only a couple of words in the second line and pass it on to the next player.<br>
2. All the subsequent players have to guess the previous line, complete the incomplete next line, and then add a couple of words in the new line before passing it on to the next player with the previous sentences folded and covered.<br>
3. Once everyone is done adding their creativity to the paper, unfold the paper to get the final story.<br>
4. The final story will be a hilarious, wacky tale.
</p>
			
			<p><b>Suggestion : </b>You can even ask the kids to pose in specific postures to make the game challenging.</p>

			<h2>2.	Musical Chairs :</h2>
		<p>This is a game for whole family.
</p>
		<p>
			<img src="chair_family.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
			<b>What You Will Need : </b>
			<ul>
				<li>Music</li>
				<li>Chair</li>
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>•	Place chairs (1 less than the total number of players) in a circle<br>
•	Play music and ask the players to dance around the chairs<br>
•	When the music stops, they will need to sit on the closest chair. The person without a chair is out of the game. This chair and music game is very much fun.


</p>
			
			<p><b>Suggestion : </b>You can ask the players to run around the chair to make it more challenging.`</p>

			<h2>3.Guess the Person :</h2>
		<p>This is a pure guessing game and can be played by the whole family.</p>
		<img src="hide-seek_family.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
		<p>
			<b>What You Will Need</b>
			<ul>
				<li>A piece of paper to write the names on</li>
				
				
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>•	Your kids will write a name of a family member, friend or teacher on the paper and keep it with him<br>
•	You will need to guess the right name of the person

</p>
		
			
			<p><b>Suggestion : </b>This game can be more interesting by giving clues about the person.`</p>

			<h2>4. Carom :</h2>
		<p>This four-player game is perfect for some family time.</p>
		<img src="carrom_family.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
		<p>
			<b>What You Will Need : </b>
			<ul>
				<li>Carrom Board</li>
				<li>Coins</li>
				
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>•	Aiming a striker, you will need to hit the other coins into the pockets on the corner of the board<br>
•	Different coloured coins have a different value, and the rules may differ across the region


			
			<p><b>Suggestion : </b>Make the game competitive by playing in teams.</p>

			<h2>5. Snakes and Ladder :</h2>
		<p>Snakes and ladder is a classic family game that can be enjoyed by everyone.</p>
		<img src="snake_family.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
		<p>
			<b>What You Will Need : </b>
			<ul>
				<li>The snake and ladder board game with dice and coins</li>
				
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>	•	Each person gets to roll the dice and move as many spaces as the number on the dice<br>
•	If you reach a ladder, you climb up, and if you fall on the mouth of a snake, you will need to drop down to the tail


		</p>
			
			<p><b>Suggestion : </b>Play this game with three or four players for the best time.</p>

	</div>
	<hr class="container">

	<div class="container">

		<ul class="pagination justify-content-center pg-dark" style="margin:20px 0">
    <li class="page-item"><a class="page-link" href="Old1.php">&laquo;</a></li>
    <li class="page-item"><a class="page-link" href="game1.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Kids1.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Young1.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Old1.php">4</a></li>
    <li class="page-item active"><a class="page-link" href="family1.php">5</a></li>
    <li class="page-item disabled"><a class="page-link" href="family1.php">&raquo;</a></li>
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