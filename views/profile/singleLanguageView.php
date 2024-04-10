<div class="d-flex mt-3">
    <a href="<?php echo ROOT_URL . "konto/removeLanguage/" . $data["language_id"]; ?>" class="bi bi-x-lg h5 text-primary-emphasis"></a>
    <div class="d-inline-block ms-3">
        <label class="fw-bolder text-primary-emphasis"><?php echo $data["language"]; ?></label>
        <label class="ms-2 me-2">▪️</label>
        <label class="text-secondary"><?php echo $data["level"]; ?></label>
    </div>
</div>