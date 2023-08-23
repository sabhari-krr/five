<?php
session_start();
// include "includes/config.php"; //comfiguration files
include "includes/head.php";



// $sql = SELECT * FROM content WHERE id > 0 ORDER BY id;
// $results = mysqli_query($conn, $sql);

// if ($results === false) {
//     echo mysqli_error($conn); //shows the error
// }
// else {
//     $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
// }

?>
<main class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row vh-100">
                    <!-- Content for the first row -->
                </div>
                <div class="row vh-100">
                    <!-- Content for the second row -->
                </div>
            </div>

            <div class="col-4 col-lg-3 bg-secondary sticky-top d-none d-sm-block" style="top: 60px;height:90vh">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col text-center p-3">
                            <div class="rounded-circle overflow-hidden mx-auto shadow-lg" style=" display: flex; justify-content: center; align-items: center;">
                                <img class="img-fluid" src="https://via.placeholder.com/200" alt="Circular Image" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h2 class="mt-3">NAME</h2>
                            <p>BIO</p>
                            <a name="" id="" class="btn btn-primary btn-outline-light border-0" href="#">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "includes/foot.php" ?>