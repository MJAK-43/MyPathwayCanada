<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$pageKey = 'contact';
$meta = mpc_page_meta($pageKey, [
    'title' => t('contact.title'),
    'description' => t('contact.intro'),
]);

require __DIR__ . '/includes/header.php';
?>
<main class="main" id="main-content">
    <section class="page-hero">
        <div class="container container--reading stack-lg" data-reveal>
            <span class="eyebrow">Contact</span>
            <h1 class="section-title"><?= htmlspecialchars(t('contact.title'), ENT_QUOTES, 'UTF-8'); ?></h1>
            <p><?= htmlspecialchars(t('contact.intro'), ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
    </section>

    <section class="section section--compact">
        <div class="container container--reading">
            <form class="content-panel placeholder-block stack-md" data-placeholder-form>
                <label>
                    <span>Name</span>
                    <input type="text" name="name" placeholder="Placeholder field">
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" placeholder="Placeholder field">
                </label>
                <button class="button button--primary" type="submit">Placeholder submit</button>
                <p class="text-muted" data-form-feedback></p>
            </form>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
