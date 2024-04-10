<form class="bg-white shadow-sm" method="post" action="<?php echo ROOT_URL . "konto/saveLink"; ?>">

    <div class="col bg-light bg-gradient ps-3 pt-2">
        <label class="h5 text-primary-emphasis w-75">Linki</label>
        <a onclick="ShowUserSection()" class="float-end me-2 w-10 text-black">
            <i class="bi bi-plus-lg"></i><label class="h6 ps-1 d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none">Dodaj</label>
        </a>
    </div>

    <div class="userSectionEditVisible col p-3">
        <div class="form-text">Dbasz o swój wizerunek w sieci? Chcesz się pochwalić ciekawymi projektami? Dodaj linki do swojej strony, portfolio, wizytówki online.</div>
        <hr>
        <div>
            <?php
                foreach($data as $link)
                {
                    echo $link;
                }
            ?>
        </div>
    </div>

    <div class="userSectionEditHidden col p-3">
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column">
            <label class="h6 m-auto col-md-2">Adres URL:</label>
            <input type="text" name="url" placeholder="Adres URL" class="form-control">
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Typ linku:</label>
            <select name="name" class="form-control">
                <option value="Portfolio">Portfolio</option>
                <option value="Strona osobista">Strona osobista</option>
                <option value="Strona firmowa">Strona firmowa</option>
                <option value="Projekt">Projekt</option>
                <option value="Link do profilu społecznościowego">Link do profilu społecznościowego</option>
                <option value="Inny">Inny</option>
            </select>
        </div>
        <div class="col-12 text-end pt-4 pb-2">
            <a onclick="HideUserSection()" class="btn btn-secondary rounded-0 me-1">Anuluj</a>
            <button type="submit" class="btn btn-primary rounded-0">Zapisz</button>
        </div>
    </div>

</form>