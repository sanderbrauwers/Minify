<form method="post" action="<?php echo URL;?>page/create">
    <label>Title</label>
		<input class="form-control" type="text" name="title" />
    <label>Title alias</label>
		<input class="form-control" type="text" name="title_alias" />
		<textarea class="mceEditor" type="text" name="content" ></textarea>
    
    <label>&nbsp;</label><input class="btn btn-dark" type="submit" value="Create page" />
</form>

