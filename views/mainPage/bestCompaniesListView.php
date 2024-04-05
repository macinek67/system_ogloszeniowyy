<div class="container-fluid">
    <p class="h1 fw-bolder text-primary-emphasis text-center">Pracodawcy, których warto znać</p>
    <div class="mt-5 mb-4 p-1 d-flex overflow-hidden">
        <?php
            foreach($data["companiesList"] as $company)
            {
                echo $company;
            }
        ?>
    </div>
    <div class="mb-5 d-flex justify-content-center">
        <button class="btn btn-outline-alt rounded-circle me-4"><i class=" h4 bi bi-arrow-left"></i></button>
        <button class="btn btn-outline-alt rounded-circle"><i class=" h4 bi bi-arrow-right"></i></button>
    </div>
</div>

<style>
    .btn-outline-alt {
        border-color: #0049a8;
        border-width: 2px;
        width: 50px;
        height: 50px;
        color: #0049a8;
    }

    .btn-outline-alt:hover {
        background-color: #0049a8;
        color: white;
    }
</style>