<?php

declare(strict_types=1);

$pathwayItems = [
    ['slug' => 'study-permit', 'label' => t('pathway.study_permit')],
    ['slug' => 'pgwp', 'label' => t('pathway.pgwp')],
    ['slug' => 'permanent-residence', 'label' => t('pathway.permanent_residence')],
    ['slug' => 'express-entry', 'label' => t('pathway.express_entry')],
    ['slug' => 'bc-pnp', 'label' => t('pathway.bc_pnp')],
];
?>
        <footer class="site-footer">
            <div class="container stack-xl">
                <section class="site-footer__top">
                    <div class="site-footer__top-visual" aria-hidden="true"></div>
                    <div class="site-footer__top-content stack-sm">
                        <h2 class="site-footer__top-title"><?= htmlspecialchars(t('footer.newsletter_title'), ENT_QUOTES, 'UTF-8'); ?></h2>
                        <p class="site-footer__top-text"><?= htmlspecialchars(t('footer.newsletter_text'), ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                    <div class="site-footer__top-actions cluster-sm">
                        <a class="button button--primary" href="<?= mpc_url('start-here'); ?>"><?= htmlspecialchars(t('footer.newsletter_cta'), ENT_QUOTES, 'UTF-8'); ?></a>
                        <a class="button button--secondary button--light" href="<?= mpc_url('blog'); ?>"><?= htmlspecialchars(t('footer.contact_cta'), ENT_QUOTES, 'UTF-8'); ?></a>
                    </div>
                </section>

                <div class="site-footer__grid">
                    <div class="site-footer__brand stack-md">
                        <div class="site-footer__brand-lockup">
                            <span class="site-footer__brand-mark">MPC</span>
                            <span class="site-footer__brand-name"><?= htmlspecialchars(MPC_SITE_NAME, ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                        <p class="site-footer__text"><?= htmlspecialchars(t('footer.statement'), ENT_QUOTES, 'UTF-8'); ?></p>
                        <div class="site-footer__socials cluster-sm">
                            <a class="site-footer__social" href="#" aria-label="Instagram">IG</a>
                            <a class="site-footer__social" href="#" aria-label="YouTube">YT</a>
                            <a class="site-footer__social" href="#" aria-label="LinkedIn">IN</a>
                            <a class="site-footer__social" href="#" aria-label="Email">@</a>
                        </div>
                    </div>

                    <div class="site-footer__column">
                        <h2 class="site-footer__title"><?= htmlspecialchars(t('footer.navigation'), ENT_QUOTES, 'UTF-8'); ?></h2>
                        <ul class="site-footer__list">
                            <li><a href="<?= mpc_url('start-here'); ?>"><?= htmlspecialchars(t('nav.start_here'), ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <li><a href="<?= mpc_url('blog'); ?>"><?= htmlspecialchars(t('nav.blog'), ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <li><a href="<?= mpc_url('resources'); ?>"><?= htmlspecialchars(t('nav.resources'), ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <li><a href="<?= mpc_url('about'); ?>"><?= htmlspecialchars(t('nav.about'), ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <li><a href="<?= mpc_url('contact'); ?>"><?= htmlspecialchars(t('nav.contact'), ENT_QUOTES, 'UTF-8'); ?></a></li>
                        </ul>
                    </div>

                    <div class="site-footer__column">
                        <h2 class="site-footer__title"><?= htmlspecialchars(t('footer.pathways'), ENT_QUOTES, 'UTF-8'); ?></h2>
                        <ul class="site-footer__list">
                            <?php foreach ($pathwayItems as $item): ?>
                                <li><a href="<?= mpc_url('pathways'); ?>#<?= htmlspecialchars($item['slug'], ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="site-footer__column">
                        <h2 class="site-footer__title"><?= htmlspecialchars(t('footer.resources'), ENT_QUOTES, 'UTF-8'); ?></h2>
                        <ul class="site-footer__list">
                            <li><a href="<?= mpc_url('blog'); ?>"><?= htmlspecialchars(t('nav.blog'), ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <li><a href="<?= mpc_url('resources'); ?>"><?= htmlspecialchars(t('nav.resources'), ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <li><a href="<?= mpc_url('faq'); ?>"><?= htmlspecialchars(t('footer.faqs'), ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <li><a href="<?= mpc_url('blog'); ?>"><?= htmlspecialchars(t('footer.news'), ENT_QUOTES, 'UTF-8'); ?></a></li>
                        </ul>
                    </div>

                    <div class="site-footer__column stack-md">
                        <div>
                            <h2 class="site-footer__title"><?= htmlspecialchars(t('footer.stay_updated'), ENT_QUOTES, 'UTF-8'); ?></h2>
                            <p class="site-footer__text text-sm"><?= htmlspecialchars(t('footer.language_note'), ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                        <form class="site-footer__subscribe" data-placeholder-form>
                            <input class="site-footer__subscribe-input" type="email" name="email" placeholder="<?= htmlspecialchars(t('footer.email_placeholder'), ENT_QUOTES, 'UTF-8'); ?>" aria-label="<?= htmlspecialchars(t('footer.email_placeholder'), ENT_QUOTES, 'UTF-8'); ?>">
                            <button class="site-footer__subscribe-button" type="submit" aria-label="<?= htmlspecialchars(t('footer.subscribe'), ENT_QUOTES, 'UTF-8'); ?>">&rarr;</button>
                        </form>
                    </div>
                </div>

                <div class="site-footer__bottom">
                    <p class="site-footer__copyright"><?= htmlspecialchars(t('footer.copyright'), ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="site-footer__legal cluster-sm">
                        <a href="#"><?= htmlspecialchars(t('footer.legal_privacy'), ENT_QUOTES, 'UTF-8'); ?></a>
                        <a href="#"><?= htmlspecialchars(t('footer.legal_terms'), ENT_QUOTES, 'UTF-8'); ?></a>
                        <a href="#"><?= htmlspecialchars(t('footer.legal_cookies'), ENT_QUOTES, 'UTF-8'); ?></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?= htmlspecialchars(mpc_asset('js/main.js'), ENT_QUOTES, 'UTF-8'); ?>" defer></script>
    <script src="<?= htmlspecialchars(mpc_asset('js/navigation.js'), ENT_QUOTES, 'UTF-8'); ?>" defer></script>
    <script src="<?= htmlspecialchars(mpc_asset('js/language-switcher.js'), ENT_QUOTES, 'UTF-8'); ?>" defer></script>
    <script src="<?= htmlspecialchars(mpc_asset('js/forms.js'), ENT_QUOTES, 'UTF-8'); ?>" defer></script>
    <script src="<?= htmlspecialchars(mpc_asset('js/animations.js'), ENT_QUOTES, 'UTF-8'); ?>" defer></script>
</body>
</html>
