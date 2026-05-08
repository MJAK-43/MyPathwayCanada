<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$pageKey = 'about';
$meta = mpc_page_meta($pageKey, [
    'title' => t('about.title'),
    'description' => t('about.intro'),
]);

require __DIR__ . '/includes/header.php';
?>
<main class="main" id="main-content">
    <section class="page-hero">
        <div class="container container--reading stack-lg" data-reveal>
            <span class="eyebrow">About</span>
            <h1 class="section-title"><?= htmlspecialchars(t('about.title'), ENT_QUOTES, 'UTF-8'); ?></h1>
            <p><?= htmlspecialchars(t('about.intro'), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
