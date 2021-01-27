<div class="container container-fluid text-center">

	<h1><?php echo $title; ?></h1>
	<div class="row">
		<div class="col-md-6 col-lg-6 col-sm-12">
			<div class="card m-2">
				<div class="card-body">
					<h5 class="card-title">Usuários</h5>
					<p class="card-text">Acesso as informações dos Usuários cadastrados no sistema</p>

					<a href="<?php echo site_url('usuarios'); ?>" type="button" class="btn btn-primary">Acessar</a>

				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-6 col-sm-12">

			<div class="card m-2">
				<div class="card-body">
					<h5 class="card-title">Empresas</h5>
					<p class="card-text">Acesso as informações das Empresas cadastradas no sistema</p>
					<a href="<?php echo site_url('empresas'); ?>" type="button" class="btn btn-secondary">Acessar</a>

				</div>
			</div>
		</div>
	</div>
</div>
