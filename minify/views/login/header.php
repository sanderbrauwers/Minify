<!doctype html>
<html>
<head>
  <title><?php echo isset($this->title) ? $this->title : 'Minify'; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= URL ?>views/login/css/style.css" />    

</head>
<body>
<?php Session::init(); ?>
    