<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';

if (!$_SESSION['employee_session'])
	{
		header("Location: changepassword.php");
	}
else{
	$user = $_SESSION['employee_session'];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Teamire - Insert System Name</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
		<meta content="Coderthemes" name="author" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!-- App favicon -->
		<link rel="shortcut icon" href="../include/assets/images/favicon.ico">

		<!-- App css -->
		<link href="../include/../include/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="../include/assets/css/icons.css" rel="stylesheet" type="text/css" />
		<link href="../include/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
		<link href="../include/assets/css/style.css" rel="stylesheet" type="text/css" />

		<script src="../include/assets/js/modernizr.min.js"></script>
	</head>

	<body class="bg-accpunt-pages">
		<!-- HOME -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">

						<div class="wrapper-page">

							<div class="account-pages">
								<div class="account-box">
									<div class="account-logo-box">
										<h2 class="text-uppercase text-center">
											<a href="index.html" class="text-success">
												<span>Change Password</span>
											</a>
										</h2>
										<h5 class="text-uppercase font-bold m-b-5 m-t-50">
												Hi User.<br>
												It seems that it is your first time to visit
												this site. We recommend you to create your own password
												before entering your home page. Thank you!
										</h5>
										<p class="m-b-0">
											<?=$error?>
										</p>
										</div>
										<div class="account-content">
											<form class="form-horizontal" action="process.php?action=changepassword" method="POST">
												<input type="hidden" name="username" value="<?=$user?>">
												<div class="form-group row m-b-20">
													<div class="col-12">
														<label for="password">New Password</label>
														<input class="form-control" type="password" required="" id="password" name="password" placeholder="New Password">
													</div>
												</div>

													<div class="form-group row m-b-20">
														<div class="col-12">
															<label for="password">Confirm Password</label>
															<input class="form-control" type="password" required="" id="password2" name="password2" placeholder="Confirm Password">
														</div>
													</div>

												<div class="form-group row text-center m-t-10">
													<div class="col-12">
														<button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Submit</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- end card-box-->
							</div>
							<!-- end wrapper -->
						</div>
					</div>
				</div>
		</section>
		<!-- END HOME -->

		<script>
		var resizefunc = [];
		</script>

		<!-- jQuery  -->
		<script src="../include/assets/js/jquery.min.js"></script>
		<script src="../include/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
		<script src="../include/assets/js/bootstrap.min.js"></script>
		<script src="../include/assets/js/metisMenu.min.js"></script>
		<script src="../include/assets/js/waves.js"></script>
		<script src="../include/assets/js/jquery.slimscroll.js"></script>

		<!-- App js -->
		<script src="../include/assets/js/jquery.core.js"></script>
		<script src="../include/assets/js/jquery.app.js"></script>

	</body>
</html>
