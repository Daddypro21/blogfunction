<?php ob_start() ?>
   <div class= "container"> 

    <h1>Je suis la page qui modifie un article </h1>

    <form action="updatePost/id" method ="POST">
    <div class="form-group">
        <label for="title" >Le châpo</label>
        <input type="text" class="form-control" id="title" name="chapo" placeholder=
        "Modifier le Chapo">
    </div>
    <br>
    <div class="form-group">
        <label for="title" >Titre de l'article</label>
        <input type="text" class="form-control" id="title" name="title" placeholder=
        "Modifier le titre">
    </div>
    <br>
    <div class="form-group">
        <input type="hidden" class="form-control" id="token" name="token" value="">  
    </div>
    <br>
    <div class="form-group">
        <label for="content" >Contenu de l'article</label>
        <textarea name="content" id="content"  rows="8" class="form-control">
        Le nouveau contenu
        </textarea>
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>

    <br><br>
</form>
</div>

<?php 
$content = ob_get_clean();
require "../template/tmpl.php";
?>














