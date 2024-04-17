<header id="headerMobile" class="container-fluid bg-light fixed-bottom d-xl-none d-lg-none">
    <div class="row text-center pt-1">
        <a href="<?php echo ROOT_URL . "praca/glowna"; ?>" class="col text-dark text-decoration-none">
            <i class="bi bi-house h2"></i>
            <p class="pt-1">Start</p>
        </a>
        <a href="<?php echo ROOT_URL . "praca/szukaj"; ?>" class="col text-dark text-decoration-none">
            <i class="bi bi-search h2"></i>
            <p class="pt-1">Szukaj</p>
        </a>
        <a href="<?php echo ROOT_URL . "praca/glowna#strefa_firm"; ?>" class="col text-dark text-decoration-none">
            <i class="bi bi-building h2"></i>
            <p class="pt-1">Firmy</p>
        </a>
        <a href="<?php echo ROOT_URL . $data["href"]; ?>" class="col text-dark text-decoration-none">
            <i class="bi <?php echo $data["icon"]; ?> h2"></i>
            <p class="pt-1"><?php echo $data["titlePhone"]; ?></p>
        </a>
    </div>
</header>
<style>
    #headerMobile {
        height: 70px;
        box-shadow: 1px -6px 5px -5px rgba(0,0,0,0.37);
        -webkit-box-shadow: 1px -6px 5px -5px rgba(0,0,0,0.37);
        -moz-box-shadow: 1px -6px 5px -5px rgba(0,0,0,0.37);
    }
</style>