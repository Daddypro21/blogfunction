<?php ob_start() ?>
    

    <h1>Je suis la page d'accueil de contact </h1>

<?php 
$content = ob_get_clean();
require "../template/tmpl.php";
?>