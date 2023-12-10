<form class="col-12" method="post" action="">
    <div class="col-sm-10 col-12 bg-light rounded-4 shadow-sm border m-auto p-3">
        
        <div class="d-md-flex d-block">
            <input type="text" class="form-control border-dark p-3" placeholder="Stanowisko, firma, słowo kluczowe">
            <button class="dropdown form-control border-dark mt-2 mb-2 mt-md-0 mb-md-0" data-bs-toggle="dropdown" aria-expanded="false">
                Kategoria
            </button>
            <input type="text" class="form-control border-dark p-3" placeholder="Lokalizacja">
        </div>

        <div class="mt-4">
            <button type="button" class="dropdown btn btn-alt m-1 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Poziom stanowiska
            </button>
            <button type="button" class="dropdown btn btn-alt m-1 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Rodzaj umowy
            </button>
            <button type="button" class="btn btn-alt m-1 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Wymiar pracy
            </button>
            <button type="button" class="btn btn-alt m-1 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Tryb pracy
            </button>
            <button type="submit" class="btn btn-alt fw-bold rounded-5 m-1 ps-4 pe-4"><i class="bi bi-search h5 me-2 align-middle"></i><label class="align-middle">Szukaj</label></button>
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