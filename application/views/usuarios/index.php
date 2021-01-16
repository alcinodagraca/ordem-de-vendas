
<?php $this->load->view('layout/sidebar') ?>

<?php $this->load->view('layout/navbar') ?>


	<!-- Main Content -->
	<div id="content">

		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo base_url('/')?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
				</ol>
			</nav>


			<?php if($message = $this->session->flashdata('success')) : ?>

				<div class="row">
					<div class="col-md-12">

						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong><i class="fa fa-smile" aria-hidden="true"> &nbsp; </i><?php echo $message; ?></strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>

			<?php endif; ?>


			<?php if($message = $this->session->flashdata('error')) : ?>

				<div class="row">
					<div class="col-md-12">

						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong><i class="fa fa-exclamation-triangle" aria-hidden="true"> &nbsp; </i><?php echo $message; ?></strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>

			<?php endif; ?>

			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<a href="<?php echo base_url('usuarios/add')?>" class="btn btn-success float-right btn-sm"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; New</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered dataTable" width="100%" cellspacing="0">
							<thead>
							<tr>
								<th>ID</th>
								<th>User Name</th>
								<th>Email</th>
								<th>Group</th>
								<th class="text-center">Status</th>
								<th class="text-right no-sort">Actions</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($users as $user) :?>
							<tr>
								<td><?php echo$user->id ?></td>
								<td><?php echo$user->username ?></td>
								<td><?php echo$user->email ?></td>
								<td><?php echo ($this->ion_auth->is_admin($user->id) ? 'Administrator' : 'Sales'); ?></td>
								<td class="text-center pr-4"><?php echo ($user->active == 1 ? '<span class="badge badge-info btn-sm">Active</span>' : '<span class="badge badge-warning btn-sm">Desactive</span>') ?></td>
								<td class="text-right">
									<a href="<?php echo base_url('usuarios/edit/' . $user->id); ?>" title="Edit" class="btn btn-sm btn-primary"><i class="fa fa-user-edit" aria-hidden="true"></i>&nbsp; Edit</a>
									<a href="javascript(void)" data-toggle="modal" data-target="#user-<?php echo $user->id; ?>" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-user-times" aria-hidden="true"></i>&nbsp; Delete</a>
								</td>
							</tr>

								<div class="modal fade" id="user-<?php echo $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
									 aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Are you Sure?</h5>
												<button class="close" type="button" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">Do you really want to delete these records. This process cannot be undone.</div>
											<div class="modal-footer">
												<button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
												<a class="btn btn-danger btn-sm" href="<?php echo base_url('usuarios/del/' . $user->id);?>">Delete</a>
											</div>
										</div>
									</div>
								</div>

							<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
