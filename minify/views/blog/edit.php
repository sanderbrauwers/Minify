<form method="post" action="<?php echo URL;?>blog/save/<?php echo $this->blogSingleList[0]['blogid']; ?>">
	<div class="row">
		<div class="col-md-10 nopad">
			<label>Title</label>
			<input class="form-control" type="text" name="title" value="<?php echo $this->blogSingleList[0]['title']; ?>" />
			
			<textarea class="mceEditor" type="text" name="content" ><?= $this->blogSingleList[0]['content'] ?></textarea>
		</div>
		<div class="col-md-2">
			<label>Created on: </label>
			<input class="form-control" type="text" name="modify_date" value="<?=$this->blogSingleList[0]['add_date']; ?>" disabled="disabled" />
			<label>Last modified on: </label>
			<input class="form-control" type="text" name="modify_date" value="<?= $this->blogSingleList[0]['modify_date']; ?>" disabled="disabled" />
				
			<label>Status</label>
			<select class="form-control" name="is_active">
				<option value="false" <?php if($this->blogSingleList[0]['is_active'] == 'false') echo 'selected'; ?>>Inactive</option>
				<option value="true" <?php if($this->blogSingleList[0]['is_active'] == 'true') echo 'selected'; ?>>Active</option>
			</select>
			<br>
			<input class="btn btn-dark" type="submit" value="Save" />
		</div>
		
	</div>	
	
</form>

