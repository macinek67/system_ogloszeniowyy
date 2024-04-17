<form method="post" action="<?php echo ROOT_URL . "praca/szukaj"; ?>" class="bestCategoryContainer bg-primary bg-opacity-50 border shadow-sm rounded-5 me-3 border border-2" style="background-image: url(<?php echo IMAGE_URL . $data["image"]; ?>);">
    <button class="p-0 w-100 h-75 border-0 bg-transparent rounded-5">
        <div class="h-100"></div>
        <div class="companyName mt-3 mb-2 text-center justify-content-center bg-white rounded-bottom-5 shadow-sm ps-2 pe-2">
            <p class="fw-bolder text-black m-0"><?php echo $data["name"]; ?></p>
            <small class="text-primary">Zobacz więcej <small class="bi bi-arrow-right"></small></small>
            <input type="hidden" name="category_id[]" value="<?php echo $data["category_id"]; ?>">
        </div>
    </button>
</form>

<style>
    .bestCategoryContainer {
        background-size: cover;
    }
</style>