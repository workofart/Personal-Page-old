<?php  $root = realpath($_SERVER["DOCUMENT_ROOT"]); include $root.'/components/header.php';?>
<!-- Project CSS -->
<link href="/css/project.css" rel="stylesheet">
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-1">
			<div class="jumbotron header-font gradient-container">
				<span class="badge">Javascript/CSS</span>
				<h1>To-do List</h1>
				<p><a class="btn btn-default btn-lg" href="projects/todolist.php" role="button">Check it out</a></p>
				<ul class="text-font">
					<li>Add items</li>
					<li>Delete items</li>
					<li>Export to-do list</li>
				</ul>
			</div>			
		</div>

		<div class="col-md-5 col-md-offset-1">
			<div class="jumbotron header-font gradient-container">
				<span class="badge">Javascript/CSS</span>
				<h1>Beautify HTML</h1>

				<p><a class="btn btn-default btn-lg" href="projects/beautify.php" role="button">Check it out</a></p>
				<ul class="text-font">
					<li>HTML elements manipulation</li>
					<li>Canvas Drawing</li>
					<li>More to come...</li>
				</ul>
			</div>			
		</div>
	</div>
	<div class="row">

		<!-- Hidden for now -->
	<!-- <div class="col-md-5 col-md-offset-1">
		<div class="jumbotron header-font gradient-container">
			<span class="badge">Javascript, and </span><spa
			n class="caret"></span>
				<h1>Data Visualization</h1>
				
				<p><a class="btn btn-default btn-lg" href="projects/data.php" role="button">Check it out </a></p>
				<ul class="text-font">
					<li>Bar Graph</li>
					<li>Line Graph</li>
					<li>And many more...</li>
				</ul>
			</div>
		</div>
	</div> -->
	<div class="col-md-5 col-md-offset-1">
		<div class="jumbotron header-font gradient-container">
			<span class="badge">Javascript/CSS</span>
			<h1>Calculator</h1>

			<p><a class="btn btn-default btn-lg" href="projects/calculator.php" role="button">Check it out</a></p>
			<ul class="text-font">
				<li>Add/subtract/multiply/divide</li>
				<li>And many more...</li>
			</ul>
		</div>		
	</div>
	</div>  <!-- end row -->
</div>

<!-- Space for testing -->
<br>
<br>
<br>
<br>
<br>
<br>

<?php include $root.'/components/footer.php';?>
</body>
</html>
