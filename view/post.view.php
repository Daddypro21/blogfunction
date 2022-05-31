<?php ob_start() ?>
    

    <h1>Voici le poste n°<?php print_r($data) ?> </h1>

<?php 
$content = ob_get_clean();
require "../template/tmpl.php";
?>