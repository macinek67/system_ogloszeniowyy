<div class="offerContainer mb-3">
    <button type="button" class="offerButton border rounded-4 bg-white shadow-sm w-100 text-start p-0">
        <a href="<?php echo ROOT_URL . "praca/oferta/" . $data["announcement_id"]; ?>">
            <div class="p-2 pt-0">
                <div class="offerHeader">
                    <p class="fw-bolder text-primary-emphasis m-0"><?php echo $data["position_name"]; ?></p>
                    <small class="fw-bold text-secondary"><?php echo $data["earnings"]; ?> zł net (+ VAT) / mth.</small>
                </div>
                <div class="d-flex">
                    <img class="offerImg" src="<?php echo IMAGE_URL . $data["company_logo"]; ?>">
                    <div class="ms-3">
                        <small class="m-0 h6 text-primary-emphasis"><?php echo $data["company_shortName"]; ?></small><br>
                        <small class="text-secondary"><?php echo $data["city"]; ?></small>
                    </div>
                </div>
            </div>
            <hr class="mb-1 mt-0">
            <div class="d-flex align-items-center mt-2">
                <small class="col ps-3 text-secondary"><i class="h6 bi bi-lightning"></i> Aplikuj szybko</small>
                <div class="float-end col pe-3">
                    <small class="text-secondary float-end">Opublikowano: <?php echo $data["start_date"]; ?></small>
                </div>
            </div>
        </a>
    </button>
</div>

<style>
    .offerContainer {
        min-width: 324px;
    }

    .offerButton {
        height: 205px;
    }

    .offerImg {
        width: 65px;
        height: 65px;
    }

    .offerHeader {
        height: 75px;
    }

    .offerContainer a {
        text-decoration: none;
        color: black;
    }
</style>