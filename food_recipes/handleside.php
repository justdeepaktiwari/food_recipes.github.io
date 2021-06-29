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
    <?php
        session_start();

        if (isset($_POST["userid"]) && isset($_POST["password"])  && !isset($_SESSION["userid"])) {
            
            $userid = $_POST["userid"];
            
            $password = $_POST["password"];
            $sql= "SELECT * FROM `user_handle` WHERE `user_id` = '$userid' and `password`='$password'";
            $result = mysqli_query($conn, $sql);
            $numRows = mysqli_num_rows($result);
            
            if ($num = mysqli_fetch_assoc($result)) {

                $_SESSION["userid"] = $num["user_id"];
                $_SESSION["pass"] = $num["password"];
    
                $_SESSION["loggedin"] = $numRows;
            }
            
            
        }
        //echo $_SESSION["loggedin"];
        
        if (isset($_SESSION["userid"])) {
           
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == 1) {
                echo '<div class="handler-container mt-3">
                        <div class="container">
                            <h3 class="text-center">Owner Handle Side Page</h3>
                            <form action="handledata.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Recipe categories</label>
                                    <textarea class="form-control" id="category" name="category" rows="1"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Recipe Title</label>
                                    <textarea class="form-control" id="title" name="title" rows="1"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="material" class="form-label">Materials in used</label>
                                    <textarea class="form-control" id="material" name="material" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="method" class="form-label">Method to create</label>
                                    <textarea class="form-control" id="method" name="method" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="method" class="form-label">Suggestion</label>
                                    <textarea class="form-control" id="suggestion" name="suggestion" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="file" class="form-label">Recipe Image</label>
                                    <input class="form-control" id="file" name="file" type="file"></input>
                                </div>
                                <div class="mb-3">
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                                <a class="btn btn-danger mb-3" href="handledata.php?logout=1">LogOut</a>
                                </div>
                            </form>
                        </div>
                    </div>';
            }
            else {
                header("Location: index.php?loggin=0");
            }

            // handle posted recipes

        }
        else {
            header("Location: index.php");
        }
        
    ?>

    <?php include 'partial_files/_footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        location.reload();
    </script>
</body>

</html>
