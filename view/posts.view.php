<?php ob_start() ?>
    

    <h1>Je suis la page qui affiche la liste des articles </h1>

<?php 
$content = ob_get_clean();
require "../template/tmpl.php";
?>