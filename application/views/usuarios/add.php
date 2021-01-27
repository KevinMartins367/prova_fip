<div class="container container-fluid">
	<div class="content-wrapper">

		<div class="content-header row text-center">
			<h3 class="content-header-title">Cadastro de Usuário</h3>
		</div>


		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-content collapse show">
						<div class="card-body">
							<form id="form_add" method="post" class="form" novalidate="">
								<div class="form-body">
									<h4 class="form-section"><i class="la la-building"></i> Dados Cadastrais</h4>
									<div class="row">
										<div class="col-md-6 mb-3">
											<div class="form-group">
												<label class="form-label" for="name">Nome</label>
												<div class="controls">
													<input id="name" class="form-control" name="name" type="text" maxlength="45" placeholder="Kevin Martins" required data-validation-required-message="Campo obrigatório">
												</div>
											</div>
										</div>
										<div class="col-md-6 mb-3">
											<div class="form-group">
												<label class="form-label" for="login">Login</label>
												<div class="controls">
													<input id="login" class="form-control" name="login" type="text" maxlength="45" placeholder="kevinmartins" required data-validation-required-message="Campo obrigatório">
												</div>
											</div>
										</div>
										<div class="col-md-6 mb-3">
											<div class="form-group">
												<label class="form-label" for="cargo">Cargo</label>
												<div class="controls">
													<input id="cargo" class="form-control" name="cargo" type="text" maxlength="45" placeholder="Desenvolvedor" required data-validation-required-message="Campo obrigatório">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer text-muted text-center">
									<button id="btn_save" class="btn btn-success btn-lg">Cadastrar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
