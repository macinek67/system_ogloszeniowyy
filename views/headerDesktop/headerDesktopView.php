<header id="headerDesktop" class="container-fluid bg-light shadow">
    <div class="container-xl">
        <div class="row pt-2 pb-2">
            <div class="col-xl-2 col-lg-2 col-md-12 col-12 text-center">
                <a href="http://localhost/system_ogloszeniowy/praca/glowna"><img class="h-100" src="http://localhost/system_ogloszeniowy/application_images/logo.webp"></a>
            </div>
            <div class="col-xl-6 col-lg-6 d-xl-block d-lg-block d-none pt-1">
                <button class="border-0 bg-transparent align-middle" onfocus="rozwin()" onfocusout="zwin()">Oferty pracy<i class="align-middle ms-1 bi bi-caret-down-fill"></i></button>
                <button class="ms-1 border-0 bg-transparent align-middle">Profile pracodawców</button>
                <button class="ms-1 border-0 bg-transparent align-middle" onfocus="rozwin()" onfocusout="zwin()">Moja kariera<i class="align-middle ms-1 bi bi-caret-down-fill"></i></button>
            </div>
            <div class="col-xl-4 col-lg-4 d-xl-block d-lg-block d-none pt-1">
                <button class="border-0 bg-transparent align-middle" onfocus="rozwin()" onfocusout="zwin()">Moje konto<i class="align-middle ms-1 bi bi-caret-down-fill"></i></button>
                <a href="#" class="h6 align-middle text-primary-emphasis ms-5">Dodaj ogłoszenie</a>
            </div>
        </div>
    </div>
</header>
<style>
    #headerDesktop button:hover {
        text-decoration: underline;
        color: #113e4d;
    }
</style>
<script>
    function rozwin()
    {
        event.target.children[0].className = "align-middle ms-1 bi bi-caret-up-fill";
    }

    function zwin()
    {
        event.target.children[0].className = "align-middle ms-1 bi bi-caret-down-fill";
    }
</script>