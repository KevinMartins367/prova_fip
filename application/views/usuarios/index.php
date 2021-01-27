<div class="container container-fluid">
	<div class="card">
		<div class="card-header">
			<div class="row m-2">
				<div class="col-6 align-self-start">
					<h1>Usuários</h1>
				</div>
				<div class="col-6 d-flex flex-row-reverse bd-highlight text-center">
					<a href="<?php echo site_url('usuarios/add/'); ?>" class="btn btn-info text-white"><i class="ft-plus"></i> Cadastrar Novo</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row m-2">
				<div class="col-12">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $user) : ?>
								<tr>
									<td><?php echo $user->id; ?></td>
									<td><?php echo $user->nome; ?></td>
									<td>
										<div class="row">
											<div class="col-md-6 col-sm-12">
												<a class="btn btn-primary" href="<?php echo site_url('usuarios/profile/' . $user->id); ?>">
													Alterar
												</a>
											</div>
											<div class="col-md-6 col-sm-12">
												<a class="btn btn-danger" data-id="<?php echo $user->id; ?>">
													Deletar
												</a>
											</div>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
