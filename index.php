<?php include 'header.php' ?>

		<div class="blog-header">
			<h1 class="blog-title">Minify</h1>
			<p class="lead blog-description">The offical example of the front end of a blog template</p>
		</div>
		<div class="row">
			<div class="col-sm-8 blog-main">
				<?php

					$json = file_get_contents('http://localhost/webapp/minify/api/blog');
					$data = json_decode($json, true);

					foreach ($data as $key => $value) { ?>
						<div class="blog-post">
							<h2 class="blog-post-title"><?php echo $value['title'] ?></h2>
							<p class="blog-post-meta"><?php echo $value['add_date'] ?> by <?php echo $value['user'] ?></p>
							<p><?php echo $value['content'] ?></p>
						</div>
						
		    		
					<?php
					} ?>
			</div>
			<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
				<div class="sidebar-module sidebar-module-inset">
					<?php
						$json = file_get_contents('http://localhost/webapp/minify/api/page');
						$data = json_decode($json, true);
					?>
	            <h4><?php echo $data[0]['title'] ?></h4>
	            <p><?php echo $data[0]['content'] ?>
	           	</p>
	          </div>
			</div>
		</div>


<?php include 'footer.php' ?>
</body>
</html>