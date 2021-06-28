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

    <!-- Intro photo or video of food recipes -->

    <!--! Intro photo or video of food recipes -->

    <!-- category of recipes -->
    <div class="recipes-category mx-auto">
        <div class="category-1 mt-3">
            <div class="recipes-name">
                <h3 class="mb-0 pb-0 text-primary">sabji recipes</h3>
                <hr class="mt-0 pt-0 text-primary">
            </div>
            <div class="recipes-items row justify-content-evenly">
                <!-- card design -->
                <?php
                
                  $sql =  "SELECT * FROM `recipe_categories` WHERE `category_name` = 'sabji'";
                  $result = mysqli_query($conn,$sql);

                  while ($row = mysqli_fetch_assoc($result)) {

                      $titles = $row["recipes_titles"];
                      $catid = $row["category_recipe_id"];
                      $desc = $row["recipes_description"];
                      $image = $row["category_image"];

                      $desc = substr($desc, 0 , 100);

                      echo '<div class="card mb-3 col-xxl-4 col-lg-6 col-sm-12 col-md-12 col-xs-12 col-xs-12 cat-1" style="width: 18rem;">
                                <img src="recipes_image/'.$image.'" class="card-img-top img-fluid" alt="...">
                                <div class="card-body mb-0">
                                    <h5 class="card-title"><a href="recipes_desc.php?catid='.$catid.'&title='.$titles.'">'.$titles.'</a></h5>
                                    <p class="card-text">'.$desc.'....</p>
                                </div>
                            </div>';
                  }
                
                ?>
                <!-- !card design -->
            </div>
            <button id="btn1" class="btn btn-outline-primary d-block mx-auto">See More</button>

        </div>
        <div class="category-1">
            <div class="recipes-name">
                <h3 class="mb-0 pb-0 text-success">sabji recipes</h3>
                <hr class="mt-0 pt-0 text-success">
            </div>
            <div class="recipes-items row justify-content-evenly">
                <!-- card design -->
                <?php
                
                $sql =  "SELECT * FROM `recipe_categories` WHERE `category_name` = 'sabji'";
                $result = mysqli_query($conn,$sql);

                while ($row = mysqli_fetch_assoc($result)) {

                    $titles = $row["recipes_titles"];
                    $catid = $row["category_recipe_id"];
                      $desc = $row["recipes_description"];
                      $image = $row["category_image"];
                    $desc = substr($desc, 0 , 100);

                    echo '<div class="card mb-3 col-xxl-4 col-lg-6 col-sm-12 col-md-12 col-xs-12 col-xs-12 cat-2" style="width: 18rem;">
                              <img src="recipes_image/'.$image.'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <h5 class="card-title"><a href="">'.$titles.'</a></h5>
                                  <p class="card-text">'.$desc.'....</p>
                              </div>
                          </div>';
                }
              
              ?>
                <!-- !card design -->
            </div>
            <button id="btn2" class="btn btn-outline-primary d-block mx-auto">See More</button>
        </div>
        <div class="category-1">
            <div class="recipes-name">
                <h3 class="mb-0 pb-0 text-danger">sabji recipes</h3>
                <hr class="mt-0 pt-0 text-danger">
            </div>
            <div class="recipes-items row justify-content-evenly">
                <!-- card design -->
                <?php
                
                $sql =  "SELECT * FROM `recipe_categories` WHERE `category_name` = 'sabji'";
                $result = mysqli_query($conn,$sql);

                while ($row = mysqli_fetch_assoc($result)) {

                    $titles = $row["recipes_titles"];
                    $catid = $row["category_recipe_id"];
                    $desc = $row["recipes_description"];
                    $image = $row["category_image"];
                    $desc = substr($desc, 0 , 100);

                    echo '<div class="card mb-3 col-xxl-4 col-lg-6 col-sm-12 col-md-12 col-xs-12 col-xs-12 cat-3" style="width: 18rem;">
                              <img src="recipes_image/'.$image.'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <h5 class="card-title"><a href="">'.$titles.'</a></h5>
                                  <p class="card-text">'.$desc.'....</p>
                              </div>
                          </div>';
                }
              
              ?>
                <!-- !card design -->
            </div>
            <button id="btn3" class="btn btn-outline-primary d-block mx-auto">See More</button>
        </div>

    </div>
    <!--! category of recipes -->

    <!-- Recent Post of recipes -->
    <div class="recent-post-recipes mx-auto mb-3">
        <div class="recipes-name">
            <h3 class="mb-0 pb-0 text-warning">Recent recipes</h3>
            <hr class="mt-0 pt-0 text-warning">
        </div>
        <div class="recent-recipes-items row justify-content-evenly">
            <!-- card design -->
            <?php
                
                $sql =  "SELECT * FROM `recipe_categories` WHERE `category_name` = 'sabji'";
                $result = mysqli_query($conn,$sql);

                while ($row = mysqli_fetch_assoc($result)) {

                    $titles = $row["recipes_titles"];
                    $catid = $row["category_recipe_id"];
                      $desc = $row["recipes_description"];
                      $image = $row["category_image"];
                    $desc = substr($desc, 0 , 100);

                    echo '<div class="card mb-3 col-xxl-4 col-lg-6 col-sm-12 col-md-12 col-xs-12 col-xs-12 cat-4" style="width: 18rem;">
                              <img src="recipes_image/'.$image.'" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <h5 class="card-title">'.$titles.'</h5>
                                  <p class="card-text m-0">'.$desc.'....</p>
                              </div>
                          </div>';
                }
              
              ?>

            <!-- !card design -->
        </div>
        <button id="btn4" class="btn btn-outline-primary d-block mx-auto">See More</button>
    </div>
    <!--! Recent Post of recipes -->

    <!-- modal code -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login Your Account To Upload Recipes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="handleside.php" method="POST">
                        <div class="mb-3">
                            <label for="userid" class="form-label">Enter your registered id</label>
                            <input type="text" class="form-control" id="userid" name="userid"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal code -->
    <?php include 'partial_files/_footer.php'?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script>
    if (window.innerWidth > 1807) {

        const cat1 = document.querySelectorAll(".cat-1");
        const btn1 = document.querySelector("#btn1");

        for (let i = 6; i < cat1.length; i++) {
            cat1[i].style.display = "none";
        }

        btn1.addEventListener('click', () => {

            for (let i = 6; i < cat1.length; i++) {
                cat1[i].style.display = "block";
            }

            btn1.classList.remove("d-block");
            btn1.style.display = "none";
        });

        const cat2 = document.querySelectorAll(".cat-2");
        const btn2 = document.querySelector("#btn2");

        for (let i = 6; i < cat1.length; i++) {
            cat2[i].style.display = "none";
        }

        btn2.addEventListener('click', () => {

            for (let i = 6; i < cat1.length; i++) {
                cat2[i].style.display = "block";
            }

            btn2.classList.remove("d-block");
            btn2.style.display = "none";
        });
        const cat3 = document.querySelectorAll(".cat-3");
        const btn3 = document.querySelector("#btn3");

        for (let i = 6; i < cat1.length; i++) {
            cat3[i].style.display = "none";
        }

        btn3.addEventListener('click', () => {

            for (let i = 6; i < cat1.length; i++) {
                cat3[i].style.display = "block";
            }

            btn3.classList.remove("d-block");
            btn3.style.display = "none";
        });
        const cat4 = document.querySelectorAll(".cat-4");
        const btn4 = document.querySelector("#btn4");

        for (let i = 6; i < cat1.length; i++) {
            cat4[i].style.display = "none";
        }

        btn4.addEventListener('click', () => {

            for (let i = 6; i < cat1.length; i++) {
                cat4[i].style.display = "block";
            }

            btn4.classList.remove("d-block");
            btn4.style.display = "none";
        });
        
    } else if (window.innerWidth < 1807 && window.innerWidth > 1512) {
        const cat1 = document.querySelectorAll(".cat-1");
        const btn1 = document.querySelector("#btn1");

        for (let i = 5; i < cat1.length; i++) {
            cat1[i].style.display = "none";
        }

        btn1.addEventListener('click', () => {

            for (let i = 5; i < cat1.length; i++) {
                cat1[i].style.display = "block";
            }

            btn1.classList.remove("d-block");
            btn1.style.display = "none";
        });

        const cat2 = document.querySelectorAll(".cat-2");
        const btn2 = document.querySelector("#btn2");

        for (let i = 5; i < cat1.length; i++) {
            cat2[i].style.display = "none";
        }

        btn2.addEventListener('click', () => {

            for (let i = 5; i < cat1.length; i++) {
                cat2[i].style.display = "block";
            }

            btn2.classList.remove("d-block");
            btn2.style.display = "none";
        });
        const cat3 = document.querySelectorAll(".cat-3");
        const btn3 = document.querySelector("#btn3");

        for (let i = 5; i < cat1.length; i++) {
            cat3[i].style.display = "none";
        }

        btn3.addEventListener('click', () => {

            for (let i = 5; i < cat1.length; i++) {
                cat3[i].style.display = "block";
            }

            btn3.classList.remove("d-block");
            btn3.style.display = "none";
        });
        const cat4 = document.querySelectorAll(".cat-4");
        const btn4 = document.querySelector("#btn4");

        for (let i = 5; i < cat1.length; i++) {
            cat4[i].style.display = "none";
        }

        btn4.addEventListener('click', () => {

            for (let i = 5; i < cat1.length; i++) {
                cat4[i].style.display = "block";
            }

            btn4.classList.remove("d-block");
            btn4.style.display = "none";
        });
        
    } else if (window.innerWidth < 1512 && window.innerWidth > 1213) {
        const cat1 = document.querySelectorAll(".cat-1");
        const btn1 = document.querySelector("#btn1");

        for (let i = 4; i < cat1.length; i++) {
            cat1[i].style.display = "none";
        }

        btn1.addEventListener('click', () => {

            for (let i = 4; i < cat1.length; i++) {
                cat1[i].style.display = "block";
            }

            btn1.classList.remove("d-block");
            btn1.style.display = "none";
        });

        const cat2 = document.querySelectorAll(".cat-2");
        const btn2 = document.querySelector("#btn2");

        for (let i = 4; i < cat1.length; i++) {
            cat2[i].style.display = "none";
        }

        btn2.addEventListener('click', () => {

            for (let i = 4; i < cat1.length; i++) {
                cat2[i].style.display = "block";
            }

            btn2.classList.remove("d-block");
            btn2.style.display = "none";
        });
        const cat3 = document.querySelectorAll(".cat-3");
        const btn3 = document.querySelector("#btn3");

        for (let i = 4; i < cat1.length; i++) {
            cat3[i].style.display = "none";
        }

        btn3.addEventListener('click', () => {

            for (let i = 4; i < cat1.length; i++) {
                cat3[i].style.display = "block";
            }

            btn3.classList.remove("d-block");
            btn3.style.display = "none";
        });
        const cat4 = document.querySelectorAll(".cat-4");
        const btn4 = document.querySelector("#btn4");

        for (let i = 4; i < cat1.length; i++) {
            cat4[i].style.display = "none";
        }

        btn4.addEventListener('click', () => {

            for (let i = 4; i < cat1.length; i++) {
                cat4[i].style.display = "block";
            }

            btn4.classList.remove("d-block");
            btn4.style.display = "none";
        });
        
    } else if (window.innerWidth < 1213 && window.innerWidth > 914) {
        const cat1 = document.querySelectorAll(".cat-1");
        const btn1 = document.querySelector("#btn1");

        for (let i = 3; i < cat1.length; i++) {
            cat1[i].style.display = "none";
        }

        btn1.addEventListener('click', () => {

            for (let i = 3; i < cat1.length; i++) {
                cat1[i].style.display = "block";
            }

            btn1.classList.remove("d-block");
            btn1.style.display = "none";
        });

        const cat2 = document.querySelectorAll(".cat-2");
        const btn2 = document.querySelector("#btn2");

        for (let i = 3; i < cat1.length; i++) {
            cat2[i].style.display = "none";
        }

        btn2.addEventListener('click', () => {

            for (let i = 3; i < cat1.length; i++) {
                cat2[i].style.display = "block";
            }

            btn2.classList.remove("d-block");
            btn2.style.display = "none";
        });
        const cat3 = document.querySelectorAll(".cat-3");
        const btn3 = document.querySelector("#btn3");

        for (let i = 3; i < cat1.length; i++) {
            cat3[i].style.display = "none";
        }

        btn3.addEventListener('click', () => {

            for (let i = 3; i < cat1.length; i++) {
                cat3[i].style.display = "block";
            }

            btn3.classList.remove("d-block");
            btn3.style.display = "none";
        });
        const cat4 = document.querySelectorAll(".cat-4");
        const btn4 = document.querySelector("#btn4");

        for (let i = 3; i < cat1.length; i++) {
            cat4[i].style.display = "none";
        }

        btn4.addEventListener('click', () => {

            for (let i = 3; i < cat1.length; i++) {
                cat4[i].style.display = "block";
            }

            btn4.classList.remove("d-block");
            btn4.style.display = "none";
        });
        
    } else if (window.innerWidth < 914 && window.innerWidth > 633) {
        const cat1 = document.querySelectorAll(".cat-1");
        const btn1 = document.querySelector("#btn1");

        for (let i = 2; i < cat1.length; i++) {
            cat1[i].style.display = "none";
        }

        btn1.addEventListener('click', () => {

            for (let i = 2; i < cat1.length; i++) {
                cat1[i].style.display = "block";
            }

            btn1.classList.remove("d-block");
            btn1.style.display = "none";
        });

        const cat2 = document.querySelectorAll(".cat-2");
        const btn2 = document.querySelector("#btn2");

        for (let i = 2; i < cat1.length; i++) {
            cat2[i].style.display = "none";
        }

        btn2.addEventListener('click', () => {

            for (let i = 2; i < cat1.length; i++) {
                cat2[i].style.display = "block";
            }

            btn2.classList.remove("d-block");
            btn2.style.display = "none";
        });
        const cat3 = document.querySelectorAll(".cat-3");
        const btn3 = document.querySelector("#btn3");

        for (let i = 2; i < cat1.length; i++) {
            cat3[i].style.display = "none";
        }

        btn3.addEventListener('click', () => {

            for (let i = 2; i < cat1.length; i++) {
                cat3[i].style.display = "block";
            }

            btn3.classList.remove("d-block");
            btn3.style.display = "none";
        });
        const cat4 = document.querySelectorAll(".cat-4");
        const btn4 = document.querySelector("#btn4");

        for (let i = 2; i < cat1.length; i++) {
            cat4[i].style.display = "none";
        }

        btn4.addEventListener('click', () => {

            for (let i = 2; i < cat1.length; i++) {
                cat4[i].style.display = "block";
            }

            btn4.classList.remove("d-block");
            btn4.style.display = "none";
        });
    } else {
        const cat1 = document.querySelectorAll(".cat-1");
        const btn1 = document.querySelector("#btn1");

        for (let i = 2; i < cat1.length; i++) {
            cat1[i].style.display = "none";
        }

        btn1.addEventListener('click', () => {

            for (let i = 2; i < cat1.length; i++) {
                cat1[i].style.display = "block";
            }

            btn1.classList.remove("d-block");
            btn1.style.display = "none";
        });

        const cat2 = document.querySelectorAll(".cat-2");
        const btn2 = document.querySelector("#btn2");

        for (let i = 2; i < cat1.length; i++) {
            cat2[i].style.display = "none";
        }

        btn2.addEventListener('click', () => {

            for (let i = 2; i < cat1.length; i++) {
                cat2[i].style.display = "block";
            }

            btn2.classList.remove("d-block");
            btn2.style.display = "none";
        });
        const cat3 = document.querySelectorAll(".cat-3");
        const btn3 = document.querySelector("#btn3");

        for (let i = 2; i < cat1.length; i++) {
            cat3[i].style.display = "none";
        }

        btn3.addEventListener('click', () => {

            for (let i = 2; i < cat1.length; i++) {
                cat3[i].style.display = "block";
            }

            btn3.classList.remove("d-block");
            btn3.style.display = "none";
        });
        const cat4 = document.querySelectorAll(".cat-4");
        const btn4 = document.querySelector("#btn4");

        for (let i = 2; i < cat1.length; i++) {
            cat4[i].style.display = "none";
        }

        btn4.addEventListener('click', () => {

            for (let i = 2; i < cat1.length; i++) {
                cat4[i].style.display = "block";
            }

            btn4.classList.remove("d-block");
            btn4.style.display = "none";
        });
        
    }
    </script>
</body>

</html>