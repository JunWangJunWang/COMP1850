<?php include("/hermes/bosnaweb04a/b1752/ipg.bcitdevcom/students/A00677044/final_project/password_protect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About My Great Family</title>
	<link rel="stylesheet" type="text/css" href="css1.css">
	<!---link rel="icon" href="school.ico" type="image/x-icon"--->
	
	<?php
$fp = fopen("counterlog.txt", "r");
$count = fread($fp, 1024);
fclose($fp);
$count = $count + 1;
$fp = fopen("counterlog.txt", "w");
fwrite($fp, $count);
fclose($fp);
?>
</head>

<body>
	<div id="container">
		<header role="banner">
		<!---<span><a href="#content">Skip to Content</a> </span>--->
		<h1> About My Great Family</h1>
		</header>
			
		<nav>
		<ul>
			<li><a href="#">Home</a> </li>
			<li><a href="people.html">People</a></li>
			<li><a href="locations.html">Locations</a></li>
			<li><a href="hobbies.html">Hobbies</a></li>
			<li><a href="albums.html">Albums</a></li>
			<li><a href="update.html">Updates</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>	
			
<!---Home  <a href="schools.html">Schools</a>   <a href="research.html">Research</a>  <a href="finalproject.html">Final Project</a>		--->	
		</nav>
		
		<div id="main_col">
			<main>
			<!---<h2> Background </h2>--->
			<p> This is about our great family.  I plan to create a website for my  big family. We locates in different countries. We always have lots of information to share with each. Some are in big sized so they are not easy to transfer with chat programs or emails.</p>
			<hr>
			<img src="pic1.jpg" height="100%" width="100%" alt="homepicture">
			</main>
		</div>
		
		<div id="aside_col">
			<form>
			<br><br><br><br>
			<strong>Are you a member of our family?</strong> <br><br>
			<input type="radio" name="visitor" id="family" value="yes">Yes<br><br>
			<input type="radio" name="visitor" id="notfamily" value="no">No<br><br>
			</form>
		</div>
		<footer style="clear:both;text-align:center">
				<small><i>Copyright &copy; <?php echo date("Y");?> Maggie(BCIT_COMP1850)
					This page has been visited <?=$count; ?> times.
		</footer>
	</div>
</body>
</html>