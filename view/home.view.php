<?php ob_start() ?>
    

    <h1>Je suis la page d'accueil du blog </h1>

<?php 
$content = ob_get_clean();
require "../template/tmpl.php";
?>