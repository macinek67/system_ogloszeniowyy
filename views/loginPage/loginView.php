<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pracuj.pl • Logowanie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <style>
        body {
            background-color: #f2f2f2;
        }

        .btn-alt {
            color: white;
            background-color: #0049a8;
        }

        .btn-alt:hover,
        .btn-alt:active,
        .btn-alt:focus,
        .btn-alt.active {
            background: #025fd9;
            color: #ffffff;
        }

        .btn-outline-alt {
            border-color: #0049a8;
            border-width: 2px;
            color: #0049a8;
        }

        .btn-outline-alt:hover {
            border-color: #0049a8;
            border-width: 2px;
            background-color: rgba(0, 73, 168, 0.25);
            color: #0049a8;
        }

        .diffLoginMethods {
            height: 50px;
        }
    </style>
</head>
<body>

    <!--Headers-->
    <?php
        echo $data["headerDesktop"];
    ?>

    <!--Content-->
    <div class="container-lg mt-sm-5 mt-2 mb-4 ps-sm-3 ps-0 pe-sm-3 pe-0">
        <div class="col-lg-6 col-12 bg-white shadow-sm border m-auto rounded-5">
            <?php
                echo $data["content"];
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>