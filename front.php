<?php
session_start();
include "includes/config.php"; //comfiguration files
include "includes/head.php";


$sql = "SELECT *
        FROM content
        ORDER BY postedat;";

$results = mysqli_query($db, $sql);

if ($results === false) {
    echo mysqli_error($db);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>
<main class="">
    <div class="container-fluid">
        <div class="row">

            <div class="waste d-block d-sm-none" style="height: 54px;">adsasdasd</div>
            <div class="col justify-content-center">
                <!-- feed -->
                <div class="row bg-light justify-content-center">
                    <!-- Content for the first row -->


                    <div class="col-auto justify-content-center g-5">
                        <?php foreach ($articles as $article) : ?>
                            <div class="col-12 mb-1 p-2">
                                <div class="card col shadow ">
                                    <div class="col fs-5 pt-2 ps-3 fw-bold pb-2 bg-gradient bg-warning rounded-top">
                                        <a href="article.php?id=<?= $article['id']; ?>" class="text-light text-decoration-none">
                                            <?= htmlspecialchars($article['username']); ?>
                                        </a>
                                    </div>
                                    <div class="col p-2 pb-2 fs-6">
                                        <?= htmlspecialchars($article['caption']); ?>
                                    </div>
                                    <div class="col">
                                        <div class="justify-content-center">
                                            <img class="img-fluid rounded-bottom" src="<?= htmlspecialchars($article['img']); ?>" alt="" width="600" height="300" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-4 col-lg-3 bg-light sticky-top d-none d-lg-block shadow " style="top: 58px; height: 95vh">
                <div class="container mt-5 ">
                    <div class="row justify-content-center">
                        <div class="col text-center p-5">
                            <div class="rounded-circle overflow-hidden mx-auto shadow-lg" style="
                    display: flex;
                    justify-content: center;
                      align-items: center;
                    ">
                                <img class="img-fluid" src="https://via.placeholder.com/200" alt="Circular Image" style="width: 100%; height: 100%; object-fit: cover" />
                            </div>
                            <h2 class="mt-3">NAME</h2>
                            <p>BIO</p>
                            <a name="" id="" class="btn btn-primary btn-outline-light border-0" href="#">Profile</a>
                            <a name="" id="" class="btn btn-primary btn-outline-light border-0 rounded-circle" href="#">
                                <i class="bi bi-plus"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "includes/foot.php" ?>
