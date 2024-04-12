<form class="bg-white shadow-sm" method="post" action="<?php echo ROOT_URL . "konto/saveCourse"; ?>">

    <div class="col bg-light bg-gradient ps-3 pt-2">
        <label class="h5 text-primary-emphasis w-75">Kursy, szkolenia, certyfikaty</label>
        <a onclick="ShowUserSection()" class="float-end me-2 w-10 text-black">
            <i class="bi bi-plus-lg"></i><label class="h6 ps-1 d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none">Dodaj</label>
        </a>
    </div>

    <div class="userSectionEditVisible col p-3">
        <div class="form-text">Potwierdź swoje kompetencje. Certyfikaty ukończenia niektórych kursów i szkoleń są wysoko cenione przez pracodawców.</div>
        <hr>
        <div>
            <?php
                foreach($data as $course)
                {
                    echo $course;
                }
            ?>
        </div>
    </div>

    <div class="userSectionEditHidden col p-3">
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column">
            <label class="h6 m-auto col-md-2">Nazwa:</label>
            <input type="text" placeholder="Nazwa" name="name" class="form-control">
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Organizator:</label>
            <input type="text" name="organizer" placeholder="Organizator" class="form-control">
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Okres:</label>
            <div class="col-md-10 col-12">
            <input type="text" name="period_start" pattern="\d{4}-\d{2}-\d{2}" class="col-5 border border-secondary p-1 rounded-2" placeholder="yyyy-mm-dd"></select>
            <label class="ms-1 me-1">do</label>
            <input type="text" name="period_end" pattern="\d{4}-\d{2}-\d{2}" class="col-5 border border-secondary p-1 rounded-2" placeholder="yyyy-mm-dd"></select>
            </div>
        </div>
        <div class="col-12 text-end pt-4 pb-2">
            <a onclick="HideUserSection()" class="btn btn-secondary rounded-0 me-1">Anuluj</a>
            <button type="submit" class="btn btn-primary rounded-0">Zapisz</button>
        </div>
    </div>

</form>