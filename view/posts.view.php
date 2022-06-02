<?php ob_start() ?>
    

<div class="container">
<div class="card">
    <?php foreach($data as $value):?>
    <!-- <h5 class="card-header">Featured</h5> -->
  <div class="card-body">
    <h5 class="card-title"><?= $value['titre'] ?></h5>
    <p class="card-text"><?= $value['content'] ?></p>
    <h6 class="small">publié le <?= $value['date_created'] ?></h6>
    <a href="#" class="btn btn-primary">plus</a>
  </div>
  <?php endforeach ?>
</div>
</div>
    
<?php 
$content = ob_get_clean();
require "../template/tmpl.php";
?>