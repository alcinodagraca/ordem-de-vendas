<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-xl-10 col-lg-12 col-md-9">

			<div class="card o-hidden border-0 shadow-lg my-5" style="margin-top: 12rem !important;">

				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<!--Info and Error Masseges-->
						<div class="col-md-12">
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
						</div>


						<div class="col-md-12">
							<?php if($message = $this->session->flashdata('info')) : ?>


							<div class="row">
								<div class="col-md-12">

									<div class="alert alert-info alert-dismissible fade show" role="alert">
										<strong><i class="fa fa-exclamation-triangle" aria-hidden="true"> &nbsp; </i><?php echo $message; ?></strong>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
							</div>

							<?php endif; ?>
						</div>

						<!--Info and Error Masseges-->

						<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
								</div>
								<form class="user" name="form_auth" method="post" action="<?php echo base_url('login/auth'); ?>">
									<div class="form-group">
										<input required type="email" name="email" class="form-control form-control-user"
											   id="exampleInputEmail" aria-describedby="emailHelp"
											   placeholder="Enter Email Address...">
									</div>
									<div class="form-group">
										<input required type="password" name="password" class="form-control form-control-user"
											   id="exampleInputPassword" placeholder="Password">
									</div>
									<br>
									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>
