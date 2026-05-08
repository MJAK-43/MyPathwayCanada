<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
$pageKey = $pageKey ?? 'home';
$meta = $meta ?? mpc_page_meta($pageKey);
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars(mpc_lang(), ENT_QUOTES, 'UTF-8'); ?>">
<head>
    <?php require __DIR__ . '/seo.php'; ?>
</head>
<body
    class="page page--<?= htmlspecialchars($pageKey, ENT_QUOTES, 'UTF-8'); ?>"
    data-base-url="<?= htmlspecialchars(mpc_base_url(), ENT_QUOTES, 'UTF-8'); ?>"
>
    <a class="skip-link" href="#main-content"><?= htmlspecialchars(t('ui.skip_to_content'), ENT_QUOTES, 'UTF-8'); ?></a>
    <div class="site-shell">
        <header class="site-header" data-site-header>
            <?php require __DIR__ . '/navbar.php'; ?>
        </header>
