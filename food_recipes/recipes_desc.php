<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- font awesome cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom styling -->
    <?php include 'style.php'?>

    <title>swadist aur asan recipes!</title>
</head>

<body>
    <?php include 'partial_files/_dbconnect.php'?>
    <!-- Navabar code -->
    <?php include 'partial_files/_header.php'?>
    <!--! Navabar code -->

    <div class="recipes-desc-container">

        <div class="container mt-3 mb-3">

            

            <?php
                
                if (isset($_GET["catid"]) && isset($_GET["title"])) {

                    $id = $_GET["catid"];
                    $title = $_GET["title"];

                    $sql =  "SELECT * FROM `recipe_methods` WHERE `recipe_cat_id` = '$id'";
                    $result = mysqli_query($conn,$sql);
    
                    while ($row = mysqli_fetch_assoc($result)) {
    
                        $material = $row["material_used"];
                        $material = str_replace("[","<li>",$material);
                        $material = str_replace("]","</li>",$material);

                        $method = $row["method_to_create"];
                        $method = str_replace("[","<li>",$method);
                        $method = str_replace("]","</li>",$method);

                        $suggestions = $row["suggestions"];

                        $recipeimg = $row["image_address"];
    
                        echo '<div class="recipe-title">
                                    <h3>'.$title.'</h3>
                                    <hr class="mt-0">
                                    <img src="recipes_image/'.$recipeimg.'" alt="">
                                </div>
                                <div class="material-used mt-2">
                                    <h4>Materials</h4>
                                    <ul>
                                     '.$material.'
                                    </ul>
                                </div>
                                <div class="method mt-2">
                                    <h4>Method</h4>
                                    <ol type="1">
                                        '.$method.'
                                    </ol>
                                </div>
                                <div class="suggestions mt-2">
                                    <h4>Suggestions</h4>
                                    <p>'.$suggestions.'</p>
                                </div>
                                <div class="famous-recipes mt-2">
                                    <h4>Famous recipes which is follow by most people</h4>
                                    jkyhkljli opujljuklj iuhjkh kiihikh n ihihh ijhklhiju kjhklj khjk
                                </div>';
                    }
                }

              
              ?>

        </div>

    </div>

    <?php include 'partial_files/_footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>