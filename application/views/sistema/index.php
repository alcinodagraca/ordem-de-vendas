
<?php $this->load->view('layout/sidebar') ?>

<?php $this->load->view('layout/navbar') ?>


	<!-- Main Content -->
	<div id="content">

		<!-- Begin Page Content -->
		<div class="container-fluid">

			<!-- Page Heading -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
				</ol>
			</nav>

			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-body">
					<form method="post" name="form_edit">
						<div class="form-group row mb-4">
							<div class="col-md-3">
								<label>Razão Social</label>
								<input type="text" class="form-control " name="sistema_razao_social" value="<?php echo $system->sistema_razao_social; ?>" placeholder="Razão social">
								<?php echo form_error('sistema_razao_social', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-3">
								<label>Nome Fantasia</label>
								<input type="text" class="form-control form-control-user" name="sistema_nome_fantasia" value="<?php echo $system->sistema_nome_fantasia; ?>" placeholder="Nome fantasia">
								<?php echo form_error('sistema_nome_fantasia', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-3">
								<label>CNPJ</label>
								<input type="text" class="form-control form-control-user" name="sistema_cnpj" value="<?php echo $system->sistema_cnpj; ?>" placeholder="CNPJ">
								<?php echo form_error('sistema_cnpj', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-3">
								<label>Inscrição Estadual</label>
								<input type="text" class="form-control form-control-user" name="sistema_ie" value="<?php echo $system->sistema_ie; ?>" placeholder="Inscrição Estadual">
								<?php echo form_error('sistema_ie', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>


						<div class="form-group row mb-3">
							<div class="col-md-3">
								<label>Telefone Fixo</label>
								<input type="text" class="form-control form-control-user" name="sistema_telefone_fixo" value="<?php echo $system->sistema_telefone_fixo; ?>" placeholder="Telefone Fixo">
								<?php echo form_error('sistema_telefone_fixo', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-3">
								<label>Telefone Móvel</label>
								<input type="text" class="form-control form-control-user" name="sistema_telefone_movel" value="<?php echo $system->sistema_telefone_movel; ?>" placeholder="Telefone Móvel">
								<?php echo form_error('sistema_telefone_movel', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-3">
								<label>Email</label>
								<input type="text" class="form-control form-control-user" name="sistema_email" value="<?php echo $system->sistema_email; ?>" placeholder="Email">
								<?php echo form_error('sistema_email', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-3">
								<label>Endereço de Site</label>
								<input type="text" class="form-control form-control-user" name="sistema_site_url" value="<?php echo $system->sistema_site_url; ?>" placeholder="Endereço de Site">
								<?php echo form_error('sistema_site_url', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>


						<div class="form-group row mb-3">

							<div class="col-md-4">
								<label>Endereço</label>
								<input type="text" class="form-control form-control-user" name="sistema_endereco" value="<?php echo $system->sistema_endereco; ?>" placeholder="Endereço">
								<?php echo form_error('sistema_endereco', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-2">
								<label>CEP</label>
								<input type="text" class="form-control form-control-user" name="sistema_cep" value="<?php echo $system->sistema_cep; ?>" placeholder="Endereço CEP">
								<?php echo form_error('sistema_cep', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-2">
								<label>Número</label>
								<input type="text" class="form-control form-control-user" name="sistema_numero" value="<?php echo $system->sistema_numero; ?>" placeholder="Nº">
								<?php echo form_error('sistema_numero', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-2">
								<label>Cidade</label>
								<input type="text" class="form-control form-control-user" name="sistema_cidade" value="<?php echo $system->sistema_cidade; ?>" placeholder="Cidade">
								<?php echo form_error('sistema_cidade', '<small class="form-text text-danger">', '</small>'); ?>
							</div>

							<div class="col-md-2">
								<label>Estado</label>
								<input type="text" class="form-control form-control-user" name="sistema_estado" value="<?php echo $system->sistema_estado; ?>" placeholder="Estado">
								<?php echo form_error('sistema_estado', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>

						<div class="form-group row mb-3">
							<div class="col-md-12">
								<label>Texto de Ordem de Serviço</label>
								<textarea class="form-control form-control-user" name="sistema_endereco" placeholder="Texto de Ordem de Serviço"><?php echo $system->sistema_txt_ordem_servico; ?></textarea>
								<?php echo form_error('sistema_txt_ordem_servico', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
						</div>

						<button type="submit" class="btn btn-primary btn-sm">Save</button>
					</form>
				</div>
			</div>

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
