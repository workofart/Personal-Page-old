<?php  $root = realpath($_SERVER["DOCUMENT_ROOT"]); include $root.'/components/header.php';?>
<!-- Index CSS -->
<link href="/css/index.css" rel="stylesheet">

	<!-- Henry's Page Box -->
	<div class="large-banner banner-font">
		<div class="header-font">
			<h1><img src="img/student.png" alt=""> Henry's Page</h1>
		</div>
		<div class="text-font banner-font">
			<h3>I am a student studying computer science and economics</h3>
			<h3>Feel free to poke around!</h3>
		</div>

		<!-- Banner Button -->
		<a href="about.php"><button type="button" class="banner-button"><span class="glyphicon glyphicon-user"></span> Learn More</button></a>
	</div>  <!-- end large banner -->
</div> <!-- End row -->
</div> <!-- End container -->

<br>
<br>

<?php include $root.'/components/footer.php';?>

</body>
</html>