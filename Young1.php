<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Young People Games</title>
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
    			<button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Young People Games</button>
    			<ul class="dropdown-menu">
      				<li><a class="dropdown-item" href="game1.php">Indoor Games Intro</a></li>
      				<li><a class="dropdown-item" href="Kids1.php">Kids Games</a></li>
      				<li><a class="dropdown-item" href="Old1.php">Old people Games</a></li>
      				<li><a class="dropdown-item" href="family1.php">Family Games</a></li>
    			</ul>
  			</div>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      			<span class="navbar-toggler-icon"></span>
    		</button>
  
		</div>
	</nav>
	<br><br>
	<div class="content container" id="content">
		<h1>Indoor Games For Young People</h1>
		<h2>1. Corn Hole</h2>
		<p>If you are throwing a summer party, cornhole is the game for you.
 A little investment in this game can keep you occupied for a long time.</p>
		<img src="cornHole_young.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
		<p>
			<b>What You Will Need : </b>
			<ul>
				<li>cornhole board-2</li>
				<li>cornhole bags-4 for each  team</li>
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>Place the boards on the ground.
Divide the players into two teams.
Stand some distance away from the boards and start throwing the bags on the board in turns.
Count the number of bags that landed correctly. The team with the maximum correct landings wins.
</p>
			
			<p><b>No. of participants : 1 or More</b></p>

			<h2>2. Celebrity Charades :</h2>
		<p>It is a funnier version of the regular charades game and is best played
 with celebrity-crazy friends.
</p>
		<p>
			<img src="CelebratyCharades_young.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
			<b>What You Will Need : </b>
			<ul>
				<li>Slips of paper</li>
				<li>A bowl</li>
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>Write the name of different celebrities (or the party guests) on the slips of paper, fold them, and drop them in the bowl.
Divide the players into two teams.
The players from each team take turns to pick a paper slip, read the name on it, and enact it to the other team members.
The team with the maximum right guesses wins

</p>
			
			<p><b>No. of participants : A Group of people</b></p>

			<h2>3. Movie Guess :</h2>
		<p>This game is best for hardcore movie buffs. You can even imitate your favorite movie stars if you can.</p>
		
		<p>
			<b>What You Will Need</b>
			<ul>
				<li>A speaker</li>
				<li>Audio clips from movies</li>
				
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>Play music or dialogue clips from movies.
The players have to guess the movie name from the id.
</p>
		
			
			<p><b>No. of participants : 2 Or More</b></p>

			<h2>4. Drop A Hint :</h2>
		<p>This is a team game that involves wordplay. If you and your friends know each other inside and out, play this game.</p>
		
		<p>
			<b>What You Will Need : </b>
			<ul>
				<li>Slips of paper</li>
				<li>Timer</li>
				
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>Write different words or phrases on the slips of paper.
Divide the players into two teams.
A player from each team has to pick a slip, read the word/phrase written on it,
 and drop one-word hints that will help the team’s other players guess the word within a minute.

			
			<p><b>No. of participants : 2 or More</b></p>

			<h2>5. Truth Or Dare :</h2>
		<p>This is a team game</p>
		<img src="truth_young.jpeg" style="height: 400px;width: 350px;" class="img-responsive"><br><br>
		<p>
			<b>What You Will Need : </b>
			<ul>
				<li>Bottle</li>
				<li>Players</li>
			</ul>
		</p>
		<h4>How To play :</h4>
		<p>	1.Choose friends<br>
2.Make sure everyone is comfortable playing the game<br>
3.Spends some time preparing truths and dares<br>
4.Truth or dare game rules<br>
5.Start the game

		</p>
			
			<p><b>No. of participants : 2 or more</b></p>

	</div>
	<hr class="container">

	<div class="container">

		<ul class="pagination justify-content-center pg-dark" style="margin:20px 0">
    <li class="page-item"><a class="page-link" href="Kids1.php">&laquo;</a></li>
    <li class="page-item"><a class="page-link" href="game1.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Kids1.php">2</a></li>
    <li class="page-item active"><a class="page-link" href="Young1.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Old1.php">4</a></li>
    <li class="page-item"><a class="page-link" href="family1.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Old1.php">&raquo;</a></li>
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