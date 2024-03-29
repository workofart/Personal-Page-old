<?php  $root = realpath($_SERVER["DOCUMENT_ROOT"]); include $root.'/components/header.php';?>
<!-- Beautify CSS -->
<link href="css/beautify.css" rel="stylesheet">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<div class="container">
				<div class="row">
					<div class="col-md-3 whiten-more text-font">
						<h1>Toolkit</h1>
						<button type="button" class="button btn-warning" id="test4" onclick="animatedZoom()">Animated Zoom</button>
						<button type="button"  class="button btn-danger"id="test2" onmousedown="zoomIn()" onmouseup="zoomOut()">Zoom!</button>
						<br>
						<br>
						<button type="button" class="button btn-default" id="test3" onclick="addShadow()">Add Shadow</button>
						<button type="button" class="button btn-primary"id="test1" onclick="clearCanvas()">Clear Canvas</button>
						
					</div>
				</div>
			</div>
			<br>
			<br>
			<div class="container">
				<div class="row">
					<div class="col-md-4 whiten-more text-font">
						<h3>Canvas</h3>
						<canvas id="myCanvas">
							
						</canvas>
					</div>
					<div class="col-md-4 whiten-more text-font">
						<h3>Bubbly Images</h3>
						<img class="snapShot" src="../img/beautify/blue.png" alt="">
						<img class="snapShot" src="../img/beautify/blueprint.jpg" alt="">
						<img class="snapShot" src="../img/beautify/Brain.png" alt="">
						<img class="snapShot" src="../img/beautify/ocean.jpg" alt="">
					</div>
					<div class="col-md-4 whiten-more text-font">
						<h3>Music/Video</h3>
						<audio src="../sound/mashup.mp3" controls></audio>
						<video class="videoSnap" src="../video/test.mp4" controls poster="../img/video.ico"></video>
					</div>
				</div>
			</div> <!-- End Container -->
			<br>
			<br>
			<div class="container">
				<div class="row">
					<div class="col-md-4 whiten-more text-font">
						<h3>Placeholder	</h3>
						<button>Test</button>
					</div>
					<div class="col-md-4 whiten-more text-font">
						<h3>Form Testers</h3>
						<form action="/login" method="post">
							<fieldset class="basic-info">
								<legend>Basic Info</legend>
								<label for="username">Username:<input type="text" name="username" required></label>
								<br>
								<label for="password">Password: <input type="password" name="password" required></label>
								<br>
								<label for="cpassword">Confirm Password: <input type="password" name="cpassword" required></label>
								<br>
								<label for="email">Email: <input type="email" name="email" placeholder="name@domain.com" required></label><br>
								<label for="country">Country: <select name="country" id="country" required>
									<option value="China">China</option>
									<option value="Japan">Japan</option>
									<option value="Canada">Canada</option>
								</select></label>
								<br>
								<input type="checkbox" name="spam" value="spam" required>Receive Spam<br>	
								<textarea name="coverletter" id="" cols="50" rows="10">Add Cover Letter</textarea>
								<br>								
								Upload a resume: <input type="file" name="file">
								<br>
								<button class="button btn-primary">Submit</button>
								<!-- <input class="button" type="submit" name="submit" value="Submit"> -->
							</fieldset>
							<fieldset class="other-info">
								<legend>Other Info</legend>
								<label for="range">Range: <input type="range" name="range"></label>
								<br>
								<label for="search">Search: <input type="search" name="search"></label>
								<br>
								<label for="tel">Tel: <input type="tel" name="tel"></label>
								<br>
								<label for="url">Url: <input type="url" name="url"></label>
								<br>
								<label for="date">Date: <input type="date" name="date">
								</label>
							</fieldset>
						</form>
					</div>
					<div class="col-md-4 whiten-more text-font">
						<h3>CSS "Spinning Boxes"</h3>
						<div class="box1">Box1</div>
						<div class="box1">Box1</div>
						<div class="box1">Box1</div>
						<div class="box1">Box1</div>
						<div class="box2" id="flex">Box2</div>
						<div class="box2" id="flex">Box2</div>
						<div class="box2" id="flex">Box2</div>
						<div class="box2" id="flex">Box2</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<!-- <div class="container">
				<div class="heart">
				</div>
				<div class="heart">
				</div>
				<div class="heart">
				</div>
				<div class="heart">
				</div>			
			</div> -->

			<div class="container boxes">
				<table>
					<h3 class="header-font">Flip Boxes</h3>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr class="box-row">
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
						<td><div class="item"></div></td>
					</tr>
					<tr>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
						<td>
							<div class="item"></div>
						</td>
					</tr>
				</table>
			</div>
			<br>
			<br>
			<?php include $root.'/components/footer.php';?>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="../js/bootstrap.min.js"></script>
			<script src="js/beautify.js"></script>

		</body>
		</html>