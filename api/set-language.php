<?php

declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';

$lang = $_POST['lang'] ?? $_GET['lang'] ?? MPC_DEFAULT_LANG;

if (!in_array($lang, MPC_SUPPORTED_LANGS, true)) {
    $lang = MPC_DEFAULT_LANG;
}

$_SESSION['lang'] = $lang;

$redirect = $_SERVER['HTTP_REFERER'] ?? mpc_url();

if (
    isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower((string) $_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'
) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'success' => true,
        'lang' => $lang,
        'redirect' => $redirect,
    ]);
    exit;
}

header('Location: ' . $redirect);
exit;
