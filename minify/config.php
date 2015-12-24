<?php 

date_default_timezone_set('Europe/Belgrade'); 

// Always provide a TRAILING SLASH (/) AFTER A PATH 

define('URL', 'http://localhost/webapp/minify/'); 
define('S_NAME', 'Minify Admin'); 
define('EMAIL', 'info@sdesigns.be'); 

define('DB_TYPE', 'mysql'); 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'minifydb'); 
define('DB_USER', 'root'); 
define('DB_PASS', ''); 

define('HASH_GENERAL_KEY', 'MixitUp200'); 
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles'); 

define('UPLOAD_FOLDER', 'uploads/images/'); 
define('LIBS', 'libs/'); 

/*Minify configs*/
define('MINI_HEADER', 'views/header.php');
define('MINI_FOOTER', 'views/footer.php');
