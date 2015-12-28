<?php require_once 'database.php' ?>
<?php require_once 'header.php' ?>

<div class="container">

		<div class="headline">
			<h1>Minify Installation</h1>
		</div>

    <p class="lead">Welcome to Minify! Please fill in these fields to set up and start using your website.
    	<br /> If you're not sure about these, contact your host.
   	</p>
    <br />
    <div>
	    <ul id="myTab" class="nav nav-tabs">
	      <li class="active"><a href="#home" data-toggle="tab">Basics</a></li>
	      <li><a href="#profile" data-toggle="tab">Add user</a></li>
	    </ul>
	    <div id="myTabContent" class="tab-content">
	      <div class="tab-pane fade in active" id="home">	        
			    <form role="form" method="post" action="index.php" >
			    	<div class="row">
			    		<div class="col-md-6">
			    			<div class="form-group">
							    <label for="baseUrl">Base Url</label>
							    <input type="text" name="baseUrl" class="form-control" id="baseUrl" placeholder="http://localhost/webapp/minify/" value="http://localhost/webapp/minify/">
							  </div>
							  <div class="form-group">
							    <label for="baseUrl">Website name</label>
							    <input type="text" name="webName"  class="form-control" id="baseUrl" placeholder="Minify Admin" value="Minify Admin">
							  </div>
							  <div class="form-group">
							    <label for="baseUrl">Email</label>
							    <input type="email" name="email" class="form-control" id="baseUrl" placeholder="info@sdesigns.be" value="info@sdesigns.be">
							  </div>
			    		</div>
			    		<div class="col-md-6">
			    			<div class="form-group">
							    <label for="baseUrl">Database Type</label>
							    <input type="text" name="db_type" class="form-control" id="baseUrl" placeholder="mysql" value="mysql">
							  </div>
							  <div class="form-group">
							    <label for="baseUrl">Database Host</label>
							    <input type="text" name="db_host" class="form-control" id="baseUrl" placeholder="localhost" value="localhost">
							  </div>
							  <div class="form-group">
							    <label for="baseUrl">Database Name</label>
							    <input type="text" name="db_name" class="form-control" id="baseUrl" placeholder="minifydb" value="minifydb">
							  </div>
							  <div class="form-group">
							    <label for="baseUrl">Database User</label>
							    <input type="text" name="db_user" class="form-control" id="baseUrl" placeholder="root" value="root">
							  </div>
							  <div class="form-group">
							    <label for="baseUrl">Database Password</label>
							    <input type="text" name="db_pass" class="form-control" id="baseUrl" placeholder="">
							  </div>
			    		</div>
			    	</div> 
					  <hr>  
					  <button type="submit" name='submit' class="btn btn-lg btn-green pull-right">Update config</button>
					  <br>
					</form>
	      </div>
	      <div class="tab-pane fade" id="profile">
					<form method="post" action="index.php">
						<div class="row">
							<div class="col-md-6">
								<label>Username</label>
								<input class="form-control" type="text" name="username" placeholder="Login" />
								<label>Password</label>
								<input class="form-control" type="password" name="password" placeholder="Password" />
								<label>Email</label>
								<input class="form-control" type="email" name="email" placeholder="Email" />
									
								<label>Birthday</label> 
								<div class="row form-date">
									<input class="form-control form-date-single" type="text" name="birth_day" maxlength="2" placeholder="dd" />
									<input class="form-control form-date-single" type="text" name="birth_month" maxlength="2" placeholder="mm" />
									<input class="form-control form-date-single" type="text" name="birth_year" maxlength="4" placeholder="yyyy" />
								</div>
							</div>
							<div class="col-md-6">
								<label>Role</label>
									<select class="form-control" name="role">
									<option value="default">Default</option>
									<option value="admin">Admin</option>
									<option value="owner">Owner</option>
								</select><br />
								
									<label>Gender</label>
									<select class="form-control" name="gender">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select><br />
							</div>
						</div>
						<hr>  
					  <button type="submit" name='submit-user' class="btn btn-lg btn-green pull-right">Create user</button>
					</form>

	      </div>
	    </div>
  	</div>
  	<p class="text-muted">
			Once you have completed this form, you need to remove the INSTALL folder from the main directory.
		</p>
	
	
</div>
<?php
	if (isset($_POST['submit'])) {

		$myFile = "../minify/config.php";
		$fh = fopen($myFile, 'w') or die("can't open config.php file");

		fwrite($fh, "<?php \n\n");
		fwrite($fh, "date_default_timezone_set('Europe/Belgrade'); \n\n");
		fwrite($fh, "// Always provide a TRAILING SLASH (/) AFTER A PATH \n\n");
		fwrite($fh, "define('URL', '". $_POST['baseUrl']."'); \n");
		fwrite($fh, "define('S_NAME', '". $_POST['webName']."'); \n");
		fwrite($fh, "define('EMAIL', '". $_POST['email']."'); \n\n");

		fwrite($fh, "define('DB_TYPE', '". $_POST['db_type']."'); \n");
		fwrite($fh, "define('DB_HOST', '". $_POST['db_host']."'); \n");
		fwrite($fh, "define('DB_NAME', '". $_POST['db_name']."'); \n");
		fwrite($fh, "define('DB_USER', '". $_POST['db_user']."'); \n");
		fwrite($fh, "define('DB_PASS', '". $_POST['db_pass']."'); \n\n");

		fwrite($fh, "define('HASH_GENERAL_KEY', 'MixitUp200'); \n");
		fwrite($fh, "define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles'); \n\n");

		fwrite($fh, "define('UPLOAD_FOLDER', 'uploads/images/'); \n");
		fwrite($fh, "define('LIBS', 'libs/'); \n");

		fclose($fh);
	}
?>

<?php require_once 'footer.php' ?>