<form class="bg-white shadow-sm" method="post" enctype="multipart/form-data" action="<?php echo ROOT_URL . "konto/savePersonalData"; ?>">
    <div class="d-xl-flex d-lg-flex d-md-flex d-block">
        <div class="col-xl-3 col-lg-3 col-md-3 col-4 m-auto pt-3 pb-3">
            <label class="w-100" for="pfpInput">
                <img class="w-100 object-fit-cover border border-1 shadow-sm" alt="zdjęcie profilowe" src="<?php echo IMAGE_URL . $data["pfp"]; ?>">
            </label>
            <input id="pfpInput" type="file" name="pfp" value="<?php echo $data["pfp"]; ?>" class="d-none" accept=".jpg, .jpeg, .png" disabled>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-12 col-8 pt-xl-3 pt-lg-3 pt-md-3 pt-1 ps-xl-0 ps-lg-0 ps-md-0 ps-1 pe-xl-3 pe-lg-3 pe-md-3 pe-1">
            <div class="col pb-2">
                <p class="h6 ms-1">Imię:</p>
                <input id="nameInput" name="name" type="text" placeholder="Imię" class="form-control" value="<?php echo $data["name"]; ?>" disabled>
            </div>
            <div class="col pb-2">
                <p class="h6 ms-1">Naziwsko:</p>
                <input id="surnameInput" name="surname" type="text" placeholder="Nazwisko" class="form-control" value="<?php echo $data["surname"]; ?>" disabled>
            </div>
            <div class="col pb-2">
                <p class="h6 ms-1">Aktualne stanowisko:</p>
                <input id="currentOccupationInput" name="currentOccupation" type="text" placeholder="Aktualne stanowisko" class="form-control" value="<?php echo $data["currnent_occupation"]; ?>" disabled>
            </div>
            <div class="col pb-3">
                <p class="h6 ms-1">Miasto:</p>
                <input id="cityInput" type="text" name="city" placeholder="Miasto" class="form-control" value="<?php echo $data["city"]; ?>" disabled>
            </div>
            <div class="col float-xl-end float-lg-end float-md-end pb-3">
                <button id="personalDataEditButton" type="button" class="btn btn-secondary rounded-0 me-1" onclick="editPersonalData()">Edytuj</button>
                <button id="personalDataSaveButton" type="submit" class="btn btn-primary rounded-0" disabled>Zapisz</button>
            </div>
        </div>
    </div>
</form>

<script>
    function editPersonalData()
    {
        document.getElementById("pfpInput").disabled = false;
        document.getElementById("nameInput").disabled = false;
        document.getElementById("surnameInput").disabled = false;
        document.getElementById("currentOccupationInput").disabled = false;
        document.getElementById("cityInput").disabled = false;

        document.getElementById("personalDataEditButton").disabled = true;
        document.getElementById("personalDataSaveButton").disabled = false;
    }
</script>