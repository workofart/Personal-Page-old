<?php  $root = realpath($_SERVER["DOCUMENT_ROOT"]); include $root.'/components/header.php';?>
<!-- Calculator CSS -->
<link href="css/calculator.css" rel="stylesheet">

	<div class="container">
		<div class="header"><b>Henry's Calculator</b></div>
		<div id="display">0</div>
		<div class="row">
			<div class="col"><button class="btn" onclick="reset()">AC</button></div>
			<div class="col"><button class="btn" onclick="inverse()">+/-</button></div>
			<div class="col"><button class="btn" onclick="percentage()">%</button></div>
			<div class="col"><button class="btn btn-right" onclick="assignOperator('/')">/</button></div>
		</div>
		<div class="row">
			<div class="col"><button class="btn" onclick="display(7)">7</button></div>
			<div class="col"><button class="btn" onclick="display(8)">8</button></div>
			<div class="col"><button class="btn" onclick="display(9)">9</button></div>
			<div class="col"><button class="btn btn-right" onclick="assignOperator('*')">X</button></div>
		</div>
		<div class="row">
			<div class="col"><button class="btn" onclick="display(4)">4</button></div>
			<div class="col"><button class="btn" onclick="display(5)">5</button></div>
			<div class="col"><button class="btn" onclick="display(6)">6</button></div>
			<div class="col"><button class="btn btn-right" onclick="assignOperator('-')"><img src="../img/minus.png" style="width:20%; height: 20%" alt=""></button></div>
		</div>
		<div class="row">
			<div class="col"><button class="btn" onclick="display(1)">1</button></div>
			<div class="col"><button class="btn" onclick="display(2)">2</button></div>
			<div class="col"><button class="btn" onclick="display(3)">3</button></div>
			<div class="col"><button class="btn btn-right" onclick="assignOperator('+')"><img src="../img/plus.png" style="width:20%; height:20%" alt=""></button></div>
		</div>
		<div class="row">
			<div class="col"><button class="btn-2" onclick="display(0)">0</button></div>
			<div class="col-dot"><button class="btn" onclick="display('.')"><img src="../img/dot.png" style="width:5%; height: 10%" alt=""></button></div>
			<div class="col-equal"><button class="btn btn-equal" onclick="evaluateExp();"><img src="../img/equal.png" style="width:15%; height:15%" alt=""></button></div>
		</div>
	</div> <!-- End Comtainer -->

	<h3>Inspired by OSX calculator by Apple</h3>
	<script src="js/calculator.js"></script>
	<?php include $root.'/components/footer.php';?>
</body>
</html>