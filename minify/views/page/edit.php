<form method="post" action="<?php echo URL;?>page/save/<?php echo $this->pageSingleList[0]['pageid']; ?>">
	<div class="row">
		<div class="col-md-10 nopad">
    	<label>Title</label>
			<input class="form-control" type="text" name="title" value="<?php echo $this->pageSingleList[0]['title']; ?>" />
    	<label>Title alias</label>
			<input class="form-control"  type="text" name="title_alias" value="<?php echo $this->pageSingleList[0]['title_alias']; ?>" />
			<textarea class="mceEditor" type="text" name="content" ><?php echo $this->pageSingleList[0]['content']; ?></textarea><br />
    </div>
		<div class="col-md-2">
			<label>Last modified on: </label>
			<input class="form-control" t type="text" name="modify_date" value="<?php echo $this->pageSingleList[0]['modify_date']; ?>" disabled="disabled" />
    	<br />
			<input class="btn btn-dark" type="submit" value="Save" />
  		<a class="delete btn btn-danger" href="<?php echo URL.'page/delete/'.$this->pageSingleList[0]['pageid'] ?>">Delete</a>
		</div>	
	</div>	
</form>

<?php 
/*
var_dump($this);*/
?>