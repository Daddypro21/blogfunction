<?php ob_start() ?>


<div class="container">
<h1 class="text-center"> Administration du blog</h1>
<a href="createPost" class="btn btn-success my-3">Créer un nouvel article</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Publié</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($data as $value):?>
<tr>
            <th scope="row"><?= $value['id'] ?></th>
            <td><?= $value['titre'] ?></td>
            <td><?= $value['date_created'] ?></td>
            <td>
                <a href="updatePost/<?= $value['id'] ?>" class="btn btn-warning">Modifier</a>
                <form action="delete/<?= $value['id'] ?>" method="POST" class="d-inline">
                <input type="hidden" name="token" id="token" value="">
                <button type="submit"class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
  <?php endforeach ?>

    
  </tbody>
</table>
</div>
<?php 
$content = ob_get_clean();
require "../template/tmpl.php";
?>
