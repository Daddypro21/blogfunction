<?php ob_start() ?>

  
<div class="container">
<div class="card">
    <!-- <h5 class="card-header">Featured</h5> -->
  <div class="card-body">
    <h5 class="card-title"><?= $titre ?></h5>
    <p class="card-text"><?= $content ?></p>
    <h6 class="small">publié le <?= $date_created ?></h6>
    <a href="#" class="btn btn-primary">retour en arriere</a>
  </div>
</div>
</div>
    
 
<?php 
$content = ob_get_clean();
require "../template/tmpl.php";
?>