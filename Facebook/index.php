<?php
include_once('fb-config.php');
if (isset($_SESSION['fbUserId']) ) {
	header('location: http://localhost/web01/facebok/welcome.php');
	
	exit;
}
$permissions = array('email');
$loginUrl = $helper->getLoginUrl('http://localhost/web01/facebok/fb-callback.php', $permissions);

?>
<!doctype html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login with Facebook using PHP SDK</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>

	<div class="container">
		<h1 class="text-center"><a href="http://localhost/web01/login-simple/">Login Facebook </a></h1>
		<div class="row">
			<div class="col-sm-12 col-md-4 m-auto">
				<div class="border p-5 mb-5">
					<h1 class="text-center">Login</h1>
					<form method="post">
						<div class="form-group">
							<label>Login ID</label>
							<input type="text" class="form-control" name="userId" placeholder="User ID">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="userPassword" placeholder="User Password">
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-danger btn-block" value="Login"><i class="fa fa-sign-in-alt"></i> Login</button>
						</div>
						<div class="form-group">
							<a href="<?php echo htmlspecialchars($loginUrl); ?>" class="btn btn-primary btn-block"><i class="fab fa-facebook-square"></i> Log in with Facebook!</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>