<?php include 'header.php' ?>
		<div class="blog-header">
			<h1 class="blog-title">Minify</h1>
			<p class="lead blog-description">The offical example of the front end of a pages template</p>
		</div>
		<div class="blog-main">
			<?php

				$json = file_get_contents('http://localhost/webapp/minify/api/page');
				$data = json_decode($json, true);

				foreach ($data as $key => $value) { ?>
					<div class="blog-post">
						<h2 class="blog-post-title"><?php echo $value['title'] ?></h2>
						<p class="blog-post-meta"><?php echo $value['add_date'] ?></p>
						<p><?php echo $value['content'] ?></p>
					</div>
					
	    		
				<?php
				} ?>
		</div>
		
<?php include 'footer.php' ?>	

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

</body>
</html>