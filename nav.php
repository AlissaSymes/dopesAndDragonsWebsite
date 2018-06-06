<style type="text/css">
ul { position: absolute; top:190px; left:-10px; color:green;
width:135px; text-align:center; margin:0; }
/*set general side button styles*/
li { width:115px; list-style-type :none; margin-bottom: 3px; text-align: center;
}
/* set general anchor styles */
li a { display: block; width:115px; color: white; font-weight: bold; text-decoration:none
}
/* specify state styles.*/
/*mouseout (default) */
li a { background: #5b78be; border: 4px outset #aabaff;
}
/*mouseover */
li a:hoover { display:block; background: #0a4adf; border: 4px outset #8abaff; width:115px;
}
/*onmousedown */

li a:active { backgound:#aecbff; border:4px inset #aecbff;
}
</style>
<div id="nav"><!--the side menu column contains the vertical menu block -->
<ul>
	<li><a href="index.php" title="home">Home</a></li>
	<li><a href="about.php" title="about">About</a></li>
	<li><a href="podcasts.php" title="podcasts">Podcasts</a></li>
	<li><a href="upcoming.php" title="upcoming">Upcoming Events</a></li>
	<li><a href="contact.php" title="contact">Contact Us</a></li>
	</div<!--end of side column and menu-->