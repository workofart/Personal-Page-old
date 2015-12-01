<?php  $root = realpath($_SERVER["DOCUMENT_ROOT"]); include $root.'/components/header.php';?>
<!-- ToDolist CSS -->
<link href="css/todolist.css" rel="stylesheet">

	<div class="container" onload="numItems()">
		<div class="row">
			<div class="col-md-5 col-md-offset-2 text-font todolist">
				<div class="table-responsive">
					<table class="table table-striped">
						<div class="header">
							<center><h3>To-dos <span class="label label-default" id="itemCount">0 items</span></h3>
								<br>
								<input type="text" placeholder="Type a new item" id="itemInput">

								<button type="button" class="btn btn-primary" id="add" onclick="addItem();numItems()">Add</button>
								<button type="button" class="btn btn-danger" id="delete" onclick="deleteAllItems();numItems()">Delete all</button>
								<button type="button" class="btn btn-info" onclick="exportResults()">Export results</button>
							</center>
						</div>
						<tbody id="itemList">
							<!-- add items here -->
						</tbody>
					</table>
				</div>					
			</div>
			<!-- Testing Area -->
<!-- 			<div class="col-md-4 col-md-offset-1 well text-font">
				<h4>Testing Area</h4>			
				<button type="button" class="btn btn-primary" id="test" onclick="test()">Test</button>
				<button type="button" class="btn btn-warning" id="untest" onclick="unTest()">Untest</button>
			</div> -->
		</div>
	</div>


<?php include $root.'/components/footer.php';?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/bootstrap.min.js"></script>
	<script src="js/todolist.js"></script>

</body>
</html>