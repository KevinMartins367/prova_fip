<div class="container container-fluid">
	<div class="content-wrapper">

		<div class="content-header row text-center">
			<h3 class="content-header-title">Alteração de Usuário</h3>
		</div>


		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-content collapse show">
						<div class="card-body">
							<form id="form_update" method="post" class="form" novalidate="">
								<input type="hidden" id="id" name="id" value="<?php echo $users['id']; ?>" />
								<div class="form-body">
									<h4 class="form-section"><i class="la la-building"></i> Dados Cadastrais</h4>
									<div class="row">
										<div class="col-md-6 mb-3">
											<div class="form-group">
												<label class="form-label" for="name">Nome</label>
												<div class="controls">
													<input id="name" class="form-control" name="name" type="text" maxlength="45" value="<?php echo $users['nome']; ?>"  placeholder="Kevin Martins" required data-validation-required-message="Campo obrigatório">
												</div>
											</div>
										</div>
										<div class="col-md-6 mb-3">
											<div class="form-group">
												<label class="form-label" for="login">Login</label>
												<div class="controls">
													<input id="login" class="form-control" name="login" type="text" maxlength="45" value="<?php echo $users['login']; ?>"  placeholder="kevinmartins" required data-validation-required-message="Campo obrigatório">
												</div>
											</div>
										</div>
										<div class="col-md-6 mb-3">
											<div class="form-group">
												<label class="form-label" for="cargo">Cargo</label>
												<div class="controls">
													<input id="cargo" class="form-control" name="cargo" type="text" maxlength="45" value="<?php echo $users['cargo']; ?>"  placeholder="Desenvolvedor" required data-validation-required-message="Campo obrigatório">
												</div>
											</div>
										</div>
										<div class="col-md-6 mb-3">
											<div class="form-group">
												<label class="form-label" for="cargo">Empresa</label>
												<div class="controls">
													<select class="form-control" name="empresa_id" id="empresa_id" required="" data-validation-required-message="Campo obrigatório" data-placeholder="Selecione..." style="width:100%">
														
														<?php
														foreach ($empresas as $empresa) { ?>
															<option value="<?php echo $empresa['id']; ?>" <?php echo ($empresa['id'] == $users['empresa_id']) ? ' selected' : ''; ?>><?php echo $empresa['nome']; ?></option>
														<?php
														} ?>
													</select>
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
