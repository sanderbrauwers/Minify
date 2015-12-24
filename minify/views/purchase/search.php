<table class="table table-striped print">
<?php
    echo '<tr><th>Voornaam</th><td>' . $this->contact[0]['fname'] . '</td></tr>';
	echo '<tr><th>Achternaam</th><td>' . $this->contact[0]['lname'] . '</td></tr>';
	echo '<tr><th>Straat</th><td>' . $this->contact[0]['street'] . '</td></tr>';
	echo '<tr><th>Nr</th><td>' . $this->contact[0]['nr'] . '</td></tr>';
	echo '<tr><th>Postcode</th><td>' . $this->contact[0]['postcode'] . '</td></tr>';
	echo '<tr><th>Stad</th><td>' . $this->contact[0]['city'] . '</td></tr>';
	echo '<tr><th>Telefoon</th><td>' . $this->contact[0]['telephone'] . '</td></tr>';
	echo '<tr><th>Email</th><td>' . $this->contact[0]['email'] . '</td></tr>';	
	echo '<tr><th>Aanmerking</th><td>' . $this->contact[0]['comment'] . '</td></tr>';	
?>
</table>
<br  />
<table  class="table table-striped">
<tr>
    <th>Naam</th>
    <th>Hoeveelheid</th>
    <th>Prijs</th>
    <th>Subtotaal</th>
    <th>&nbsp;</th>
</tr>
<?php  

	foreach($this->product as $key => $value) {
		echo '<tr>';
		echo '<td><a href="'. URL . 'product/search/' . $value['productid'].'">' . $value['title'] . '</a>';
		if($value['offer_price'] != '0.00'){
			echo ' (-' . percent($value['offer_price'], $value['current_price']) .'&#37)';
		}
		echo '<br />Ref-Nr. '. $value['ref_number'] .'</td>';
		echo '<td>' . $value['quantity'] . '</td>';
		
		if($value['offer_price'] == '0.00'){
			echo '<td>&euro; ' . number_format($value['current_price'], 2, ',', ' ') . '</td>';
			echo '<td>&euro; ' . number_format($value['current_price'] * $value['quantity'], 2, ',', ' ') . '</td>';
		}else{
			echo '<td>&euro; ' . number_format($value['offer_price'], 2, ',', ' ') . '</td>';
			echo '<td>&euro; ' . number_format($value['offer_price'] * $value['quantity'], 2, ',', ' ') . '</td>';
		}
		
		echo '<td><a class="delete" href="'. URL . 'purchase/deleteOrderItem/' . $value['orderdetail_id'].'/'. $value['purchaseid'].'">
			<i class="fa fa-remove-circle"></i></a></td>';
		echo '</tr>';
		
	}	
?>
</table>

<div class="totalPrice"><strong>TOTAAL </strong>&euro; <?php echo number_format($this->totalPrice, 2, ',', ' ') ?></div>


<?php
	function percent($num_amount, $num_total) {
		$count1 = $num_amount / $num_total;
		$count2 = $count1 * 100;
		$count = number_format($count2, 0);
		$count =  100 - $count;
		return $count;
	}
?>