<div class="container-lg">
    <div class="text-center">
        <p class="h1 fw-bolder text-primary-emphasis">Strefa ofert</p>
        <p class="blockquote text-primary-emphasis">Klikaj w oferty, które Cię interesują. Dzięki temu wyświetlimy Ci lepiej dopasowane ogłoszenia.</p>
    </div>

    <div class="col-md-10 d-sm-flex d-block pt-4 m-auto">
        <div class="col-sm-4 text-center bg-light rounded-5 shadow-sm border border-2 p-2 mt-1 mt-sm-0">
            <a href="#" class="h5 text-muted">Najnowsze rekomendacje</a>
        </div>
        <div class="col-sm-4 text-center bg-light rounded-5 shadow-sm border border-2 p-2 mt-1 mt-sm-0">
            <a href="#" class="h5 text-muted">Ostatnio oglądane</a>
        </div>
        <div class="col-sm-4 text-center bg-light rounded-5 shadow-sm border border-2 p-2 mt-1 mt-sm-0">
            <a href="#" class="h5 text-muted">Najbardziej popularne</a>
        </div>
    </div>
</div>

<div class="container-fluid mt-5 d-flex overflow-auto">
    <div class="col-12 d-flex m-auto flex-wrap justify-content-center">
        <?php
            echo $data["offersList"];
        ?>
    </div>
</div>