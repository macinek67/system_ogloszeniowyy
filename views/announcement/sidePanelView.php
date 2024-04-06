<div class="bg-white rounded-4 shadow-sm border">
    <form class="col-lg-9 col-11 m-auto pt-4 pb-4" method="post" action="<?php echo ROOT_URL . "praca/applyToAnnouncement/" . $data["announcement_id"]; ?>">
        <button type="submit" class="btn btn-<?php echo $data["theme"]; ?> w-100 pt-3 pb-3 fw-bold rounded-5"><i class="bi bi-lightning h5 me-2 align-middle"></i><label class="align-middle">Aplikuj szybko</label></button>
    </form>
    <div class="d-flex">
        <div class="col-5 text-dark text-center pt-2 pb-3 rounded-bottom-4">
            <a href="<?php echo ROOT_URL . "praca/saveAnnouncement/" . $data["announcement_id"]; ?>" class="fw-bold text-secondary"><i class="bi bi-star h5 me-2 align-middle"></i><label class="align-middle">Zapisz</label></a>
        </div>
        <diV class="col-2"></diV>
        <diV class="col-5 text-dark text-center pt-2 pb-3 rounded-bottom-4">
            <a href="#" class="fw-bold text-secondary"><i class="bi bi-share-fill h5 me-2 align-middle"></i><label class="align-middle">Podziel się</label></a>
        </diV>
    </div>
</div>