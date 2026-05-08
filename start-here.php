<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$pageKey = 'start-here';
$meta = mpc_page_meta($pageKey, [
    'title' => t('start_here.title'),
    'description' => t('start_here.intro'),
]);

require __DIR__ . '/includes/header.php';
?>
<main class="main" id="main-content">
    <section class="page-hero">
        <div class="container container--reading stack-lg" data-reveal>
            <span class="eyebrow">Start Here</span>
            <h1 class="section-title"><?= htmlspecialchars(t('start_here.title'), ENT_QUOTES, 'UTF-8'); ?></h1>
            <p><?= htmlspecialchars(t('start_here.intro'), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
