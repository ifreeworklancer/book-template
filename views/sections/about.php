<!-- About -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-around mb-5">
            <div class="col-sm-9 col-lg-5 mb-4 mb-lg-0 reveal-left">
                <div class="section-subtitle">
                    <?= $about['subtitle']; ?>
                </div>
                <h2 class="section-title">
                    <?= $about['title']; ?>
                </h2>
            </div>
            <div class="col-sm-9 col-lg-5 reveal-right">
                <div class="section-description">
                    <?= $about['description']; ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <?php foreach ($about['items'] as $item) : ?>
                <div class="col-sm-7 col-lg-3">
                    <div class="about-item reveal-bottom-interval">
                        <div class="about-item-prev">
                            <img src="<?= $item['image']; ?>" alt="about image">
                        </div>
                        <div class="about-item-description">
                            <?= $item['description']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="decor-image">
        <img src="../../images/content/intro/info-3.png" alt="decor image">
    </div>
</section>