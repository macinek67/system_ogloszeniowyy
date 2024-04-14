<div class="d-flex align-items-center mb-3">
    <a href="<?php echo ROOT_URL . "konto/removeOccupationExperience/" . $data["experience_id"]; ?>" class="bi bi-x-lg h4 text-primary-emphasis mt-2"></a>
    <div class="d-inline-block ms-3">
        <label class="fw-bolder text-primary-emphasis"><?php echo $data["company"]; ?></label>
        <p class="text-secondary mb-0"><?php echo $data["position"]; ?></p>
        <p class="text-secondary mb-0"><?php echo $data["city"]; ?></p>
        <p class="text-secondary mb-0"><?php echo $data["duties"]; ?></p>
        <label class="text-secondary"><?php echo $data["period_start"]; ?></label>
        <label class="ms-2 me-2 text-secondary">-</label>
        <label class="text-secondary"><?php echo $data["period_end"]; ?></label>
    </div>
</div>