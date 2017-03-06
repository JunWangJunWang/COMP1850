<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About My Big Family</title>
	<link rel="stylesheet" type="text/css" href="css3.css">
	<link rel="icon" href="jun.ico" type="image/x-icon">
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

<body onload="alert ('Welcome!');">
	<div id="wrapper">
		<header role="banner">
		<!---<span><a href="#content">Skip to Content</a> </span>--->
		<h1>My Big Family</h1>
		</header>
		<nav class = "NavigationSection">
        <ul class = "MainMenu">
			<li><a href="index.php">Home</a> </li>
			<li><a href="people.html">People</a>
				<ul class = "SubMenu">
                    <li><a href="parents.html">Parents</a></li>
                    <li><a href="sister.html">Sister</a></li>
					<li><a href="myself.html">Myself</a></li>
                </ul>
            </li>
				
			
			<li><a href = "locations.html">Locations</a>
                <ul class = "SubMenu">
                    <li><a href="vancouver.html">Vancouver</a></li>
                    <li><a href="deyang.html">Deyang</a></li>
                </ul>
            </li>
			
			<li><a href="hobbies.html">Hobbies</a>
				<ul class = "SubMenu">
                    <li><a href="cooking.html">Recipes</a></li>
				</ul>
           	</li>
			
			
			<li><a href="albums.html">Albums</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		</nav>	
	<br>
	<br>
		
		<div id="main_col" style="width:90%;margin-left:auto; margin-right:auto;">
			<main>
			<P> When two people face to face, if they want, they communicate with words, with body languages and with face expressions. They understand each other quickly.  But how to those with unreachable distance? Especially to those who live together years and years, and suddenly they are separated?
			<img src="pic1.png" height="100%" width="100%" alt="homepicture">
			
			<p> That was over 10 years ago, one summer day, hot, no rain but wet in air. At the airport of Chengdu, China, I with my husband and 7-year old daughter, said goodbye to a few big family members and friends. In fact, my parents didn't show up. They preferred not to experience the departure at airport. At that summer day,  hot, no rain but wet in air, I was thinking I would come back this city in which I spent my first 30 years very soon---at most 1 year. But I had never imaged, when I went back, it was only for short vacation, and it was after 5 years later.
			<p> During the days we were in Vancouver, Canada, my big family was in China with almost 10 thousands of kilometers' space. Mails are too slow, emails and phone calls became the main channel to tell how we were. For this reason, my mom over 60 started to learn computer. The worries drove her to learn typing Chinese in emails. She picked up so quickly and so was called e-times' grandma.
			<p> Now a popular massager smartphone tool WeChat dominates our communication. We can talks, leave messages or sometime video chat. However, transferring large files, pictures and videos become time-consuming and inconvenient sometime. So I was thinking a website might help. We can share our news, especially high quality pictures and videos much easier. It is not only faster than WeChat but also it only lead upload once and then everybody can download.
			<p> This web is for our family members and close friends. 
		
			</main>
		</div>
		
		
	
		<footer style="clear:both;text-align:center">
				<small><i>Copyright &copy; <?php echo date("Y");?> Jun(BCIT_COMP1850)<br>
					This page has been visited <strong> <?=$count; ?> </strong> times.<br>
					<a href="sitemap.html">Site Map</a>
		</footer>
		</div>
</body>
</html>