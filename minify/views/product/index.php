<a class="btn btn-dark" href="<?php echo URL . 'product/add' ?>"><i class="fa fa-plus"></i> Create</a>

<table id="productList" class="table table-striped" style="margin-top:30px">
<tr>
	<th>Ref-Nr</th>
	<th>Product</th>
    <th >&nbsp;</th>
    <th>Purchase</th>
    <th>Retail</th>
    <th>Profit</th>
    <th>Special offer</th>
    <th>Status</th>
    <th>&nbsp;</th>
</tr>
<?php
    foreach($this->productList as $key => $value) {
        echo '<tr '; if($value['special_offer'] != '0.00') echo 'class="success"';
		echo  '>';
		echo '<td>' .$value['ref_number'] . '</td>';
		echo '<td><img src="'.URL. UPLOAD_FOLDER .'thumbnails/tiny/' . $value['name'] .'.' . $value['ext'] . '" height="80px" width="80px" /></td>';
        echo '<td><a href="'. URL . 'product/edit/' . $value['productid'].'">' . $value['title'] . '</a></td>';
		
		echo '<td>&euro; ' . number_format($value['purchase_price'], 2, ',', ' ') . '</td>';
		echo '<td>&euro; ' . number_format($value['retail_price'], 2, ',', ' ') . '</td>';
		echo '<td>&euro; ' . number_format($value['retail_price'] - $value['purchase_price'], 2, ',', ' ') . '</td>';
		echo '<td>&euro; ' . number_format($value['special_offer'], 2, ',', ' ') . '</td>';
		
		
		if($value['is_active'] == 'true'){
			echo '<td class="text-success"><i class="fa fa-circle"></i> Active';
		}
		else{
			echo '<td class="text-error"><i class="fa fa-circle"></i> Inactive';
		}
		
		echo '</td>';  
		
		
		
        echo '<td>
				<a class="delete" href="'. URL . 'product/delete/' . $value['productid'].'">Delete</a>
			</td>';
        echo '</tr>';
    }
?>
</table>