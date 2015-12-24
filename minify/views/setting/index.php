<h4>Maris aliquet diam eget tristique cursus.</h4>

<p>Mauris molestie velit est, eu faucibus risus eleifend et. Praesent non augue eget justo pulvinar tempus. 
	Phasellus rutrum arcu ut felis cursus ornare. Etiam eget feugiat arcu, et sagittis turpis. 
	Praesent venenatis tortor at risus tristique, vel pulvinar massa vulputate. 
	Quisque vestibulum, felis a ullamcorper congue, libero neque tincidunt purus, eget consectetur leo nulla in odio. Suspendisse potenti.
</p>

<div class="row">
	<div class="col-md-6">
		<div class="panel fixHeight">
			<div class="panel-heading">
				<h3 class="panel-title">Modules</h3>
			</div>
			<div class="panel-body">
				<?php foreach($this->modulesList as $key => $value) {?>
					<label class="checkbox">
		        <input 
		        type="checkbox" value="true"
		        name="<?php echo $value['name']?>"
		        <?php 
		        	echo ($value['is_active']) === 'true' ? 'checked' : '';
		        ?>>
		        <?php echo $value['name'] ?>
		      </label>
		    <?php }?>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel fixHeight">
			<div class="panel-heading">
				<h3 class="panel-title">Logins</h3>
			</div>
			<div class="panel-body">
				<ul>
					<?php foreach($this->logUsers as $key => $value) {?>
					<li>
						<a href="<?php echo URL. '/user/search/' . $value['userid'] ?>"> <?php echo $value['username'] ?></a>
								<span class='text-muted'>
							(<?php echo $value['ipadress'] ?>)
						</span>
					
						on
						<?php 
							echo date('l M j, Y H:i',strtotime($value['date']));
						?>
					</li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Server Information</h3>
			</div>
			<div class="panel-body">
				<ul class="list-unstyled">
				  <li><strong>Host: </strong><?php echo $_SERVER['HTTP_HOST'] ?></li>
				  <li><strong>Server name: </strong><?php echo $_SERVER['SERVER_NAME'] ?></li>
				  <li><strong>Software: </strong><?php echo $_SERVER['SERVER_SOFTWARE'] ?></li>
				</ul>		
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Minify License</h3>
			</div>
			<div class="panel-body">
		    <div class="input-group">
		      <input type="text" class="form-control" placeholder="Enter license key">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button">Go!</button>
		      </span>
		    </div><!-- /input-group -->		
			</div>
		</div>
	</div>
</div>