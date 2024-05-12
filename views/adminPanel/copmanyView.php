<div>
    <label class="fw-bolder h4">Dodaj firme:</label>
    <form method="post" action="<?php echo ROOT_URL . "konto/addCompany"; ?>" enctype="multipart/form-data">
        Pelna nazwa: <input type="text" name="name"><br>
        Skrocona nazwa: <input type="text" name="short_name"><br>
        Lokalizacja: <input type="text" name="localization_link"><br>
        Logo: <input type="file" name="logo" accept=".jpg, .jpeg, .png"><br>
        <button type="submit" class="btn btn-dark">Zapisz</button>
    </form>
</div>