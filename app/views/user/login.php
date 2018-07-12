<div class="col-md-6 offset-md-3 mt-5">
	<?php if(Config::get('msg') !== ''): ?>
		<div class="alert alert-info"><?= Config::get('msg'); ?></div>
	<?php endif; ?>
	<div class="card">
		<div class="card-header text-center">
			<b>User Login</b>
		</div>
		<div class="card-body">
			<form action="<?= PATH?>user/login" method="post">
			  <div class="form-group">
			    <label for="name">User Name</label>
			    <input type="text" class="form-control" id="name" name="name">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" name="password">
			  </div>
			  <button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
</div>