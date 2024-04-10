<div class="d-flex align-items-center">
    <a href="<?php echo ROOT_URL . "konto/removeLink/" . $data["link_id"]; ?>" class="bi bi-x-lg h4 text-primary-emphasis"></a>
    <div class="d-inline-block ms-3">
        <label class="mt-1 fw-bolder text-primary-emphasis"><?php echo $data["name"]; ?>:</label>
        <p><a href="<?php echo $data["url"]; ?>" class="text-secondary text-break"><?php echo $data["url"]; ?></a></p>
    </div>
</div>