<form action="<?php echo URL . "image/run" ?>" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

<ul class="image-list">
	<?php foreach($this->imageList as $key => $value) { ?>
		<li>
			<img src="<?php echo UPLOAD_FOLDER . $value['imageid'] . '_s.' . $value['ext']  ?>" alt="Image" title="<?php echo $value['imageid'] ?>" />
		</li>
  <?php } ?>
</ul>