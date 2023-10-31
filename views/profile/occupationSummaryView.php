<form class="bg-white" method="post" action="">
    <div class="col bg-light bg-gradient ps-3 pt-2">
        <label class="h5 text-info-emphasis w-75">Podsumowanie zawodowe</label>
        <a onclick="ShowUserSection()" class="float-end me-2 w-10 text-black">
            <i class="bi bi-pen"></i><label class="h6 ps-1 d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none">Edytuj</label>
        </a>
    </div>

    <div class="userSectionEditVisible col p-3">
        <div class="form-text">Pierwsze co zobaczą rekrutujący na Twoim profilu to podsumowanie zawodowe. Postaraj się w paru zdaniach, podsumować Twoje doświadczenie zawodowe.</div>
    </div>

    <div class="userSectionEditHidden col p-3">
        <div class="d-xl-flex d-lg-flex d-md-flex d-sm-flex d-column">
            <label class="h6 pe-5">Opis:</label>
            <textarea class="form-control w-100" rows="6"></textarea>
        </div>
        <div class="d-xl-flex d-lg-flex d-md-flex d-sm-flex d-column pt-4">
            <label class="h6 pe-5">Aktualna pozycja zawodowa:</label>
            <select class="w-100"></select>
        </div>
        <div class="col-12 text-end pt-4 pb-2">
            <a onclick="HideUserSection()" class="btn btn-secondary rounded-0 me-1">Anuluj</a>
            <button type="submit" class="btn btn-primary rounded-0">Zapisz</button>
        </div>
    </div>

</form>