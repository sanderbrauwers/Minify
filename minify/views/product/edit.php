<form method="post" action="<?php echo URL;?>product/editSave/<?php echo $this->product[0]['productid']; ?>">

    <label>Ref Number</label>
    	<input type="text" name="ref_number" value="<?php echo $this->product[0]['ref_number']; ?>" /><br />
    <label>Name</label>
    	<input type="text" name="title" value="<?php echo $this->product[0]['title']; ?>"/><br />
    <label>Description</label>
    	<textarea name="description" ><?php echo $this->product[0]['description']; ?></textarea><br />
        
    <a href="#myModal" role="button" data-toggle="modal"><button class="btn-dark" type="button">Afbeelding</button></a>
    <br />
    <a href="#myModal" role="button" data-toggle="modal">
    	<div id="imagePreview">
        	<?php echo '<img src="'. URL . UPLOAD_FOLDER. 'thumbnails/mid/' . $this->product[0]['name'].  '.' .$this->product[0]['ext'] .'" />' ;?>
        </div>
    </a>
    <br />
    
    <input id="imageid" type="hidden" name="imageid" value="<?php echo $this->product[0]['imageid'] ?>">   
     
    <label>Units in box</label>
    	<input type="number" step="1" min="0" name="unit_box" value="<?php echo $this->product[0]['unit_box']; ?>"/><br />
    <label>Purchase price</label>
    	<input type="number" step="0.01" min="0.01" name="purchase_price" value="<?php echo $this->product[0]['purchase_price']; ?>"/><br />
    <label>Purchase price + btw</label>
    	<input type="number" step="0.01" min="0.01" name="purchase_price_btw" value="<?php echo $this->product[0]['purchase_price_btw']; ?>"/><br />
    <label>Retail price</label>
    	<input type="number" step="0.01" min="0.01" name="retail_price" value="<?php echo $this->product[0]['retail_price']; ?>"/><br />
    <label>Stock Quantity</label>
    	<input type="number" step="1" min="0" name="stock_quantity" value="<?php echo $this->product[0]['stock_quantity']; ?>"/><br />
	<label>Special Offer</label>
    	<input type="number" step="0.01" min="0" name="special_offer" value="<?php echo $this->product[0]['special_offer']; ?>"/><br />
	<label>Suggested Price</label>
    	<input type="number" step="0.01" min="0" name="suggested_price" value="<?php echo $this->product[0]['suggested_price']; ?>" /><br />
        
    <label>Status</label>
	<select name="is_active">
		<option value="false" <?php if($this->product[0]['is_active'] == 'false') echo 'selected'; ?>>Inactive</option>
		<option value="true" <?php if($this->product[0]['is_active'] == 'true') echo 'selected'; ?>>Active</option>
	</select><br />  
    
    <label>&nbsp;</label><input class="btn-dark" type="submit" />
</form>



<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">X</button>
    <h3 id="myModalLabel">Selecteer een afbeelding</h3>
  </div>
  <div class="modal-body">
  
    <div class="row">
        <ul class="thumbnails">
        <?php 
			foreach($this->imageList as $key => $value){
				echo '<li>';
				echo '<a href="#" id="'.$value['name']. '.' . $value['ext'].'"  class="thumbnail" data-dismiss="modal">';
				echo '<img id="'.$value['imageid'].'" data-toggle="tooltip" title="'. $value['description'] .'" 
							src="' . URL . UPLOAD_FOLDER . 'thumbnails/tiny/' . $value['name']. '.' . $value['ext'] . '" 
							height="80" width="80" />';
				echo '    </a>';
				echo '</li>';
          	} 
		?>
        </ul>
	</div>

  </div>
      <div class="modal-footer">

  	</div>
</div>

<script type="text/javascript">
    urldest = "<?php echo URL . UPLOAD_FOLDER; ?>";
</script>
