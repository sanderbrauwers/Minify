<a class="btn btn-dark" href="<?= URL ?>blog/add">
  <i class="fa fa-pencil"></i> 
  New post
</a>

<table class="table table-striped" style="margin-top:30px">
<tr>
    <th>Title</th>
    <th>Last modified on</th>
    <th>Status</th>
</tr>
<?php foreach($this->blogList as $key => $value){ ?>
  <tr>
    <td>
      <a href="<?= URL ?>blog/edit/<?= $value['blogid'] ?>">
        <?= $value['title'] ?>
      </a>
    </td>
		
		
		<td><?= date('F j, Y, G:i', strtotime($value['modify_date'])) ?></td>
		
		<?php if($value['is_active'] == 'true'): ?>
			<td class="text-success">
        <i class="fa fa-circle"></i> Active
      </td>
		<?php else: ?>
			<td class="text-error">
        <i class="fa fa-circle"></i> Inactive
      </td>
		<?php endif; 
} ?>
		
</table>