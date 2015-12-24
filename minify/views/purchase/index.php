<table class="table table-striped">
<tr>
	<th>ID</th>
	<th>Naam</th>
    <th>Datum</th>
    <th>&nbsp;</th>
</tr>
<?php
	foreach($this->purchaseList as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['purchaseid'] . '</td>';
		echo '<td><a href="'. URL . 'purchase/search/' . $value['purchaseid'].'">' . $value['fname'] .' '. $value['lname'] . '</a></td>';
		echo '<td>' . $value['order_date'] . '</td>';
		echo '<td><a class="delete" href="'. URL . 'purchase/delete/' . $value['purchaseid'].'"><i class="fa fa-remove-circle"></i></a></td>';
		echo '</tr>';
		
	}
?>
</table>

<?php
	var_dump($this->purchaseList);
?>