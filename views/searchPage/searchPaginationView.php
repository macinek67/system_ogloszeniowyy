<!-- <div class="mt-4 mb-3 d-sm-flex d-none justify-content-center mx-auto">
    <?php
        if($data["currentPage"] != 1)
        {
            echo '<button class="btn btn-outline-alt rounded-circle me-3 p-1 text-center ms-3"><i class="bi bi-arrow-left"></i></button>';
        }
        else
        {
            echo '<button class="btn btn-outline-alt rounded-circle me-3 p-1 text-center ms-3" disabled><i class="bi bi-arrow-left"></i></button>';
            echo '<button class="btn btn-outline-alt rounded-circle me-3 text-start p-1 text-center currentSiteButton">1</button>';
        }
    ?>
    <button class="btn btn-outline-alt rounded-circle me-3 text-start p-1 text-center currentSiteButton">1</button>
    <button class="btn btn-outline-alt rounded-circle me-3 text-start p-1 text-center">2</button>
    <button class="btn btn-outline-alt rounded-circle me-3 text-start p-1 text-center">3</button>
    <label class="ms-1 me-4 m-auto">...</label>
    <button class="btn btn-outline-alt rounded-circle me-3 text-start p-1 text-center">934</button>
    <button class="btn btn-outline-alt rounded-circle me-3 p-1 text-center"><i class="bi bi-arrow-right"></i></button>
</div>

<div class="mt-4 mb-3 d-sm-none d-flex justify-content-center mx-auto">
    <button class="btn btn-outline-alt rounded-circle me-3 p-1 text-center ms-3" disabled><i class="bi bi-arrow-left"></i></button>
    <button class="btn btn-outline-alt rounded-circle me-3 p-1 text-center"><i class="bi bi-arrow-right"></i></button>
</div> -->

<style>
    .btn-outline-alt {
        border-color: #0049a8;
        border-width: 2px;
        min-width: 40px;
        height: 40px;
        color: #0049a8;
    }

    .currentSiteButton {
        background-color: #0049a8;
        color: white;
    } 

    .btn-outline-alt:hover {
        background-color: #719bd1;
        color: white;
    }

    .centerArrow {
        margin-left: -1px;
    }
</style>