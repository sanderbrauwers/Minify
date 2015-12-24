<a class="btn btn-dark" href="<?php echo URL . 'page/add' ?>"><i class="fa fa-plus"></i> Create</a>


<table class="table table-striped" style="margin-top:30px">
<tr>
	<th>#</th>
	<th>Alias</th>
    <th>Title</th>
    <th>Last modified on</th>
</tr>

<?php foreach($this->pageList as $key => $value) { ?>

    <tr>
      <td><?= $value['pageid'] ?></td>
		  <td><?= $value['title_alias'] ?></td>
      <td>
        <a href="<?= URL. 'page/edit/' . $value['pageid'] ?>">
          <?= $value['title'] ?>
        </a>
      </td>
		  <td><?= date('F j, Y, G:i', strtotime($value['modify_date'])) ?></td>

<?php } ?>
</table>