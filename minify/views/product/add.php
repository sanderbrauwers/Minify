<form method="post" action="<?php echo URL;?>product/create">
    <label>ref_nummer</label>
		<input class="form-control" type="text" name="ref_number" placeholder="ref_number"/>
    <label>Titel</label>
		<input class="form-control" type="text" name="title" placeholder="title" />
    <label>Omschrijving</label>
		<textarea class="form-control" name="description" placeholder="description" ></textarea>
		
    <a href="#myModal" role="button" data-toggle="modal">
		
		<button class="btn btn-dark" type="button">Afbeelding</button></a>
    <a href="#myModal" role="button" data-toggle="modal">
		<div id="imagePreview"></div></a>
    
    <input id="imageid" type="hidden" name="imageid">
    
    
    <label>Eenheden in doos</label>
		<input class="form-control" type="number" step="1" min="0" name="unit_box" placeholder="unit_box" />
    <label>Koopprijs</label>
		<input class="form-control" type="number" step="0.01" min="0.01" name="purchase_price" placeholder="purchase_price" />
    <label>Koopprijs met BTW</label>
		<input class="form-control" type="number" step="0.01" min="0.01" name="purchase_price_btw" placeholder="purchase_price_btw" />
    <label>Verkoopprijs</label>
		<input class="form-control" type="number" step="0.01" min="0.01" name="retail_price" placeholder="retail_price" />
    <label>Voorraad</label>
		<input class="form-control" type="number" step="1" min="0" name="stock_quantity" placeholder="stock_quantity" />
    <label>Aangewezen prijs</label>
		<input class="form-control" type="number" step="0.01" min="0" name="suggested_price" placeholder="suggested_price" />
		
		<input class="btn btn-dark" type="submit" value="Create" />
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


