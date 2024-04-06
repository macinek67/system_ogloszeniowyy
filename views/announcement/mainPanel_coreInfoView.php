<div class="bg-white p-2 ps-sm-4 rounded-bottom-4 pb-4">

    <div class="col-12 d-sm-flex d-block">

        <div class="d-flex col-sm-6 col-12">
            <div class="d-flex align-items-center justify-content-center">
                <div class="bg-<?php echo $data["theme"]; ?> bg-opacity-25 rounded-2 d-flex align-items-center justify-content-center pt-2 iconContainer">
                    <i class="bi bi-geo-alt h4 text-<?php echo $data["theme"]; ?>"></i>
                </div>
                <div class="ms-3">
                    <p class="m-0 fw-bold text-secondary">Lokalizacja firmy</p>
                    <p class="m-0 text-secondary"><?php echo $data["city"]; ?></p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 col-12 d-flex ps-sm-3 ps-0 mt-sm-0 mt-3">
            <div class="d-flex align-items-center justify-content-center">
                <div class="bg-<?php echo $data["theme"]; ?> bg-opacity-25 rounded-2 d-flex align-items-center justify-content-center pt-2 iconContainer">
                    <i class="bi bi-laptop h4 text-<?php echo $data["theme"]; ?>"></i>
                </div>
                <div class="ms-3">
                    <p class="m-0 fw-bold text-secondary">Miejsce pracy</p>
                    <p class="m-0 text-secondary">Polska (<?php echo $data["workType"]; ?>)</p>
                </div>
            </div>
        </div>
        
    </div>

    <div class="col-12 d-sm-flex d-block mt-3">

        <div class="d-flex col-sm-6 col-12">
            <div class="d-flex align-items-center justify-content-center">
                <div class="bg-<?php echo $data["theme"]; ?> bg-opacity-25 rounded-2 d-flex align-items-center justify-content-center pt-2 iconContainer">
                    <i class="bi bi-clock h4 text-<?php echo $data["theme"]; ?>"></i>
                </div>
                <div class="ms-3">
                    <p class="m-0 text-dark">aktywne jeszcze <?php echo $data["daysToEnd"]; ?> dni</p>
                    <p class="m-0 text-secondary">do: <?php echo $data["endDate"]; ?></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-12 d-flex ps-sm-3 ps-0 mt-sm-0 mt-3">
            <div class="d-flex align-items-center justify-content-center">
                <div class="bg-<?php echo $data["theme"]; ?> bg-opacity-25 rounded-2 d-flex align-items-center justify-content-center pt-2 iconContainer">
                    <i class="bi bi-circle-half h4 text-<?php echo $data["theme"]; ?>"></i>
                </div>
                <div class="ms-3">
                    <p class="m-0 text-dark"><?php echo $data["workingTime"]; ?></p>
                </div>
            </div>
        </div>

    </div>

    <div class="col-12 d-sm-flex d-block mt-3">

        <div class="d-flex col-sm-6 col-12">
            <div class="d-flex align-items-center justify-content-center">
                <div class="bg-<?php echo $data["theme"]; ?> bg-opacity-25 rounded-2 d-flex align-items-center justify-content-center pt-2 iconContainer">
                    <i class="bi bi-file-earmark-fill h4 text-<?php echo $data["theme"]; ?>"></i>
                </div>
                <div class="ms-3">
                    <p class="m-0 text-dark"><?php echo $data["contractType"]; ?></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-12 d-flex ps-sm-3 ps-0 mt-sm-0 mt-3">
            <div class="d-flex align-items-center justify-content-center">
                <div class="bg-<?php echo $data["theme"]; ?> bg-opacity-25 rounded-2 d-flex align-items-center justify-content-center pt-2 iconContainer">
                    <i class="bi bi-bar-chart h4 text-<?php echo $data["theme"]; ?>"></i>
                </div>
                <div class="ms-3">
                    <p class="m-0 text-dark"><?php echo $data["positionLevel"]; ?></p>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .iconContainer {
        min-width: 50px;
        min-height: 50px;
    }
</style>