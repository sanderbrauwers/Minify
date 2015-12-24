<!doctype html>
<html>
<head>
    <title><?php echo isset($this->title) ? $this->title : 'Minify Admin'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= URL ?>public/images/favicon.ico">
     
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,600,700,300' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="<?= URL ?>public/stylesheet/style.css" />    
    
</head>
<body>
<?php Session::init(); ?>

<div id="navigationTop" class="navbar navbar-fixed-top">
	<a class="navbar-logo" href="<?= URL ?>">
		<img src="<?= URL ?>public/images/minify_logo.png" width="133" height="27"  alt="Minify Logo"/>
  </a>
	<ul class="navbar-user">
		<li>
			<a href="<?= URL ?>help"><i class="fa fa-question"></i></a>
		</li><li>
			<a href="<?= URL ?>setting"><i class="fa fa-wrench"></i></a>
		</li><li class="dropdown">            
			<a id="dLabel" data-toggle="dropdown" href="#">
				<span class="navbar-username">
					<?php echo Session::get('username') ?>
				</span>
				<i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				<li><a href="<?= URL .'user/search/' . Session::get('userid')?>">View profile</a></li>
				<li><a href="<?= URL .'user/edit/' . Session::get('userid')?>">Edit profile</a></li>
        <li><a href="<?= URL ?>login/logout">Log out</a></li>
			</ul>
		</li>
	</ul>
</div>

<div id="content" class="row">
	<nav class="col-md-2">
		<ul id="navigation" class="nav nav-stacked">
			<li><a href="<?= URL ?>"><i class="fa fa-home fa-fw"></i> Dashboard</a></li>
			<li><a href="<?= URL ?>user"><i class="fa fa-group fa-fw"></i> Users</a></li>
			
			<?php 

			foreach($this->modules as $key => $value) {
				if($value['is_active'] === 'true'){
					switch ($value['name'])
					{
						case 'blog':
							echo "<li><a href=". URL ."blog><i class='fa fa-thumb-tack fa-fw'></i> Blog</a></li>";
							break;
						case 'product':
							echo "<li><a href=". URL ."product><i class='fa fa-tags fa-fw'></i> Products</a></li>";
							break;
						case 'page':
							echo "<li><a href=". URL ."page><i class='fa fa-file-text fa-fw'></i> Pages</a></li>";
							break;
						case 'purchase': 
							echo "<li><a href=". URL ."purchase><i class='fa fa-truck fa-fw'></i> Orders*</a></li>";
							break;
					} 
				}
			}
		?>

    <li><a href="<?php echo URL; ?>image"><i class="fa fa-picture-o fa-fw"></i> Images</a></li> 
		</ul>
	</nav>
	<div class="col-md-10">
		<div class="breadcrumb">
			<?php if(isset($this->breadCrumb)) echo '<span class="pull-left">'.$this->breadCrumb .'</span>'; ?>
 			<?= date('l M j, Y', time()) ?>
		</div>    

		<div class="headline">
			<h3><?= isset($this->pageTitle) ? $this->pageTitle : 'pageTitle'; ?></h3>
		</div>
 