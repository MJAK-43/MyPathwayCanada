<?php

declare(strict_types=1);

$meta = $meta ?? mpc_page_meta($pageKey ?? 'home');
$pageTitle = $meta['title'] . ' | ' . MPC_SITE_NAME;
$pageDescription = $meta['description'];
$canonical = $meta['canonical'] ?? mpc_url(trim(mpc_current_path(), '/'));
?>
<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="robots" content="index,follow">
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:site_name" content="<?= htmlspecialchars(MPC_SITE_NAME, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="theme-color" content="#d52b1e">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= htmlspecialchars(mpc_asset('css/style.css'), ENT_QUOTES, 'UTF-8'); ?>">
