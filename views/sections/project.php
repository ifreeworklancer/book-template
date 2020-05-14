<!-- Project -->
<section id="project">
    <div class="container">
        <div class="row justify-content-around align-items-center mb-5">
            <div class="col-sm-8 col-lg-5 mb-4">
                <div class="project-item reveal-left">
                    <div class="section-subtitle">
                        <?= $project['project']['subtitle']; ?>
                    </div>
                    <h2 class="section-title mb-4">
                        <?= $project['project']['title']; ?>
                    </h2>
                    <div class="project-item__description">
                        <?= $project['project']['first_description']; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-lg-5">
                <div class="project-item reveal-right">
                    <div class="project-item-image">
                        <?php foreach ($project['project']['logo'] as $item) : ?>
                            <div class="project-item-image-col">
                                <img src="<?= $item; ?>" alt="project logo">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="project-item__description">
                        <?= $project['project']['second_description']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-6 text-center reveal-bottom">
                <div class="book-decor-title">
                    <?= $project['book']['decor_title']; ?>
                </div>
                <div class="book-image">
                    <img src="<?= $project['book']['image']; ?>" alt="project image">
                </div>
                <div class="book-item">
                    <div class="book-item__name">
                        <?= $intro['description']['name']; ?>
                    </div>
                    <div class="book-item-reviews justify-content-center">
                        <div class="book-item-reviews__stars">
                            <svg width="20" height="20">
                                <use xlink:href="#star-icon"></use>
                            </svg>
                            <svg width="20" height="20">
                                <use xlink:href="#star-icon"></use>
                            </svg>
                            <svg width="20" height="20">
                                <use xlink:href="#star-icon"></use>
                            </svg>
                            <svg width="20" height="20">
                                <use xlink:href="#star-icon"></use>
                            </svg>
                            <svg width="20" height="20">
                                <use xlink:href="#star-icon"></use>
                            </svg>
                        </div>
                        <div class="book-item-reviews__count">
                            <?= $intro['description']['count_reviews']; ?>
                        </div>
                    </div>
                    <div class="book-item__text">
                        <p>
                            <?= $intro['description']['text']; ?>
                        </p>
                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
                        <div class="product-price mr-sm-5 mb-4 mb-sm-0">
                            <?= $price; ?>
                        </div>
                        <a href="#" class="btn btn-outline-primary open-order">
                            Замовити
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <figure style="background-image: url(<?= $project['image_bg']; ?>);" class="decor-bg"></figure>
</section>