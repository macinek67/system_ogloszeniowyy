<form class="bg-white" method="post" action="">
    <div class="col bg-light bg-gradient">
        <label class="h5 ps-3 pt-2 text-info-emphasis">Dane kontaktowe</label>
    </div>
    <div class="col bg-white p-2 ps-3">
        <div class="col">
            <label class="h6">E-mail:</label>
            <input type="text" placeholder="E-mail" class="form-control" disabled>
            <div class="form-text">Wybrany przy rejestracji, możliwa zmiana w ustawieniach.</div>
        </div>
        <div class="col pt-2">
            <label class="h6">Telefon:</label>
            <input id="phoneInput" type="text" placeholder="Telefon" class="form-control" disabled>
        </div>
        <div class="col pt-2">
            <p class="h6">Data urodzenia:</p>
            <select id="daySelect" class="col-xl-2 col-lg-2 col-md-2 col-3" disabled></select>
            <select id="monthSelect" class="col-xl-2 col-lg-2 col-md-2 col-4" disabled></select>
            <select id="yearSelect" class="col-xl-2 col-lg-2 col-md-2 col-3" disabled></select>
            <div class="form-text">Aktualna data:</div>
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
        document.getElementById("daySelect").disabled = false;
        document.getElementById("monthSelect").disabled = false;
        document.getElementById("yearSelect").disabled = false;

        document.getElementById("contactDataEditButton").disabled = true;
        document.getElementById("contactDataSaveButton").disabled = false;
    }
</script>