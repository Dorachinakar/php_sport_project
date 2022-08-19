<?php
session_start();
$page_title = 'ABOUT';
include_once './tpl/header.php';
?>



<main class="container flex-fill">
    <section id="main-content-top">
        <div class="col-12 mt-5 text-center">
            <h1 class="display-3 text-primary">about <?= LOGO; ?></h1>
            <p class="text-center red">
                this is the about page
            </p>
        </div>
    </section>
    <!-- <section id="main-content" class="continer mt-5">
            <div class="row mb-2">
            </div>
        </section>  -->
</main>


<?php include_once './tpl/footer.php'; ?>