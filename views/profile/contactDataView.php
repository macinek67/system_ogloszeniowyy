<form class="bg-white shadow-sm" method="post" action="<?php echo ROOT_URL . "konto/saveContactData"; ?>">
    <div class="col bg-light bg-gradient">
        <label class="h5 ps-3 pt-2 text-primary-emphasis">Dane kontaktowe</label>
    </div>
    <div class="col bg-white p-2 ps-3">
        <div class="col">
            <label class="h6">E-mail:</label>
            <input type="text" placeholder="E-mail" class="form-control" value="<?php echo $data["email"]; ?>" disabled>
            <div class="form-text">Wybrany przy rejestracji, możliwa zmiana w ustawieniach.</div>
        </div>
        <div class="col pt-2">
            <label class="h6">Telefon:</label>
            <input id="phoneInput" name="telephone_number" pattern="\d{9}" type="text" placeholder="Telefon" class="form-control" value="<?php echo $data["telephone_number"] ?>" disabled>
        </div>
        <div class="col pt-2">
            <p class="h6">Data urodzenia (yyyy-mm-dd):</p>
            <input type="text" name="birth_date" pattern="\d{4}-\d{2}-\d{2}" id="birth_dateInput" placeholder="Data urodzenia" class="col-xl-2 col-lg-2 col-md-2 col-3 form-control" value="<?php echo $data["birth_date"]; ?>" disabled></select>
        </div>
        <div class="col pb-3 pt-3">
            <button id="contactDataEditButton" type="button" class="btn btn-secondary rounded-0 me-1" onclick="editContactData()">Edytuj</button>
            <button id="contactDataSaveButton" type="submit" class="btn btn-primary rounded-0" disabled>Zapisz</button>
        </div>
    </div>
</form>

<script>
    function editContactData()
    {
        document.getElementById("phoneInput").disabled = false;
        document.getElementById("birth_dateInput").disabled = false;

        document.getElementById("contactDataEditButton").disabled = true;
        document.getElementById("contactDataSaveButton").disabled = false;
    }
</script>