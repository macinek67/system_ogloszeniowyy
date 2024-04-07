<?php
    foreach($data["categories"] as $category)
    {
        echo "<li><input type='checkbox' name='category_id[]' value='$category[category_id]' class='form-check-input me-2'><label class='fw-bolder text-primary-emphasis'>$category[name]</label><li>";
        foreach($data["subcategories"] as $subcategory)
        {
            if($subcategory["category_id"] == $category["category_id"])
                echo "<li class='ps-4 d-flex'><input type='checkbox' name='subcategory_id[]' value='$subcategory[subcategory_id]' class='form-check-input me-2'><label class='text-secondary w-100 pe-2'>$subcategory[name]</label></li>";
        }
    }
?>