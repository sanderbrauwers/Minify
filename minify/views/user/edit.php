<div class="row">
	<form method="post" class="col-md-4" action="<?= URL ?>user/editSave/<?= $this->user[0]['userid'] ?>">
		<label>Username</label>
		<input class="form-control" type="text" name="username" value="<?= $this->user[0]['username'] ?>" disabled/>
		
		<label>Password</label>
		<input class="form-control" type="password" name="password" />
		<label>Email</label>
		<input class="form-control" type="text" name="email" value="<?= $this->user[0]['email'] ?>" />
		<label>Name</label>
		<input class="form-control" type="text" name="name" value="<?= $this->user[0]['name'] ?>" />
		
		<label>Birthday</label> 
		<div class="row form-date">
			<input class="form-control form-date-single" type="text" name="birth_day" maxlength="2" placeholder="dd" 
				value="<?= date('d', strtotime($this->user[0]['birth'])) ?>" />
			<input class="form-control form-date-single" type="text" name="birth_month" maxlength="2" placeholder="mm" 
				value="<?= date('m', strtotime($this->user[0]['birth'])) ?>" />
			<input class="form-control form-date-single" type="text" name="birth_year" maxlength="4" placeholder="yyyy" 
				value="<?= date('Y', strtotime($this->user[0]['birth'])) ?>" />
		</div>
			
		<label>Role</label>
		<select class="form-control" name="role">
			<option value="default" <?php if($this->user[0]['role'] == 'default') echo 'selected'; ?>>Default</option>
			<option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'; ?>>Admin</option>
			<option value="owner" <?php if($this->user[0]['role'] == 'owner') echo 'selected'; ?>>Owner</option>
		</select>
		
		<label>Gender</label>
		<select class="form-control" name="gender">
			<option value="Male" <?php if($this->user[0]['gender'] == 'Male') echo 'selected'; ?>>Male</option>
			<option value="Female" <?php if($this->user[0]['gender'] == 'Female') echo 'selected'; ?>>Female</option>
		</select> 
		<br>
		<input class="btn btn-dark" type="submit" value="Update" />
	</form>
</div>
