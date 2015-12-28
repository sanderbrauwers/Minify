<?php
	

	if (isset($_POST['submit-user'])) {
		require_once '../minify/config.php';
		require_once '../minify/libs/Database.php';
		require_once '../minify/libs/Hash.php';

		try{     
		  $db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);

		  $birth = $_POST['birth_year'] . '-' . $_POST['birth_month'] .'-'. $_POST['birth_day'];

		  $db->insert('user', array(
																'username' => $_POST['username'],
																'password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY),
																'role' => $_POST['role'],
																'gender' => $_POST['gender'],
																'email' => $_POST['email'],
																'birth' => $birth
															));
		}catch (PDOException $e){
		     //die ('DB Error');
		  die("Oh Snap, database connetion failed to create");
		}

	}


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