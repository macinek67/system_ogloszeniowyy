<div class="container-lg">
    <div class="text-center">
        <p class="h1 fw-bolder text-primary-emphasis">Strefa ofert</p>
        <p class="blockquote text-primary-emphasis">Klikaj w oferty, które Cię interesują. Dzięki temu wyświetlimy Ci lepiej dopasowane ogłoszenia.</p>
    </div>
</div>

<div class="container-fluid mt-5 d-flex overflow-auto">
    <div class="col-12 d-flex m-auto flex-wrap justify-content-center">
        <?php
            foreach($data["searchedOffersList"] as $searchedAnnouncement)
            {
                echo $searchedAnnouncement;
            }
        ?>
    </div>
</div>