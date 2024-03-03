<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pracuj.pl • Oferty pracy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <style>
        body {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <!--Headers-->
    <?php
        echo $data["headerDesktop"];
        echo $data["headerMobile"];
    ?>

    <!--Content-->
    <div class="container-lg mt-4 mb-4 d-md-flex">

        <div class="col-md-4 col-12">
            <?php
                echo $data["filters"];
            ?>
        </div>

        <div class="col-md-8 col-12">
            <?php
                echo $data["sortPanel"];
            ?>

            <div class="mt-4 overflow-auto">
                <?php
                    foreach($data["searchedOffersList"] as $searchedAnnouncement)
                    {
                        echo $searchedAnnouncement;
                    }
                    echo $data["searchPagination"];
                ?>
            </div>
        </div>
    </div>
    
    <!--Footer-->
    <?php    
        echo $data["footer"];
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>