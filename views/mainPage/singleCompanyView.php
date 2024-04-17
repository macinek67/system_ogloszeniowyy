<form method="post" action="<?php echo ROOT_URL . "praca/szukaj"; ?>" class="companyContainer bg-light border shadow-sm rounded-5 me-3">
    <button class="p-3 pt-4 w-100 h-100 border-0 bg-transparent rounded-5">
        <div class="d-flex justify-content-center">
            <img class="companyImg" src="<?php echo IMAGE_URL . $data["logo"]; ?>">
        </div>
        <div class="companyName mt-4 mb-2 text-center d-flex align-items-end justify-content-center">
            <p class="fw-bolder text-primary-emphasis m-0"><?php echo $data["short_name"]; ?></p>
        </div>
        <small class="text-primary">Zobacz oferty <small class="bi bi-arrow-right"></small></small>
        <input type="hidden" name="company_id[]" value="<?php echo $data["company_id"]; ?>">
    </button>
</form>


<style>
    .companyContainer, .bestCategoryContainer {
        height: 250px;
        min-width: 264px;
    }

    .companyImg {
        width: 96px;
        height: 96px;
    }

    .companyName {
        height: 50px;
    }

    @media screen and (max-width: 336px) {
        .companyContainer {
            min-width: 224px;
        }
    }
</style>