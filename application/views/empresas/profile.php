<div class="container container-fluid">
	<div class="content-wrapper">

		<div class="content-header row text-center">
			<h3 class="content-header-title">Alteração de Empresa</h3>
		</div>


		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-content collapse show">
						<div class="card-body">
							<form id="form_update" method="post" class="form" novalidate="">
								<input type="hidden" id="id" name="id" value="<?php echo $empresas['id']; ?>" />
								<div class="form-body">
									<h4 class="form-section"><i class="la la-building"></i> Dados Cadastrais</h4>
									<div class="row">
										<div class="col-md-6 mb-3">
											<div class="form-group">
												<label class="form-label" for="name">Nome</label>
												<div class="controls">
													<input id="name" class="form-control" name="name" type="text" maxlength="45" value="<?php echo $empresas['nome']; ?>"  placeholder="Kevin Martins" required data-validation-required-message="Campo obrigatório">
												</div>
											</div>
										</div>
										<div class="col-md-6 mb-3">
											<div class="form-group">
												<label class="form-label" for="cnpj">Login</label>
												<div class="controls">
													<input id="cnpj" class="form-control" name="cnpj" type="text" maxlength="45" value="<?php echo $empresas['cnpj']; ?>"  placeholder="XX.XXX.XXX/XXXX-XX" required data-validation-required-message="Campo obrigatório">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer text-muted text-center">
									<button id="btn_update" class="btn btn-success btn-lg">Alterar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
