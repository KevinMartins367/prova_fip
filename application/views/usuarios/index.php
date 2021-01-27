<div class="container">
  <h1>Usuários</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user): ?>
        <tr>
          <td>
            <a class="btn btn-secondary" href="<?php echo site_url('ususarios/profile/' . $user->id);?>">
              <?php echo $user->id;?>
            </a>  
          </td>
          <td><?php echo $user->nome;?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
