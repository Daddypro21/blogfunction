<?php ob_start() ?>
    

    <h1>ERROR 404</h1>

<?php 
$content = ob_get_clean();
require "./../template/tmpl.php";
?>