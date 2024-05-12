<div class="bg-hite shadow-sm border rounded-3">
    <div class="p-3">
        <p class="text-primary-emphasis fw-bolder h4 mb-0">Panel administratora</p>
    </div>
    <hr class="text-secondary m-0">
    <div>
        <?php echo $data["navigation"]; ?>
    </div>
    <hr class="text-secondary m-0">
    <div class="p-3 mt-2">
        <?php
            echo $data["content"];
        ?>
    </div>
</div>