<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<header id="headerDesktop" class="container-fluid bg-light shadow-sm">
    <div class="container-xl">
        <div class="row pt-2 pb-2">
            <div class="col-xl-2 col-lg-2 col-md-12 col-12 text-center">
                <a href="http://localhost/system_ogloszeniowy/praca/glowna"><img class="h-100" src="<?php echo IMAGE_URL; ?>logo.webp"></a>
            </div>
            <div class="col-xl-7 col-lg-7 d-xl-block d-lg-block d-none pt-1">
                <button class="border-0 bg-transparent align-middle"><a href="<?php echo ROOT_URL . "praca/szukaj"; ?>" class="text-black text-decoration-none"><i class="bi bi-pin-angle me-1"></i>Oferty pracy</a></button>
                <button class="ms-4 border-0 bg-transparent align-middle"><a href="<?php echo ROOT_URL . "praca/glowna#strefa_firm"; ?>" class="text-black text-decoration-none"><i class="bi bi-buildings me-1"></i>Profile pracodawców</a></button>
                <button class="ms-4 border-0 bg-transparent align-middle"><a href="<?php echo ROOT_URL . "praca/glowna#strefa_kategorii"; ?>" class="text-black text-decoration-none"><i class="bi bi-bookmark-star me-1"></i>Popularne kategorie</a></button>
            </div>
            <div class="col-xl-3 col-lg-3 d-xl-block d-lg-block d-none pt-1">
                <button class="me-4 border-0 bg-transparent align-middle float-end">
                    <a href="<?php echo ROOT_URL . $data["href"]; ?>" class="text-black text-decoration-none"><i class="bi <?php echo $data["icon"]; ?> me-1"></i><?php echo $data["titlePC"]; ?></a></button>
            </div>
        </div>
    </div>
</header>

<style>
    #headerDesktop button:hover {
        text-decoration: underline;
    }
</style>