<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$article = mpc_find_article($_GET['slug'] ?? null);
$pageKey = 'article';
$meta = mpc_page_meta($pageKey, [
    'title' => $article['title'] ?? t('article.fallback_title'),
    'description' => $article['excerpt'] ?? t('article.fallback_text'),
]);

require __DIR__ . '/includes/header.php';
?>
<main class="main" id="main-content">
    <section class="page-hero">
        <div class="container container--reading content-panel placeholder-block stack-lg" data-reveal>
            <span class="eyebrow">Article</span>
            <h1 class="section-title"><?= htmlspecialchars($article['title'] ?? t('article.fallback_title'), ENT_QUOTES, 'UTF-8'); ?></h1>
            <p><?= htmlspecialchars($article['excerpt'] ?? t('article.fallback_text'), ENT_QUOTES, 'UTF-8'); ?></p>
            <?php if ($article): ?>
                <div class="placeholder-block__meta">
                    <span class="chip"><?= htmlspecialchars($article['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="chip"><?= htmlspecialchars($article['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
