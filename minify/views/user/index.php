<a class="btn btn-dark" href="<?php echo URL . 'user/add' ?>"><i class="fa fa-plus"></i> Create</a>
<table class="table table-striped userlist" style="margin-top:30px">
	<thead>
		<tr>
			<th>#</th>
			<th>Login</th>
			<th>Email</th>
			<th>Role</th>
			<th>Created on</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($this->userList as $key => $value) { ?>
		<tr>
			<td><?php echo $value['userid'] ?></td>
			<td>
				<a class="userlist-single-name" href="<?php echo URL.'user/search/'.$value['userid'].'/'.$value['username'] ?>"><?php echo $value['username'] ?></a>
				<span class="userlist-single-nav">
					<a href="<?php echo URL.'user/edit/'.$value['userid'].'/'.$value['username'] ?>">Edit</a> 
					- <a class="delete" href="<?php echo URL.'user/delete/'.$value['userid'] ?>">Delete</a>
				</span>
			</td>
			<td><?php echo $value['email'] ?></td>
			<td><?php echo $value['role'] ?></td>
			<td><?php echo date('F j, Y', strtotime($value['add_date'])) ?></td>
		</tr>
    <?php } ?>
	</tbody>
</table>