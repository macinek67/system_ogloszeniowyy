<div class="bg-white p-2 pt-4 ps-sm-4 pe-sm-4 rounded-4 pb-4">
    <label class="h4 fw-bolder text-<?php echo $data["theme"]; ?>-emphasis">Benefity</label>
    <div class="d-flex flex-wrap col-12">
        <?php
            foreach($data["list"] as $data)
            {
                echo $data;
            }
        ?>
    </div>
</div>

<style>
    .benefitContainer {
        height: 175px;
    }
</style>