<?php
session_start();
include './tpl/header.php';
$page_title = "HOME";
?>


<main class="container">
    <section id="main-content-top">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h1 class="text-primary display-3">
                    welcome to my site <?= LOGO ?>
                </h1>
                <p>
                    in this site u will find blog about sport and more
                </p>
                <p class="mt-4">
                    <a href="./sign_up.php" class="btn btn-outline-success btn-lg"> Join </a>
                </p>
            </div>
        </div>
    </section>

    <section id="main-content" class="container mt-5">

        <div class="row mt-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">
                            HighLight
                        </strong>
                        <h3 class="mb-0">Highlight card</h3>
                        <div class="mb-1 text-muted">
                            nov-12
                        </div>
                        <p class="card-text mb-auto">
                            all the think u know about sport is here
                        </p>
                        <a href="#" class="stretched-link">
                            Continue reading <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="https://cdn.pixabay.com/photo/2016/02/13/13/11/oldtimer-1197800_960_720.jpg" alt="highlighted car" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">
                            pricless
                        </strong>
                        <h3 class="mb-0">
                            The most Priceless Cars
                        </h3>
                        <div class="mb-1 text-muted">
                            Nov 12
                        </div>
                        <p class="card-text mb-auto">
                            The most priceless cars on the market
                        </p>
                        <a href="#" class="stretched-link">
                            Continue reading <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2019/07/07/14/03/fiat-500-4322521_960_720.jpg" alt="priceless car">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include './tpl/footer.php'; ?>