<div class="page-header">
  <h2><?php echo $this->user[0]['username']; ?> <small>(<?php echo $this->user[0]['role']; ?>)</small> </h2>
  
</div>
<a class="btn btn-dark btn-sm" href="<?= URL.'user/edit/'.$this->user[0]['userid'] ?>"><i class="fa fa-edit"></i> Edit</a>
<br>
<br>
Created on:
<?= date('M j, Y, H:i', strtotime($this->user[0]['add_date'])) ?>
<br >
Gender:
<?= $this->user[0]['gender'] ?>

<br >
Email: 
<?= $this->user[0]['email'] ?>

<br >

