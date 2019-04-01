<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Employee Leave Request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<style>
		*{margin:0;padding:0;}

		h1,h2,h3,h4,h5,h6,p{margin:0;}

		img{max-width:100%;}

		.float-right{float:right;}
		.fix{overflow:hidden;}


			 /*Header Area*/
		.navbar {
		  border: 1px solid transparent;
		  margin-bottom: 0;
		  position: relative;
		  background: #5086AC;
		}
		h3 {
		  color: #fff;
		  float: right;
		  font-weight: 800;
		  padding-top: 39px;
		}



			 /*Menu Area*/
		.main-menu-area {
		  background: none repeat scroll 0 0 #E8EDFF;
		}
		#nav > li {
		  display: inline-block;
		  margin: 0;
		  padding: 7px 29px;
		  position: relative;
		}
		#nav > li > a {
		  color: #111;
		  display: inline-block;
		  font-size: 20px;
		  font-weight: 700;
		  padding: 8px 15px;
		  text-decoration: none;
		}	 
		ol, ul {
		  margin-bottom: 6px;
		  margin-top: 6px;
		}
		#nav > li > a:hover {
		  transform: scale(1.5);
		  color: #029F5B;
		  transition: 1s;
		}


			 /*Leave Request*/
		.leave-area.fix {
		  background: #ddd0ef none repeat scroll 0 0;
		  padding-bottom: 25px;
		}
		.col-md-6 > img {
		  padding-left: 90px;
		  padding-top: 100px;
		}
		.col-md-6 > h3 {
		  color: #00aff0;
		  padding-bottom: 25px;
		  padding-right: 148px;
		}



			 /*Footer Area*/
		.footer {
		  background: #323536 none repeat scroll 0 0;
		  color: #fff;
		  padding-bottom: 7px;
		  padding-top: 7px;
		  padding-right: 52px;
		}
		.visit > h4 {
		  font-size: 25px;
		   text-align: center;
		}
		.visit > p {
		  font-size: 15px;
		  text-align: center;
		}
		.call > h4 {
		  font-size: 25px;
		  text-align: center;
		}
		.call > p {
		  font-size: 15px;
		  text-align: center;
		}
		.contact > h4 {
		  font-size: 25px;
		   text-align: center;
		}
		.contact > p {
		  font-size: 15px;
		  text-align: center;
		}
		.social-icons {
		  font-size: 23px;
		  text-align: center;
		}
		.fa.fa-facebook-official:hover {
		  color: #4862A3;
		  transform: scale(1.5);
		  transition: all 1s;
		}
		.fa.fa-twitter:hover {
		  color: #1A95E0;
			transform: scale(1.5);
		  transition: all 1s;
		}
		.fa.fa-skype:hover {
		  color: #00AFF0;
			transform: scale(1.5);
		  transition: all 1s;
		}
		.fa.fa-google-plus-square:hover {
		  color: #CB4437;
			transform: scale(1.5);
		  transition: all 1s;
		}
		.copyright > p {
		  font-size: 15px;
		  padding-top: 28px;
		  text-align: center;
		}




	</style>
</head>
<body>
	<!--Header Area-->
	<header class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="logo">
						<img src="image/logo.png" alt="logo" />
					</div>
				</div>	
				<div class="col-md-6">
					<div class="texts">
						<h3>Welcome Employee ! :) </h3>
					</div>	
				</div>
			</div>
		</div>
	</header>
	
	
	<!--Menu Area-->
	<div class="main-menu-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="main-menu">
						<ul id="nav">
							<li><a href="emphome.php">Home</a></li>
							<li><a href="empleavereq.php">Leave Request</a></li>
							<li><a href="leavestatus.php">Leave status</a></li>
							<li><a href="leavehistory.php">Leave History</a></li>
							<li><a href="salary.php">Salary</a></li>
							<li><a href="login.php">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!--Leave Request-->
	<div class="leave-area fix">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="image/leave.png" alt="" />
				</div>
				<div class="col-md-6">
					<h3>Leave Application!</h3>
					<div class="row">
							<div class="col-lg-10 col-lg-offset-2">
								<form name="sentMessage" id="leaveForm">
									<div class="row control-group">
										<div class="form-group col-xs-10 floating-label-form-group controls">
											<label>Start Date: </label>
											<input type="date" class="form-control" placeholder="dd/mm/yy" id="date">
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="row control-group">
										<div class="form-group col-xs-10 floating-label-form-group controls">
											<label>End Date: </label>
											<input type="date" class="form-control" placeholder="dd/mm/yy" id="date">
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="row control-group">
										<div class="form-group col-xs-10 floating-label-form-group controls">
											<label>Purpose: </label>
											<textarea rows="3" class="form-control" placeholder="Message" id="message"></textarea>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<br>
									<div id="success"></div>
									<div class="row">
										<div class="form-group col-md-10">
											<button type="submit" class="btn btn-success btn-md">Apply!</button>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!--Footer Area-->
	<footer class="footer_area fix">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="visit">
							<h4>Visit</h4>	
							<p>Dhanmondi, Dhaka</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="call">
							<h4>Call</h4>
							<p>Phone: (208) 705-7705 <br />
							  Mobile: +8801737-904674</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="contact">
							<h4>Contact</h4>
							<p><a href="faisalkabir1993@gmail.com">faisalkabir1993@gmail.com</a></p>
						</div>
						<div class="social-icons">
							<i class="fa fa-facebook-official" aria-hidden="true"></i>
							<i class="fa fa-twitter" aria-hidden="true"></i>
							<i class="fa fa-skype" aria-hidden="true"></i>
							<i class="fa fa-google-plus-square" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-md-3">
						<div class="copyright">
							<p>&copy;faisalkabir2017.All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
	
	<!--Javasrcipt-->
	<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</body>
</html>