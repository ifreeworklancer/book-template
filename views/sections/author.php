<!-- Author -->
<section id="author">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-sm-9 col-md-7 col-lg-6">
                <div class="author-image reveal-left">
                    <figure class="decor-image"
                            style="background-image: url('../../images/content/author/author-decor.svg');"></figure>
                    <img src="<?= $author['image']; ?>" alt="author image">
                </div>
            </div>
            <div class="col-sm-9 col-md-7 col-lg-5">
                <div class="author-item reveal-right">
                    <div class="section-subtitle">
                        <?= $author['subtitle']; ?>
                    </div>
                    <h2 class="section-title mb-3">
                        <?= $author['title']; ?>
                    </h2>
                    <div class="author-item-description">
                        <?= $author['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>