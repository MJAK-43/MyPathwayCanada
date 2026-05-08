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
<nav class="navbar" aria-label="<?= htmlspecialchars(t('nav.primary'), ENT_QUOTES, 'UTF-8'); ?>">
    <div class="container navbar__inner">
        <a class="navbar__brand" href="<?= mpc_url(); ?>" aria-label="<?= htmlspecialchars(MPC_SITE_NAME, ENT_QUOTES, 'UTF-8'); ?>">
            <span class="navbar__brand-mark">MPC</span>
            <span class="navbar__brand-copy">
                <span class="navbar__brand-text"><?= htmlspecialchars(MPC_SITE_NAME, ENT_QUOTES, 'UTF-8'); ?></span>
                <span class="navbar__brand-subtitle"><?= htmlspecialchars(t('brand.tagline'), ENT_QUOTES, 'UTF-8'); ?></span>
            </span>
        </a>

        <button class="navbar__toggle" type="button" aria-expanded="false" aria-controls="navbar-menu" data-nav-toggle>
            <span class="navbar__toggle-line"></span>
            <span class="navbar__toggle-line"></span>
            <span class="navbar__toggle-line"></span>
            <span class="sr-only"><?= htmlspecialchars(t('nav.toggle'), ENT_QUOTES, 'UTF-8'); ?></span>
        </button>

        <div class="navbar__menu" id="navbar-menu" data-nav-menu>
            <ul class="navbar__links">
                <li class="navbar__item">
                    <a class="navbar__link<?= mpc_is_active('start-here') ? ' is-active' : ''; ?>" href="<?= mpc_url('start-here'); ?>">
                        <?= htmlspecialchars(t('nav.start_here'), ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </li>

                <li class="navbar__item navbar__item--mega" data-nav-dropdown>
                    <button
                        class="navbar__link navbar__link--button<?= mpc_is_active('pathways') ? ' is-active' : ''; ?>"
                        type="button"
                        aria-expanded="false"
                        aria-controls="pathways-mega-menu"
                        data-nav-dropdown-toggle
                    >
                        <span><?= htmlspecialchars(t('nav.pathways'), ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="navbar__chevron" aria-hidden="true">⌄</span>
                    </button>

                    <div class="navbar__mega" id="pathways-mega-menu" data-nav-dropdown-panel aria-hidden="true">
                        <div class="navbar__mega-intro">
                            <span class="eyebrow"><?= htmlspecialchars(t('nav.pathways_eyebrow'), ENT_QUOTES, 'UTF-8'); ?></span>
                            <h2 class="heading-lg"><?= htmlspecialchars(t('nav.pathways_title'), ENT_QUOTES, 'UTF-8'); ?></h2>
                            <p class="text-sm"><?= htmlspecialchars(t('nav.pathways_text'), ENT_QUOTES, 'UTF-8'); ?></p>
                            <a class="button button--secondary" href="<?= mpc_url('pathways'); ?>"><?= htmlspecialchars(t('nav.pathways_overview'), ENT_QUOTES, 'UTF-8'); ?></a>
                        </div>
                        <div class="navbar__mega-grid">
                            <?php foreach ($pathwayItems as $item): ?>
                                <a class="navbar__mega-card" href="<?= mpc_url('pathways'); ?>#<?= htmlspecialchars($item['slug'], ENT_QUOTES, 'UTF-8'); ?>">
                                    <span class="navbar__mega-label"><?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    <span class="navbar__mega-arrow" aria-hidden="true">&rarr;</span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>

                <li class="navbar__item">
                    <a class="navbar__link<?= mpc_is_active('blog') ? ' is-active' : ''; ?>" href="<?= mpc_url('blog'); ?>">
                        <?= htmlspecialchars(t('nav.blog'), ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </li>
                <li class="navbar__item">
                    <a class="navbar__link<?= mpc_is_active('resources') ? ' is-active' : ''; ?>" href="<?= mpc_url('resources'); ?>">
                        <?= htmlspecialchars(t('nav.resources'), ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </li>
                <li class="navbar__item">
                    <a class="navbar__link<?= mpc_is_active('about') ? ' is-active' : ''; ?>" href="<?= mpc_url('about'); ?>">
                        <?= htmlspecialchars(t('nav.about'), ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </li>
                <li class="navbar__item">
                    <a class="navbar__link<?= mpc_is_active('contact') ? ' is-active' : ''; ?>" href="<?= mpc_url('contact'); ?>">
                        <?= htmlspecialchars(t('nav.contact'), ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </li>
            </ul>

            <div class="navbar__actions">
                <?php
                $switcherId = 'header-language-switcher';
                $switcherMode = 'header';
                require __DIR__ . '/language-switcher.php';
                ?>
                <a class="button button--primary" href="<?= mpc_url('start-here'); ?>"><?= htmlspecialchars(t('nav.primary_cta'), ENT_QUOTES, 'UTF-8'); ?></a>
            </div>
        </div>
    </div>
</nav>
