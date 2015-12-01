<!-- Navigation Bar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<ul class="nav navbar-nav">
		<div class="navbar-header">
			<p class="navbar-text"><span class="glyphicon glyphicon-header" aria-hidden="true"></span>  |  Welcome</p>	
		</div>
		<li <?php if (basename($_SERVER['PHP_SELF'])=="index.php"){ echo "class='active'";}?>><a href="/index.php">Home</a></li>
		<li <?php if (basename($_SERVER['PHP_SELF'])=="about.php"){ echo "class='active'";}?>><a href="/about.php">About me</a></li>
		<li <?php if (basename($_SERVER['PHP_SELF'])=="project.php"){ echo "class='active'";}?>><a href="/project.php">Projects</a></li> <!-- Still need work -->
		<li <?php if (basename($_SERVER['PHP_SELF'])=="random.php"){ echo "class='active'";}?>><a href="/random.php">Random Stuff</a></li> <!-- Still need work -->
	</ul>
	
</nav>