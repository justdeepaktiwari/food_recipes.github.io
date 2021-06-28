<?php
session_start();

if (isset($_GET["logout"])) {
    echo "loading.................";
    session_destroy();
    
    header("Location: index.php");

}
else {
    if (isset($_POST["category"]) && isset($_POST["title"])) {

        include 'partial_files/_dbconnect.php';

        $category = $_POST["category"];
        $title = $_POST["title"];
        $method = $_POST["method"];
        $material = $_POST["material"];
        $suggestion = $_POST["suggestion"];

        $recipesimg = $_FILES["file"];

        $imgaddress = $recipesimg["name"];
        $error = $recipesimg["error"];
        $filetmp = $recipesimg["tmp_name"];

        $imgsplit = explode('.',$imgaddress);
        $imgtype = strtolower(end($imgsplit));

        $imgtypestored = array('png', 'jpg', 'jpeg');

        if (in_array($imgtype, $imgtypestored)) {
                    
                    $destinationfile = 'recipes_image/'.$imgaddress;
                    move_uploaded_file($filetmp, $destinationfile);
        }

        // Insert data IN recipe_methods table
        $sqlcat = "INSERT INTO `recipe_categories` (`recipes_titles`, `recipes_description`, `category_name`, `category_image`) VALUES ('$title', '$suggestion', '$category', '$imgaddress')";
        $resultcat = mysqli_query($conn, $sqlcat);

        echo $resultcat;
        $sqlfetch = "select * from `recipe_categories` where `recipes_titles` = '$title'";
        $resultfetch = mysqli_query($conn, $sqlfetch);
        $row = mysqli_fetch_assoc($resultfetch);
        $recipecatid = $row["category_recipe_id"];

        // Insert data IN recipe_categorie table

        // Insert data IN recipe_methods table
        $sql="INSERT INTO `recipe_methods` (`recipe_cat_id`, `material_used`, `method_to_create`, `suggestions`, `image_address`) VALUES ('$recipecatid', '$material','$method','$suggestion','$imgaddress')";
        $result = mysqli_query($conn, $sql);

    }
    header("Location: handleside.php");
}

?>