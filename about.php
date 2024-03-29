<?php  $root = realpath($_SERVER["DOCUMENT_ROOT"]); include $root.'/components/header.php';?>
<!-- About CSS -->
<link href="/css/about.css" rel="stylesheet">
<br>
<br>
<br>
<br>

<!-- Big Header -->
<div class="container">
	<div class="row">
		<div class="darken col-xs-12 col-md-8">
			<div class="page-header header-font">
				<h1>
					<img src="img/student.png" alt=""> About me
					<div class="icons">
						<a class="icon" data-toggle="tooltip" data-placement="top" title="Email me" href="mailto:hanxiangp@gmail.com"><img src="img/email.png" style="width: 6%; height: 6%" alt=""></a>
						<a class="icon" data-toggle="tooltip" data-placement="top" title="Github" href="https://github.com/workofart"><img src="img/GitHub-Mark-120px-plus.png" style="width: 6%; height: 6%" alt=""></a>
						<a class="icon"  data-toggle="tooltip" data-placement="top" title="Connect" href="https://www.linkedin.com/profile/view?id=164014511"><img src="img/linkedin.png" style="width: 6%; height: 6%" alt=""></a>
						<a class="icon"  data-toggle="tooltip" data-placement="top" title="Resume" href="#" ><img data-toggle="modal" data-target="#myResumeModal" src="img/paperclip.png" style="width: 6%; height: 6%" alt=""></a>
						<a class="icon" href="#" data-toggle="tooltip" data-placement="top" title="Languages/Technologies"><img src="img/coding_icon.png" data-toggle="popover" data-content="Java, SQL, HTML/CSS, Unix/Linux, Shell Scripting, C/C++, JavaScript, Python, Excel VBA, Eclipse, SAS, SAP Sourcing" data-placement="top" alt="" style="width: 7%; height: 7%"></a>
						<a class="icon" data-toggle="tooltip" data-placement="top" title="Books" href="#"><img data-toggle="modal" data-target="#myBookModal" src="img/book.png" alt="" style="width: 6%; height: 6%"></a>
						<a class="icon" data-toggle="tooltip" data-placement="top" title="Research Paper" href="http://www.henrypan.com/other/ResearchPaperHanxiangPan.pdf"><img src="img/researchpaper.png" style="width: 6%; height: 6%" alt=""></a>
					</div>
				</h1>
			</div> <!-- End Page Header -->

				<!-- Academic Background -->
				<div class="panel panel-primary text-font">
					<div class="panel-heading">
						<h3 class="panel-title">Academic Background:</h3>
					</div>
					<ul class="list-group academic">
						<li class="list-group-item">Computer Science and Economics <span class="badge progress-bar-info">2014-2016 expected</span></li>
						<li class="list-group-item">Business Administration <span class="badge progress-bar-info">2013-2014</span></li>
						<li class="list-group-item">Economics <span class="badge progress-bar-info">2011-2013</span></li>
					</ul>
				</div>

				<!-- Work Background -->
				<div class="panel panel-warning text-font">
					<div class="panel-heading">
						<h3 class="panel-title">Work Background:</h3>
					</div>
					<ul class="list-group work">
						<li class="list-group-item">Telecommunications Firm - Business Intelligence Analyst <span class="badge progress-bar-warning">2015 Summer - Toronto, Canada</span></li>
						<li class="list-group-item">Consulting Firm - Business Technology Analyst <span class="badge progress-bar-warning">2014 Summer - Toronto, Canada</span></li>
						<li class="list-group-item">Consulting Firm - Part-time Assistant <span class="badge progress-bar-warning">2013 Summer - Beijing, China</span></li>
						<li class="list-group-item">NGO - Event Coordinator <span class="badge progress-bar-warning">2012 Summer - Beijing, China</span></li>
						<li class="list-group-item">Bank - Customer Service <span class="badge progress-bar-warning">2011 Summer - Beijing, China</span></li>
					</ul>
				</div>

				<!-- Cultural Background -->
				<div class="panel panel-success text-font">
					<div class="panel-heading">
						<h3 class="panel-title">Cultural Background:</h3>
					</div>
					<ul class="list-group culture">
						<li class="list-group-item">University <span class="badge progress-bar-success">Canada</span></li>
						<li class="list-group-item">Middle School & High School <span class="badge progress-bar-success">China</span></li>
						<li class="list-group-item">Elementary School <span class="badge progress-bar-success">China, Japan, Canada</span></li>
					</ul>
				</div>	
			

			<!-- Resume Modal -->
			<div class="modal fade" id="myResumeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel">Henry Pan's Resume (20150915)</h4>
						</div>
						<div class="modal-body">
							<img src="img/Henry_resume.jpg" style="width: 100%; height: 100%;" alt="resume">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Books Modal -->
			<div class="modal fade" id="myBookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel">Books I've Read</h4>
						</div>
						<div class="modal-body">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Outliers
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											The curiosity of seeing one of my classmates do exceptionally well both in school and in life led me to reading this book; this book ties lots of real-world examples closely together and observing the information that people normally neglect.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												The Tipping Point
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											A awesome marketing, sociology, psychology, consumer behavior book that touches on different aspects of  “short-cut” finding in this complex business world.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Blink
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body">
											Mostly psychology related as well as consumer behavior; stresses on the importance of first impression and how it can snowball to a large impact.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFour">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												Thinking Fast and Slow
											</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
										<div class="panel-body">
											A very in depth psychology nonfiction book that is written by an Economics Noble Prize Winner, who elaborates thoroughly on the psychological side of the human brain and provide a myriad of examples that help explain difficult psychological concepts.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFive">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												Getting to Yes
											</a>
										</h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
										<div class="panel-body">
											A negotiation handbook that teaches the reader different types of negotiation techniques needed to overcome almost all possible scenarios; however, please treat this book as a handbook not as a “one-time” read.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSix">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
												80/20 Principle
											</a>
										</h4>
									</div>
									<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
										<div class="panel-body">
											Personally, my very first nonfiction book that later dug up my time management potential and vastly increased my efficiency and effectiveness accomplishing different tasks.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSeven">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
												Liars Poker
											</a>
										</h4>
									</div>
									<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
										<div class="panel-body">
											A really good and funny wall-street depiction written by a former wall-street trader in the last few decades; however, this book requires adequate knowledge of finance/economics to understand it’s black humor.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingEight">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
												Drive: The Surprising Truth About What Motivates Us
											</a>
										</h4>
									</div>
									<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
										<div class="panel-body">
											Took a lot of different approaches towards motivating people in business and life, but also connected lots of concepts that I learnt in my I/O psychology class to real world examples, which is really easy to comprehend; needless to say the life-applicable tips at the back of the book.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingNine">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
												The 4-hour Work Week
											</a>
										</h4>
									</div>
									<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
										<div class="panel-body">
											This book is broken down into 4 parts (DEAL), D for Definition, E for Elimination, A for Automation, L for Liberation, in which the Automation part intrigues me the most mostly because I hate spending large chunks of time doing repetitive tasks, instead, outsourcing them to professional personnel is the choice for the New Rich (NR, this concept is talked thoroughly through the book)
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTen">
										<h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
												Hacking Work
											</a>
										</h4>
									</div>
									<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
										<div class="panel-body">
											Since I was a kid, I hate to play by the rules for all kind of games, from the single player hacks to MMO games hacks, this made me feel I saved up a lot of useless time; by transferring this mindset to the workplace as well as life, companies tend to assign tasks to employees with the effort of reaching cost-savings for the company as  a whole, now here is where this book comes into place – there are many ways to do those tasks, why not go around the rules once for a while (of course, you don’t wanna break the law as an expense).
										</div>
									</div>
								</div>
							</div> <!-- End Panel Body -->
						</div> <!-- End Modal Body -->
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end col-md-8 -->
	</div> <!-- end row --> 
</div> <!-- end Container -->
	<br>
	<br>
	<br>
	<br>		
	<?php include $root.'/components/footer.php';?>
	<script>
		$(function () {
			$('[data-toggle="popover"]').popover()
		})
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</body>
</html>
