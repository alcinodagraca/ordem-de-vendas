
<?php $this->load->view('layout/sidebar') ?>

<?php $this->load->view('layout/navbar') ?>


	<!-- Main Content -->
	<div id="content">

		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo base_url('usuarios')?>">Users</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
				</ol>
			</nav>

			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<a href="<?php echo base_url('usuarios'); ?>" class="btn btn-success btn-sm float-right"><i class="fa fa-arrow-left" aria-hidden="true"></i>
					&nbsp; Back</a>
				</div>
				<div class="card-body">
					<form method="post" name="form_edit">
						<div class="form-group row">
							<div class="col-md-4">
								<label>Name</label>
								<input type="text" class="form-control" name="first_name" value="<?php echo $user->first_name; ?>" placeholder="Enter your name">
								<?php echo form_error('first_name', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-4">
								<label>Last Name</label>
								<input type="text" class="form-control" name="last_name" value="<?php echo $user->last_name; ?>" placeholder="Enter your Last name">
								<?php echo form_error('last_name', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-4">
								<label>Email</label>
								<input type="email" class="form-control" name="email" value="<?php echo $user->email; ?>" placeholder="Enter your email">
								<?php echo form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>

						<div class="form-group row">

							<div class="col-md-4">
								<label>Username</label>
								<input type="text" class="form-control" name="username" value="<?php echo $user->username; ?>" placeholder="Enter your username">
								<?php echo form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-4">
								<label>Status</label>
								<select name="active" class="form-control">
									<option value="0" <?php echo ($user->active == 0) ? 'selected' : '' ?>>Deactive</option>
									<option value="1" <?php echo ($user->active == 1) ? 'selected' : '' ?>>Active</option>
								</select>
							</div>

							<div class="col-md-4">
								<label>Group</label>
								<select name="user_group" class="form-control">
									<option value="1" <?php echo ($user_group->id == 1) ? 'selected' : '' ?>>Administrator</option>
									<option value="2" <?php echo ($user_group->id == 2) ? 'selected' : '' ?>>Sales</option>
								</select>
							</div>

						</div>

						<div class="form-group row">
							<div class="col-md-6">
								<label>Password</label>
								<input type="password" class="form-control" name="password" placeholder="Enter your password">
								<?php echo form_error('password', '<small class="form-text text-danger">', '</small>'); ?>

							</div>

							<div class="col-md-6">
								<label>Confirm Password</label>
								<input type="password" class="form-control" name="confirm_password" placeholder="Confirm your password">
								<?php echo form_error('confirm_password', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<input type="hidden" name="user_id" value="<?php echo $user->id; ?>">

						</div>

						<br>

						<button type="submit" class="btn btn-primary btn-sm">Save</button>
					</form>
				</div>
			</div>

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
