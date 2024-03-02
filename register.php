<?php
    session_start();
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    	<title>Register Member - PHP</title>
		<link rel="stylesheet" href="style.css">
    </head>
    <body>
	<div class="container">
        <div class="login">
    			
    				<?php
    				if(isset($_SESSION['error'])) {
    				?>
    				<div class="alert alert-warning" role="alert">
    				  <?php echo $_SESSION['error']?>
    				</div>
    				<?php
    				}
    				?>
    				<?php
    				if(isset($_SESSION['message'])) {
    				?>
    				<div class="alert alert-success" role="alert">
    				  <?php echo $_SESSION['message']?>
    				</div>
    				<?php
    				}
    				?>
					<br>
					<h2><center>Form Register Member</center></h2>
    					
    						<form action="process-register.php" method="post">
								<div class="form-group">
									<label for="username">Username</label>
    								<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Masukkan username anda" autocomplete="off">
    							</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" name="email" class="form-control" id="email" aria-describedby="name" placeholder="Email Anda" autocomplete="off">
								</div>
    							<div class="form-group">
    								<label for="password">Password</label>
    								<input type="password" name="password" class="form-control" id="password" placeholder="Password anda">
    							</div>
    							<div class="form-group">
    								<label for="password">Konfirmasi Password</label>
    								<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password">
    							</div>
    							<button type="submit" class="btn btn-primary">Register</button>
    						</form>
				</div>
						<div class="right">
            <img src="logo1.png" alt="">
    			
				</div>
    			</div>
    		</div>
    	</div>
    </body>
    <?php
    session_destroy();
    ?>