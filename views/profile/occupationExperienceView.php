<form class="bg-white shadow-sm" method="post" action="">

    <div class="col bg-light bg-gradient ps-3 pt-2">
        <label class="h5 text-primary-emphasis w-75">Doświadczenie zawodowe</label>
        <a onclick="ShowUserSection()" class="float-end me-2 w-10 text-black">
            <i class="bi bi-plus-lg"></i><label class="h6 ps-1 d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none">Dodaj</label>
        </a>
    </div>

    <div class="userSectionEditVisible col p-3">
        <div class="form-text">Historia zatrudnienia to podstawowa informacja, na bazie której pracodawca oceni Twoje kompetencje. Koniecznie uzupełnij informacje o stanowiskach na których pracowałeś i opisz dokładnie wykonywane obowiązki.</div>
    </div>

    <div class="userSectionEditHidden col p-3">
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column">
            <label class="h6 m-auto col-md-2">Stanowisko:</label>
            <input type="text" placeholder="Stanowisko" class="form-control">
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Miasto:</label>
            <input type="text" placeholder="Miasto" class="form-control">
        </div>
        <div class="col d-xl-flex d-lg-flex d-md-flex d-column pt-3">
            <label class="h6 m-auto col-md-2">Nazwa firmy:</label>
            <input type="text" placeholder="Nazwa firmy" class="form-control">
        </div>
        <div class="col d-md-flex pt-3">
            <label class="h6 m-auto col-md-2">Okres:</label>
            <div class="d-flex col-md-5 col-12 pb-md-0 pb-1">
                <label class="col-2">od</label>
                <select class="col-5"></select>
                <select class="col-5 ms-1"></select>
            </div>
            <div class="d-flex col-md-5 col-12 ">
                <label class="col-2 text-md-center">do</label>
                <select class="col-5"></select>
                <select class="col-5 ms-1"></select>
            </div>
        </div>
        <div class="col-12 float-end text-end pb-3">
            <input type="checkbox">
            <label>trwa nadal</label>
        </div>
        <div class="col-12 d-xl-flex d-lg-flex d-md-flex d-column">
            <label class="h6 col-md-2">Obowiązki:</label>
            <textarea placeholder="Obowiązki" class="form-control" rows="6"></textarea>
        </div>
        <div class="col-12 text-end pt-4 pb-2">
            <a onclick="HideUserSection()" class="btn btn-secondary rounded-0 me-1">Anuluj</a>
            <button type="submit" class="btn btn-primary rounded-0">Zapisz</button>
        </div>
    </div>

</form>