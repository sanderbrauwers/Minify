<h1>
	<?php 
		if(isset($this->headmsg)){
			echo $this->headmsg; 
		}elseif(isset($_GET['headmsg'])){
			echo $_GET['headmsg'];
		}
	?>

</h1>
<p>
	<strong>
	<?php 
		if(isset($this->msg)){
			echo $this->msg; 
		}elseif(isset($_GET['msg'])){
			echo $_GET['msg'];
		}
	?>
	</strong>
</p>
<div id="suggestions">
	<a href="#">Contact Support</a>
</div>
