<!DOCTYPE html>
<html>
	<head>
		<title>Music Viewer</title>
		<meta charset="utf-8" />
		<link href="music.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
		<h1>My Music Page</h1>
		
		<!-- Number of Songs (Variables) -->
		
		<p>
			I love music.
			I have <?php $a= 5678; print $a;?>
			total songs, which is over 
			<?php $b= $a/10; print $b; ?> hours of music!
		</p>

		<!-- Music Results Pages (Loops) -->
		<div class="section">
			<h2>Google's Music Results</h2>
			<ol>
				<?php 
					for($x = 0; $x <=4 ; $x++){
				?>
					<li><a href="https://www.google.com/search?tbm=nws&amp;q=Music&amp;start=<?=$x * 10?>">Page <?= $x + 1?></a></li> 
			
				<?php
				}
				?>
<!-- 
				<li><a href="https://www.google.com/search?tbm=nws&amp;q=Music&amp;start=0">Page 1</a></li>
				<li><a href="https://www.google.com/search?tbm=nws&amp;q=Music&amp;start=10">Page 2</a></li>
				<li><a href="https://www.google.com/search?tbm=nws&amp;q=Music&amp;start=20">Page 3</a></li>
				<li><a href="https://www.google.com/search?tbm=nws&amp;q=Music&amp;start=30">Page 4</a></li>
				<li><a href="https://www.google.com/search?tbm=nws&amp;q=Music&amp;start=40">Page 5</a></li>
 -->	
			</ol>
		</div>

		<!-- Favorite Artists (Arrays) -->
		<!-- Favorite Artists from a File (Files) -->
		<div class="section">
			<h2>My Favorite Artists</h2>
		
			<ol>
			

<!-- EXCERCISE 3 commented out 			
			<?php
			$favArtist = array("Britney Spears", "Christina Aguilera", "Justin Beiber");
			$favArtist[] = "Lady Gaga";
			?>
			
			<?php
				foreach($favArtist as $artist){
			?>	
				<li><?= $artist ?></li>
			<?php	
				}
			?>	
-->

<!-- EXERCISE 4! -->			
			<?php
				$favArtist = file("favorite.txt");
				
				foreach($favArtist as $artist){
			?>	
				<li><a href="https://www.vevo.com/artist/<?= strtolower(str_replace(' ', '-', $artist)) ?>"><?=$artist?></a></li>
			<?php	
			}
			?>	

			</ol>
		</div>
		
		<!-- Music (Multiple Files) -->
		<!-- MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>


			<!-- EXERCISE 5, 6, and 7 -->
			<?php
			$songs = glob("songs/*.mp3");
			//print $songs[0];
			
			?>
			<ul id="musiclist">
				<?php
				/* PART 7 Ordering */
			    
			    //PART 7b)everytime PHP code execute, order of songs will shuffle
			    //shuffle($songs); 
			    
			    //PART 7c)everytime PHP code executed, reverse ABC order
			    //rsort($songs);   
			    
			    
			    //PART 7 BONUS! 
			    function sizer($a, $b){
			    	if (filesize($a) < filesize($b))
			    		return 1;
			    	if (filesize($a) > filesize($b))
			    		return -1;
			    	else
			    		return 0;
			    }
			    
			    //usort sorts file size using the function sizer
			    usort($songs, sizer); //Bonus
			    
			    
				foreach($songs as $song){
				?>
				<li class="mp3item">
					<a href="<?= $song ?>" download > <?= basename($song) ?>
					(<?= round(filesize($song)/1024)?> KB)</a> 
					<audio controls><source src="<?= $song?>" type="audio/mp3"></audio>
				</li> 
				<?php
				}
				?>
				
<!-- 
				<li class="mp3item">
					<a href="http://webster.cs.washington.edu/cse154/songs/Just Because.mp3">Just Because.mp3</a>
				</li>

				<li class="mp3item">
					<a href="http://webster.cs.washington.edu/cse154/songs/Drift Away.mp3">Drift Away.mp3</a>
				</li>

				<!~~ Exercise 8: Playlists (Files) ~~>
				<li class="playlistitem">154-mix.m3u:
					<ul>
						<li>Hello.mp3</li>
						<li>Be More.mp3</li>
						<li>Drift Away.mp3</li>
						<li>Panda Sneeze.mp3</li>
					</ul>
				</li>
 -->
			</ul>
		</div>

		<div>
			<a href="https://webster.cs.washington.edu/validate-html.php">
				<img src="http://webster.cs.washington.edu/w3c-html.png" alt="Valid HTML5" />
			</a>
			<a href="https://webster.cs.washington.edu/validate-css.php">
				<img src="http://webster.cs.washington.edu/w3c-css.png" alt="Valid CSS" />
			</a>
		</div>
	</body>
</html>
