<div class="container-lg">
    <div class="text-center">
        <p class="h1 fw-bolder text-primary-emphasis">Strefa ofert</p>
        <p class="blockquote text-primary-emphasis">Klikaj w oferty, które Cię interesują. Dzięki temu wyświetlimy Ci lepiej dopasowane ogłoszenia.</p>
    </div>

    <div class="col-md-10 d-sm-flex d-block pt-4 m-auto">
        <div class="col-sm-4 text-center rounded-5 shadow-sm p-3 border mt-1 mt-sm-0 d-flex justify-content-center bg-white">
            <a href="#" class="h5 text-primary-emphasis my-auto">Najnowsze rekomendacje</a>
        </div>
        <div class="col-sm-4 text-center rounded-5 shadow-sm border p-2 mt-1 mt-sm-0 d-flex justify-content-center bg-white">
            <a href="#" class="h5 text-primary-emphasis my-auto">Ostatnio oglądane</a>
        </div>
        <div class="col-sm-4 text-center rounded-5 shadow-sm border p-2 mt-1 mt-sm-0 d-flex justify-content-center bg-white">
            <a href="#" class="h5 text-primary-emphasis my-auto">Najbardziej popularne</a>
        </div>
    </div>
</div>

<div class="container-fluid mt-5 d-flex overflow-auto">
    <div class="col-12 d-flex m-auto flex-wrap justify-content-center">
        <?php
            echo $data["offersList"];
            echo $data["offersList"];
            echo $data["offersList"];
            echo $data["offersList"];
            echo $data["offersList"];
            echo $data["offersList"];
            echo $data["offersList"];
            echo $data["offersList"];
            echo $data["offersList"];
            echo $data["offersList"];
            echo $data["offersList"];
            echo $data["offersList"];
        ?>
    </div>
</div>