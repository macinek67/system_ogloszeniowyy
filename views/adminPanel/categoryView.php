<div>
    <label class="fw-bolder h4">Dodaj kategorie:</label>
    <form method="post" action="<?php echo ROOT_URL . "konto/addCategory"; ?>" enctype="multipart/form-data">
        Nazwa: <input type="text" name="name"><br>
        Tlo: <input type="file" name="image"><br>
        <button type="submit" class="btn btn-dark">Zapisz</button>
    </form>
</div>

<div class="mt-5">
    <label class="fw-bolder h4">Dodaj podkategorie:</label>
    <form method="post" action="<?php echo ROOT_URL . "konto/addSubcategory"; ?>" enctype="multipart/form-data">
        Id kategorii: <input type="text" name="category_id"><br>
        Nazwa: <input type="text" name="name"><br>
        <button type="submit" class="btn btn-dark">Zapisz</button>
    </form>
</div>