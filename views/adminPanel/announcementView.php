<div>
    <label class="fw-bolder h4">Dodaj ogloszenie:</label>
    <form method="post" action="<?php echo ROOT_URL . "konto/addAnnouncement"; ?>" enctype="multipart/form-data">
        Firma: 
        <select name="company_id">
            <?php
                foreach($data["company"] as &$company)
                {
                    echo "<option value=".$company["company_id"].">".$company["company_id"]." - ".$company["short_name"]."</option>";
                }
            ?>
        </select><br>
        Lokalizacja: <input type="text" name="localization_link"><br>
        Podkategoria: 
        <select name="subcategory_id" class="w-auto">
            <?php
                foreach($data["category"] as &$category)
                {
                    echo "<option value=".$category["subcategory_id"].">".$category["subcategory_id"]." - ".$category["name"]."</option>";
                }
            ?>
        </select><br>
        Nazwa pozycji: <input type="text" name="position_name"><br>
        Miasto: <input type="text" name="city"><br>
        Zarobki: <input type="text" name="earnings"><br>
        Poziom pozycji: 
        <select name="position_level_id" class="w-auto">
            <?php
                foreach($data["positionLevel"] as &$positionLevel)
                {
                    echo "<option value=".$positionLevel["id"].">".$positionLevel["id"]." - ".$positionLevel["name"]."</option>";
                }
            ?>
        </select><br>
        Typ  umowy: 
        <select name="contract_type_id" class="w-auto">
            <?php
                foreach($data["concractType"] as &$concractType)
                {
                    echo "<option value=".$concractType["id"].">".$concractType["id"]." - ".$concractType["name"]."</option>";
                }
            ?>
        </select><br>
        Czas pracy: 
        <select name="working_time_id" class="w-auto">
            <?php
                foreach($data["workingTime"] as &$workingTime)
                {
                    echo "<option value=".$workingTime["id"].">".$workingTime["id"]." - ".$workingTime["name"]."</option>";
                }
            ?>
        </select><br>
        Typ pracy: 
        <select name="work_type_id" class="w-auto">
            <?php
                foreach($data["workType"] as &$workType)
                {
                    echo "<option value=".$workType["id"].">".$workType["id"]." - ".$workType["name"]."</option>";
                }
            ?>
        </select><br>
        Data zakonczenia: <input type="date" name="end_date"><br>
        Kolor strony: 
        <select name="theme_color" class="w-auto">
            <option value="primary">niebieski</option>
            <option value="success">zielony</option>
            <option value="danger">czerwony</option>
            <option value="warning">zolty</option>
            <option value="dark">ciemny</option>
        </select><br>
        <button type="submit" class="btn btn-dark">Zapisz</button>
    </form>
</div>