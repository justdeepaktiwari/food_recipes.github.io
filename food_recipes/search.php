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

    <div class="search-container">
        <div class="container mt-3">
        <div class="serched-item">
        <h2>Search Result For <span class="text-danger">"<?php echo $_GET["search"]?>"</span></h2>
        </div>
        <div class="serched-result">
            <?php
            
            $serch = $_GET["search"];

            $sql= "SELECT * FROM recipe_categories WHERE MATCH (recipes_titles, recipes_description) against ('$serch')";
            $result = mysqli_query($conn, $sql);
            $numRows = mysqli_num_rows($result);
            if ($numRows>0) {
                
                            while($row = mysqli_fetch_assoc($result)){
                
                                $title = $row["recipes_titles"];
                                $desc = $row["recipes_description"];
                                $catid = $row["category_recipe_id"];
                
                                echo '<h4 class="m-0"><a href="recipes_desc.php?catid='.$catid.'&title='.$title.'">'.$title.'</a></h4>
                                        <p class="mb-2">'.$desc.'</p>';
                            }

            }
            else {
                echo '<div class="serch-not-match mt-3">
                        <h4>Your search - <span class="text-warning">'.$serch.'</span> - did not match any documents.</h4>
                        <h5>Suggestions:</h5>
                        <ul>
                            <li>Make sure that all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords.</li>
                            <li>Try fewer keywords.</li>
                        </ul>
                        </div>';
            }

            
            ?>
        </div>
        </div>
    </div>

    <?php include 'partial_files/_footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
