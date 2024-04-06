<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pracuj.pl • Praca junior commercial specialist, Polsat Media Spółka z ograniczoną odpowiedzialnością</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
    <style>
        body {
            background-color: #f2f2f2;
        }

        .bodyThemeContainer {
            height: 250px;
        }
    </style>
</head>
<body>

    <!--Headers-->
    <?php
        echo $data["headerDesktop"];
        echo $data["headerMobile"];
    ?>
    <div class="bodyThemeContainer w-100 position-absolute fixed bg-<?php echo $data["theme"]; ?> bg-opacity-50 z-n1"></div>

    <!--Content-->
    <div class="container-lg mt-5 mb-4 column-gap-4 d-lg-flex">
        <div class="col-lg-8 col-12">
            <?php
                echo $data["mainPanel"];
            ?>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
            <?php
                echo $data["sidePanel"];
            ?>
        </div>
    </div>
    
    <!--Footer-->
    <?php    
        echo $data["footer"];
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>