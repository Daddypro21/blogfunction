<?php ob_start() ?>
    

    <h1><?= $data['titre'] ?></h1>
    <h3><?= $data['content'] ?></h3>
    <h5><?= $data['date_created'] ?></h5>

<?php 
$content = ob_get_clean();
require "../template/tmpl.php";
?>