<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$pageKey = 'blog';
$articles = mpc_blog_articles();
$meta = mpc_page_meta($pageKey, [
    'title' => t('blog.title'),
    'description' => t('blog.intro'),
]);

require __DIR__ . '/includes/header.php';
?>
<main class="main" id="main-content">
    <section class="page-hero">
        <div class="container container--reading stack-lg" data-reveal>
            <span class="eyebrow">Blog</span>
            <h1 class="section-title"><?= htmlspecialchars(t('blog.title'), ENT_QUOTES, 'UTF-8'); ?></h1>
            <p><?= htmlspecialchars(t('blog.intro'), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
    </section>

    <section class="section section--compact">
        <div class="container page-grid">
            <?php foreach ($articles as $article): ?>
                <article class="card" data-reveal>
                    <span class="chip"><?= htmlspecialchars($article['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <h2 class="card__title"><?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p class="card__text"><?= htmlspecialchars($article['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="card__meta">
                        <span class="chip"><?= htmlspecialchars($article['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <a class="button button--secondary" href="<?= mpc_url('blog/' . $article['slug']); ?>"><?= htmlspecialchars(t('blog.read_more'), ENT_QUOTES, 'UTF-8'); ?></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
