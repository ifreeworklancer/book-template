<?php

require_once('store.php');
require_once('functions.php');
require_once('views/base/header-secondary.php');

?>

    <!-- Page thanks -->
    <section id="thanks">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-sm-8 text-center">
                    <h1 class="section-title mb-3">
                        Дякуємо
                    </h1>
                    <div class="section-subtitle mb-4">
                        Наш менеджер з вами зв'яжеться
                    </div>
                    <a href="/" class="btn btn-primary">
                        На головну
                    </a>
                </div>
            </div>
        </div>
        <figure class="decor-bg" style="background-image: url(<?= $project['image_bg']; ?>);"></figure>
    </section>
<?php
require_once('views/base/footer-secondary.php');