<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$pageKey = 'faq';
$meta = mpc_page_meta($pageKey, [
    'title' => t('faq.title'),
    'description' => t('faq.intro'),
]);

require __DIR__ . '/includes/header.php';
?>
<main class="main" id="main-content">
    <section class="page-hero">
        <div class="container container--reading stack-lg" data-reveal>
            <span class="eyebrow">FAQ</span>
            <h1 class="section-title"><?= htmlspecialchars(t('faq.title'), ENT_QUOTES, 'UTF-8'); ?></h1>
            <p><?= htmlspecialchars(t('faq.intro'), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
