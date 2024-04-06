<div class="container-fluid">
    <div class="text-center">
        <p class="h1 fw-bolder text-primary-emphasis">Bądź na bieżąco</p>
        <p class="blockquote text-primary-emphasis">Sprawdzaj kategorie, w których mamy najwięcej ofert</p>
    </div>

    <div class="mt-5 mb-4 p-2 d-flex overflow-hidden">
        <?php
            foreach($data["categoryList"] as $category)
            {
                echo $category;
            }
        ?>
    </div>

    <div class="mb-5 d-flex justify-content-center">
        <button class="btn btn-outline-alt rounded-circle me-4"><i class=" h4 bi bi-arrow-left"></i></button>
        <button class="btn btn-outline-alt rounded-circle"><i class=" h4 bi bi-arrow-right"></i></button>
    </div>
</div>