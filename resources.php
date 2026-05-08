<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$pageKey = 'resources';
$meta = mpc_page_meta($pageKey, [
    'title' => t('resources.title'),
    'description' => t('resources.intro'),
]);

require __DIR__ . '/includes/header.php';
?>
<main class="main" id="main-content">
    <section class="page-hero">
        <div class="container container--reading stack-lg" data-reveal>
            <span class="eyebrow">Resources</span>
            <h1 class="section-title"><?= htmlspecialchars(t('resources.title'), ENT_QUOTES, 'UTF-8'); ?></h1>
            <p><?= htmlspecialchars(t('resources.intro'), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
