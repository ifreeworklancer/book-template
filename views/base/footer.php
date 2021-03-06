</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-9 col-xl-8">
                <div class="footer-contacts">
                    <div class="footer-contacts-item">
                        <span>
                            Подзвонити нам:
                        </span>
                        <a href="tel:<?= phone_link($phone1); ?>"><?= $phone1; ?>,</a>
                        <a href="tel:<?= phone_link($phone2); ?>"><?= $phone2; ?></a>
                    </div>
                    <div class="footer-contacts-item">
                        <span>
                            Написати нам:
                        </span>
                        <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
                    </div>
                </div>
                <nav class="site-nav">
                    <ul class="site-nav-list">
                        <li>
                            <a href="#about" class="anchor-link">
                                про книгу
                            </a>
                        </li>
                        <li>
                            <a href="#author" class="anchor-link">
                                автор
                            </a>
                        </li>
                        <li>
                            <a href="#reviews" class="anchor-link">
                                рецензії
                            </a>
                        </li>
                        <li>
                            <a href="#book" class="anchor-link">
                                #bestread
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="footer-copyright">
                    &copy; <?= date('Y'); ?> Всі права захищені
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>