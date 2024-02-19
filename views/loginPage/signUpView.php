<form id="checkEmail_form" class="p-sm-5 p-2" method="post" action="<?php echo ROOT_URL; ?>login/utworz_konto">
    <div class="p-2 ps-sm-5 pe-sm-5">
        <div class="text-center">
            <p class="h3 fw-bolder text-primary-emphasis">Utwórz hasło</p>
            <p class="text-primary-emphasis">Aby kontynuować, utwórz hasło dla <label class="fw-bold"><?php echo $data["email"]; ?></label></p>
        </div>
        <div class="pt-3">
            <input id="password_control" name="password" required type="password" class="form-control pt-2 pb-2" placeholder="Hasło">
            <label id="errorMessage_control" class="text-danger d-none"></label>
            <div class="pt-4">
                <div class="d-flex">
                    <input id="requiredCheckbox" required type="checkbox" class="form-check-input">
                    <label class="ms-2"><label class="text-danger">*</label> Akceptuję Regulamin, żeby utworzyć i korzystać z bezpłatnego konta w serwisie Pracuj.pl</label>
                </div>
                <div class="d-flex mt-3">
                    <input type="checkbox" class="form-check-input">
                    <label class="ms-2">Chcę otrzymywać mailem informacje marketingowe od Pracuj.pl</label>
                </div>
                <div class="d-flex mt-3">
                    <input type="checkbox" class="form-check-input">
                    <label class="ms-2">Chcę udostępnić mój profil pracodawcom</label>
                </div>
                <div class="d-flex mt-3">
                    <input type="checkbox" class="form-check-input">
                    <label class="ms-2">Chcę otrzymywać mailem informacje marketingowe o klientach Pracuj.pl</label>
                </div>
            </div>
            <input type="hidden" name="email" value="<?php echo $data["email"]; ?>">
            <input type="hidden" name="code" value="<?php echo $data["code"]; ?>">
            <button onclick="checkIfPasswordIsValid()" type="button" class="btn-alt border-0 rounded-5 mt-4 p-3 w-100"><label class="h5 fw-bolder mb-0">Utwórz konto</i></label></button>
        </div>
    </div>
</form>

<script>
    function checkIfPasswordIsValid()
    {
        var password_control = document.getElementById("password_control");
        var requiredCheckbox = document.getElementById("requiredCheckbox");
        var error_message = "";

        if((password_control.value).length >= 6 && (password_control.value).length <= 16)
        {
            if(requiredCheckbox.checked == true)
            {
                document.getElementById("checkEmail_form").submit();
                return;
            }
            else
            {
                error_message = "Aby utworzyć konto musisz zaakceptować regulamin!";
            }
        }
        else
        {
            error_message = "Hasło powinno zawierać minimum 6 oraz maksymalnie 16 znaków!";
        }

        var errorMessage_control = document.getElementById("errorMessage_control");
        errorMessage_control.innerText = error_message;
        errorMessage_control.classList.replace("d-none", "d-block");
    }
</script>