<form class="bg-white shadow-sm" method="post" action="<?php echo ROOT_URL . "konto/saveSkill"; ?>">

    <div class="col bg-light bg-gradient ps-3 pt-2">
        <label class="h5 text-primary-emphasis w-75">Umiejętności</label>
    </div>

    <div class="userSectionEditVisible col p-3">
        <div class="form-text">Wpisz swoje umiejętności pojedynczo zatwierdzając przyciskiem "Dodaj":</div>
    </div>

    <div class="col p-3">
        <div class="col d-md-flex d-column">
            <label class="h6 m-auto col-md-1">Nazwa:</label>
            <input type="text" name="name" placeholder="Nazwa" class="form-control">
        </div>
        <div class="col-12 text-end pt-4 pb-2">
            <button type="submit" class="btn btn-primary rounded-0">Dodaj</button>
        </div>
        <hr>
        <div class="d-flex flex-wrap">
            <?php
                foreach($data as $skill)
                {
                    $href = ROOT_URL . "konto/removeSkill/" . $skill["skill_id"];
                    echo "<a href='$href' class='btn btn-alt me-2 mt-2'>$skill[name] <i class='bi bi-x-lg ms-1'></i></a>";
                }
            ?>
        </div>
    </div>

</form>

<style>
    .btn-alt {
        color: white;
        background-color: #0049a8;
    }

    .btn-alt:hover,
    .btn-alt:active,
    .btn-alt:focus,
    .btn-alt.active {
        background: #025fd9;
        color: #ffffff;
    }
</style>