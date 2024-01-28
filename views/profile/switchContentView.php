<form class="bg-transparent shadow-sm" method="post" action="">
    <div class="bg-light bg-gradient ps-3 pe-3 pt-2 d-sm-flex pb-2">
        <div class="col-sm col-12 bg-dark-subtle text-center pb-1 tabView me-2 rounded-5 shadow-sm">
            <a href="<?php echo ROOT_URL . "konto/profil"; ?>" class="h4 text-primary-emphasis fw-bolder">Profil kandydata</a>
        </div>
        <div class="col-sm col-12 text-center tabView pb-1 me-2 rounded-5 shadow-sm mt-sm-0 mt-1">
            <a href="<?php echo ROOT_URL . "konto/zapisane"; ?>" class="h4 text-primary-emphasis fw-bolder">Zapisane ogłoszenia</a>
        </div>
        <div class="col-sm col-12 text-center tabView pb-1 rounded-5 shadow-sm mt-sm-0 mt-1">
            <a href="<?php echo ROOT_URL . "konto/zaaplikowane"; ?>" class="h4 text-primary-emphasis fw-bolder">Zaaplikowane</a>
        </div>
    </div>
</form>

<style>
    .tabView {
        background-color: white;
    }
</style>