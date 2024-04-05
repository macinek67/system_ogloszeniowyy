<div class="offerContainer p-2">
    <button type="submit" class="offerButton border rounded-4 bg-white shadow-sm w-100 text-start p-0">
        <a href="<?php echo ROOT_URL . "praca/oferta/" . $data["announcement_id"]; ?>" class="text-decoration-none">
            <div class="p-2 pt-0">
                <div class="offerHeader">
                    <p class="fw-bolder text-primary-emphasis m-0"><?php echo $data["position_name"]; ?></p>
                    <small class="fw-bold text-secondary"><?php echo $data["earnings"]; ?> zł net (+ VAT) / mth.</small>
                </div>
                <div class="mt-3 d-flex">
                    <img class="offerImg" src="<?php echo IMAGE_URL . $data["company_logo"]; ?>">
                    <div class="ms-3">
                        <small class="m-0 h6 text-primary-emphasis"><?php echo $data["company_shortName"]; ?></small><br>
                        <small class="text-secondary"><?php echo $data["city"]; ?></small>
                    </div>
                </div>
            </div>
            <hr class="mb-1 mt-0 text-black">
            <small class="ms-3 fw-bold text-secondary"><i class="h6 bi bi-lightning align-middle"></i> Aplikuj szybko</small>
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

    @media screen and (max-width: 336px) {
        .offerContainer {
            margin-left: 43px;
        }
    }
</style>