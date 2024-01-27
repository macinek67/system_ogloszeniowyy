<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pracuj.pl • Profil kandydata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <style>
        body {
            background-color: #f2f2f2;
        }

        form textarea {
            resize: none;
        }

        .userSectionEditHidden {
            display: none!important;
        }

        .userSectionEditVisible {
            display: block;
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
    <div class="container-lg mt-4 mb-4">

        <div>
            <?php
                echo $data["switchView"];
            ?>
        </div>

        <div class="mt-4">
            <?php
                echo $data["personalData"];
                echo $data["contactData"];
            ?>
        </div>

        <div class="mt-4">
            <?php
                echo $data["occupationSummary"];
            ?>
        </div>

        <div class="mt-4">
            <?php
                echo $data["occupationExperience"];
            ?>
        </div>

        <div class="mt-4">
            <?php
                echo $data["educationView"];
            ?>
        </div>

        <div class="mt-4">
            <?php
                echo $data["coursesView"];
            ?>
        </div>

        <div class="mt-4">
            <?php
                echo $data["skillsView"];
            ?>
        </div>

        <div class="mt-4">
            <?php
                echo $data["leanguagesLevelView"];
            ?>
        </div>

        <div class="mt-4">
            <?php
                echo $data["linksView"];
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

<script>
    function ShowUserSection()
    {
        (event.target.parentElement.parentElement.parentElement.children[2]).classList.replace("userSectionEditHidden", "userSectionEditVisible");
        (event.target.parentElement.parentElement.parentElement.children[1]).classList.replace("userSectionEditVisible", "userSectionEditHidden");
    }

    function HideUserSection()
    {
        (event.target.parentElement.parentElement.parentElement.children[2]).classList.replace("userSectionEditVisible", "userSectionEditHidden");
        (event.target.parentElement.parentElement.parentElement.children[1]).classList.replace("userSectionEditHidden", "userSectionEditVisible");
    }
</script>