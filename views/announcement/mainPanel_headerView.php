<div class="bg-white rounded-top-4">
    <div class="d-xl-flex d-block p-sm-4 p-2">
        <div class="d-sm-flex d-block">
            <div class="col-2">
                <img src="<?php echo IMAGE_URL . $data["company_logo"]; ?>" class="imgSize">
            </div>
            <div class="col-xl-9 col-lg-6 col-sm-10 col-12 ms-lg-4 ms-md-0 ms-sm-3 ms-0">
                <p class="h4 fw-bolder text-<?php echo $data["theme"]; ?>-emphasis mt-sm-0 mt-2"><?php echo $data["position_name"]; ?></p>
                <label class="h6"><?php echo $data["company_name"]; ?></label>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-5 col-12 mt-xl-0 mt-3 rounded-4 bg-<?php echo $data["theme"]; ?> bg-opacity-25">
            <div class="d-flex align-items-center justify-content-start p-4 text-<?php echo $data["theme"]; ?>">
                <i class="bi bi-cash-coin h2 pt-2"></i>
                <div class="d-block ms-4">
                    <p class="h5 m-0"><?php echo $data["earnings"]; ?> zł</p>
                    <label class="">net (+ VAT) / mth.</label>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>

<style>
    .imgSize {
        width: 80px;
        height: 80px;
    }
</style>