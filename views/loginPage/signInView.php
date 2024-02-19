<form class="p-sm-5 p-2" method="post" action="<?php echo ROOT_URL; ?>login/zaloguj_konto">
    <div class="p-2 ps-sm-5 pe-sm-5">
        <div class="text-center">
            <p class="h3 fw-bolder text-primary-emphasis">Witaj ponownie</p>
            <p class="text-primary-emphasis">Wpisz hasło dla <label class="fw-bold"><?php echo $data["email"]; ?></label>, aby się zalogować</p>
        </div>
        <div class="pt-3">
            <input name="password" required type="password" class="form-control pt-2 pb-2" placeholder="Hasło">
            <button type="submit" class="btn-alt border-0 rounded-5 mt-4 p-3 w-100"><label class="h5 fw-bolder mb-0">Zaloguj się</i></label></button>
            <div class="mt-4 mb-1 d-flex">
                <hr class="col-5">
                <p class="mt-1 col-2 text-center">lub</p>
                <hr class="col-5">
            </div>
            <input type="hidden" name="email" value="<?php echo $data["email"]; ?>">
            <input type="hidden" name="code" value="<?php echo $data["code"]; ?>">
            <button type="button" class="btn btn-outline-alt rounded-5 p-3 w-100 mt-2"><label class="fw-bolder mb-0">Zaloguj się jednorazowym kodem</label></button>
        </div>
    </div>
</form>