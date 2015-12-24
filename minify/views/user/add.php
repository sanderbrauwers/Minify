<?php 

$this->form_errors();

?>

<div class="row">
	<form class="col-md-4" method="post" action="<?php echo URL;?>user/create">
	
		<label>Username</label>
		<input class="form-control" type="text" name="username" placeholder="Login" /><br />
		<label>Password</label>
		<input class="form-control" type="password" name="password" placeholder="Password" /><br />
		<label>Email</label>
		<input class="form-control" type="email" name="email" placeholder="Email" /><br />
			
		<label>Birthday</label> 
		<div class="row form-date">
			<input class="form-control form-date-single" type="text" name="birth_day" maxlength="2" placeholder="dd" />
			<input class="form-control form-date-single" type="text" name="birth_month" maxlength="2" placeholder="mm" />
			<input class="form-control form-date-single" type="text" name="birth_year" maxlength="4" placeholder="yyyy" />
		</div>
			
		<label>Role</label>
			<select class="form-control" name="role">
			<option value="default">Default</option>
			<option value="admin">Admin</option>
			<option value="owner">Owner</option>
		</select><br />
		
			<label>Gender</label>
			<select class="form-control" name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select><br />
		
		<input class="btn btn-dark" type="submit" value="Create"/>
	
	</form>
</div>
