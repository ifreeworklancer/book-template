<!-- Intro -->
<section id="intro">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-sm-6 col-lg-5 h-100 d-flex align-items-center">
                <div class="intro-item reveal-left">
                    <h1 class="section-title">
                        <?= $intro['title']; ?>
                    </h1>
                    <div class="book-item">
                        <div class="book-item__name">
                            <?= $intro['description']['name']; ?>
                        </div>
                        <div class="book-item-reviews">
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
                        <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start align-items-center">
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
            <div class="col-sm-9 col-lg-7 h-100 d-flex align-items-end">
                <div id="intro-images" class="intro-images reveal-right">
                    <div class="intro-images-item" data-depth="-0.15" data-friction-x="0.15" data-friction-y="0.15" data-origin-x="1" data-origin-y="1" data-limit-y="10">
                        <img src="../../images/content/intro/info-1.png" alt="intro image">
                    </div>
                    <div class="intro-images-item" data-depth="0" data-friction-x="0" data-friction-y="0" data-origin-x="1" data-origin-y="1">
                        <img src="../../images/content/intro/info-2.png" alt="intro image">
                    </div>
                    <div class="intro-images-item" data-depth="0.15" data-friction-x="0.15" data-friction-y="0.15" data-origin-x="1" data-origin-y="1" data-limit-y="10">
                        <img src="../../images/content/intro/info-3.png" alt="intro image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>