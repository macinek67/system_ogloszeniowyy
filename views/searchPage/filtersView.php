<form id="searchPageMainForm" class="rounded-2" action="<?php echo ROOT_URL . "praca/szukaj"; ?>" method="post">
    <div class="col-md-11 col-12 bg-white shadow-sm rounded-2">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <label class="h5 fw-bolder text-primary-emphasis mb-0">Poziom stanowiska</label>
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <div class="form-check">
                            <?php
                                foreach($data["position_levels_list"] as $positionLevel)
                                {
                                    if(in_array($positionLevel["id"], $data["checked-position_levels"]))
                                    {
                                        echo "<input class='form-check-input' checked type='checkbox' name='position_level_id[]' value=".$positionLevel["id"]." >";
                                    }
                                    else
                                    {
                                        echo "<input class='form-check-input' type='checkbox' name='position_level_id[]' value=".$positionLevel["id"]." >";
                                    }
                                    echo "<label class='form-check-label text-primary-emphasis mb-1'>".$positionLevel["name"]."</label><br>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <label class="h5 fw-bolder text-primary-emphasis mb-0">Rodzaj umowy</label>
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <div class="form-check">
                            <?php
                                foreach($data["contract_types_list"] as $contractType)
                                {
                                    if(in_array($contractType["id"], $data["checked-contract_type"]))
                                    {
                                        echo "<input class='form-check-input' checked type='checkbox' name='contract_type_id[]' value=".$contractType["id"]." >";
                                    }
                                    else
                                    {
                                        echo "<input class='form-check-input' type='checkbox' name='contract_type_id[]' value=".$contractType["id"]." >";
                                    }
                                    echo "<label class='form-check-label text-primary-emphasis mb-1'>".$contractType["name"]."</label><br>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <label class="h5 fw-bolder text-primary-emphasis mb-0">Wymiar pracy</label>
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <div class="form-check">
                            <?php
                                foreach($data["working_times_list"] as $workingTime)
                                {
                                    if(in_array($workingTime["id"], $data["checked-working_time"]))
                                    {
                                        echo "<input class='form-check-input' checked type='checkbox' name='working_time_id[]' value=".$workingTime["id"]." >";
                                    }
                                    else
                                    {
                                        echo "<input class='form-check-input' type='checkbox' name='working_time_id[]' value=".$workingTime["id"]." >";
                                    }
                                    echo "<label class='form-check-label text-primary-emphasis mb-1'>".$workingTime["name"]."</label><br>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFourth">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFourth" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <label class="h5 fw-bolder text-primary-emphasis mb-0">Tryb pracy</label>
                </button>
                </h2>
                <div id="panelsStayOpen-collapseFourth" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFourth">
                    <div class="accordion-body">
                        <div class="form-check">
                            <?php
                                foreach($data["work_types_list"] as $workingTime)
                                {
                                    if(in_array($workingTime["id"], $data["checked-work_type"]))
                                    {
                                        echo "<input class='form-check-input' checked type='checkbox' name='work_type_id[]' value=".$workingTime["id"]." >";
                                    }
                                    else
                                    {
                                        echo "<input class='form-check-input' type='checkbox' name='work_type_id[]' value=".$workingTime["id"]." >";
                                    }
                                    echo "<label class='form-check-label text-primary-emphasis mb-1'>".$workingTime["name"]."</label><br>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" id="changePageFormControl" name="page" value="<?php echo $data["page"]; ?>">
            <input type="hidden" name="position_name" value="<?php echo $data["position_name"]; ?>">
            <input type="hidden" name="city" value="<?php echo $data["city"]; ?>">

            <?php
                foreach($data["categories"] as $catgory_id)
                {
                    echo "<input type='hidden' name='category_id[]' value='$catgory_id'>";
                }

                foreach($data["subcategories"] as $subcatgory_id)
                {
                    echo "<input type='hidden' name='subcategory_id[]' value='$subcatgory_id'>";
                }

                foreach($data["company"] as $company_id)
                {
                    echo "<input type='hidden' name='company_id[]' value='$company_id'>";
                }
            ?>

            <div class="pt-3 pb-3 ps-4 pe-4 border border-top-0 rounded-bottom-2">
                <button class="btn-alt border-0 rounded-5 p-3 w-100"><label class="h5 fw-bolder mb-0"><i class="bi bi-search me-1"></i> Pokaż oferty</label></button>
            </div>
        </div>
    </div>
</form>

<style>
    .btn-alt {
        color: white;
        background-color: #0049a8;
    }

    .btn-alt:hover,
    .btn-alt:active,
    .btn-alt:focus,
    .btn-alt.active {
        background: #025fd9;
        color: #ffffff;
    }
</style>