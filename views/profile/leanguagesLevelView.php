<form class="bg-white shadow-sm" method="post" action="<?php echo ROOT_URL . "konto/saveLanguage"; ?>">

    <div class="col bg-light bg-gradient ps-3 pt-2">
        <label class="h5 text-primary-emphasis w-75">Języki</label>
        <a onclick="ShowUserSection()" class="float-end me-2 w-10 text-black">
            <i class="bi bi-plus-lg"></i><label class="h6 ps-1 d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none">Dodaj</label>
        </a>
    </div>

    <div class="userSectionEditVisible col p-3">
        <div class="form-text">Określ jakie języki znasz najlepiej i wskaż poziom ich znajomości. Pamiętaj, że możesz zostać poproszony o zaprezentowanie znajomości języka na rozmowie kwalifikacyjnej.</div>
        <hr>
        <div>
            <?php
                foreach($data as $language)
                {
                    echo $language;
                }
            ?>
        </div>
    </div>

    <div class="userSectionEditHidden col p-3">
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column">
            <label class="h6 m-auto col-md-2">Język:</label>
            <input type="text" name="language" placeholder="Język" class="form-control">
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Poziom zaawansowania:</label>
            <select name="level" class="form-control">
                <option value="podstawowy">podstawowy</option>
                <option value="średnio-zaawansowany">średnio-zaawansowany</option>
                <option value="zaawansowany">zaawansowany</option>
            </select>
        </div>
        <div class="col-12 text-end pt-4 pb-2">
            <a onclick="HideUserSection()" class="btn btn-secondary rounded-0 me-1">Anuluj</a>
            <button type="submit" class="btn btn-primary rounded-0">Zapisz</button>
        </div>
    </div>

</form>