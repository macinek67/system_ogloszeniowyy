<form class="p-sm-5 p-2">
    <div class="p-2 ps-sm-5 pe-sm-5">
        <div class="text-center">
            <p class="h3 fw-bolder text-primary-emphasis">Podaj adres e-mail</p>
            <p class="text-primary-emphasis">aby się zalogować lub utworzyć konto</p>
        </div>
        <div class="pt-3">
            <input required type="email" class="form-control pt-2 pb-2" placeholder="Adres e-mail">
            <button class="btn-alt border-0 rounded-5 mt-3 p-3 w-100"><label class="h5 fw-bolder mb-0">Dalej <i class="bi bi-arrow-right ms-2"></i></label></button>
        </div>
        <div class="mt-4 mb-1 d-flex">
            <hr class="col-5">
            <p class="mt-1 col-2 text-center">lub</p>
            <hr class="col-5">
        </div>
        <div class="mt-2">
            <button class="diffLoginMethods btn btn-outline-alt rounded-5 w-100 d-flex align-items-center">
                <div class="h-75 col-2">
                    <img class="h-100" src="<?php echo IMAGE_URL; ?>googleIcon.png">
                </div>
                <div class="col-8">
                    <p class="h6 fw-bolder mb-0">Kontynuuj z Google</p>
                </div>
            </button>
            <button class="diffLoginMethods mt-2 btn btn-outline-alt rounded-5 w-100 d-flex align-items-center">
                <div class="h-75 col-2">
                    <img class="h-100" src="<?php echo IMAGE_URL; ?>facebookIcon.png">
                </div>
                <div class="col-8">
                    <p class="h6 fw-bolder mb-0">Kontynuuj z Facebook</p>
                </div>
            </button>
        </div>
    </div>
</form>