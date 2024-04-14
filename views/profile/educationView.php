<form class="bg-white shadow-sm" method="post" action="<?php echo ROOT_URL . "konto/saveEducation"; ?>">

    <div class="col bg-light bg-gradient ps-3 pt-2">
        <label class="h5 text-primary-emphasis w-75">Wykształcenie</label>
        <a onclick="ShowUserSection()" class="float-end me-2 w-10 text-black">
            <i class="bi bi-plus-lg"></i><label class="h6 ps-1 d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none">Dodaj</label>
        </a>
    </div>

    <div class="userSectionEditVisible col p-3">
        <div class="form-text">Edukacja wciąż jest istotna. Rekrutujący może poznać poziom wiedzy teoretycznej, która może być przydatna lub wymagana na danym stanowisku. Jeśli masz już określone doświadczenie zawodowe, ogranicz sekcję edukacji do studiów.</div>
        <hr>
        <div>
        <?php
                foreach($data as $education)
                {
                    echo $education;
                }
            ?>
        </div>
    </div>

    <div class="userSectionEditHidden col p-3">
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column">
            <label class="h6 m-auto col-md-2">Nazwa szkoły:</label>
            <input type="text" name="school_name" placeholder="Nazwa szkoły" class="form-control">
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Poziom wykształcenia:</label>
            <select name="level" class="form-control">
                <option value="podstawowe">podstawowe</option>
                <option value="zawodowe">zawodowe</option>
                <option value="średnie">średnie</option>
                <option value="licencjat">licencjat</option>
                <option value="inżynier">inżynier</option>
                <option value="magister">magister</option>
                <option value="doktor">doktor</option>
                <option value="doktor habilitowany">doktor habilitowany</option>
                <option value="profesor">profesor</option>
            </select>
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Kierunek:</label>
            <input type="text" name="direction" placeholder="Kierunek" class="form-control">
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Specjalizacja:</label>
            <input type="text" name="specialization" placeholder="Specjalizacja" class="form-control">
        </div>
        <div class="col d-md-flex pt-3">
            <label class="h6 m-auto col-md-2">Okres:</label>
            <div class="d-flex col-md-12 col-12 pb-md-0 pb-1">
                <label class="me-2 mt-1">od</label>
                <input type="text" name="period_start" class="col-4 ms-1 border border-secondary rounded-2 p-1" placeholder="yyyy-mm-dd">
                <label class="ms-2 me-2 mt-1">do</label>
                <input type="text" name="period_end" class="col-4 ms-1 border border-secondary rounded-2 p-1" placeholder="yyyy-mm-dd">
            </div>
        </div>
        <div class="col-12 text-end pt-4 pb-2">
            <a onclick="HideUserSection()" class="btn btn-secondary rounded-0 me-1">Anuluj</a>
            <button type="submit" class="btn btn-primary rounded-0">Zapisz</button>
        </div>
    </div>

</form>