<div class="container-lg mt-5 pt-5">
    <div class="text-center">
        <p class="h1 fw-bolder text-primary-emphasis">Szukaj najlepszych pozycji</p>
        <p class="blockquote text-primary-emphasis">Wyszkuj dopasowane do ciebie oferty, aby znaleźć swoją wymarzoną pracę.</p>
    </div>
</div>

<form class="col-sm-10 col-12 m-auto mt-5" method="post" action="<?php echo ROOT_URL . "praca/szukaj"; ?>">
    <div class="col-lg-10 col-12 bg-light rounded-4 shadow-sm border m-auto text-center">
        <div class="ps-sm-4 pe-sm-4 ms-sm-3 me-sm-3 p-3">
            <div class="dropdown mb-2">
                <button class="btn border-dark dropdown-toggle w-100 p-3 rounded-3 fw-bold shadow-sm border" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Kategoria</button>
                <ul class="dropdown-menu w-100 shadow ps-2 categoryDropDown overflow-auto border border-2">
                    <?php echo $data["categoryDropdown"]; ?>
                </ul>
            </div>
            <div>
                <input type="text" name="position_name" class="form-control border-dark p-3 mb-2 shadow-sm fw-bolder" placeholder="Stanowisko, firma, słowo kluczowe">
                <input type="text" name="city" class="form-control border-dark p-3 mb-2 mt-2 shadow-sm fw-bolder" placeholder="Lokalizacja">
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-alt fw-bold rounded-5 mt-3 p-3 mb-4 col-11"><i class="bi bi-search h5 me-2 align-middle"></i><label class="align-middle">Szukaj pasujących ofert</label></button>
    </div>
</form>

<style>
    .btn-alt {
        color: white;
        background-color: #0049a8;
    }

    .btn-outline-alt {
        border-width: 1px;
        border-color: #0049a8;
        color: #0049a8;
        background-color: white;
    }

    .btn-alt:hover,
    .btn-alt:active,
    .btn-alt:focus,
    .btn-alt.active {
        background: #025fd9;
        color: #ffffff;
    }

    .categoryDropDown {
        height: 225px;
    }
</style>