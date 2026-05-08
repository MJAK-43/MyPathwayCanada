<?php

declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('BASE_URL', '/inovixora/MyPathwayCanada');

const MPC_SITE_NAME = 'MyPathwayCanada';
const MPC_DEFAULT_LANG = 'en';
const MPC_SUPPORTED_LANGS = ['en', 'fr'];

function mpc_base_url(): string
{
    return rtrim(BASE_URL, '/');
}

function mpc_current_path(): string
{
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    $path = parse_url($uri, PHP_URL_PATH);
    $baseUrl = mpc_base_url();

    if ($path === null || $path === false || $path === '') {
        return '/';
    }

    if ($baseUrl !== '' && str_starts_with($path, $baseUrl)) {
        $path = substr($path, strlen($baseUrl));
    }

    $path = $path === '' ? '/' : $path;

    return str_starts_with($path, '/') ? $path : '/' . $path;
}

function mpc_detect_language(): string
{
    if (isset($_GET['lang']) && in_array($_GET['lang'], MPC_SUPPORTED_LANGS, true)) {
        $_SESSION['lang'] = $_GET['lang'];
    }

    if (isset($_SESSION['lang']) && in_array($_SESSION['lang'], MPC_SUPPORTED_LANGS, true)) {
        return $_SESSION['lang'];
    }

    return MPC_DEFAULT_LANG;
}

function mpc_lang(): string
{
    static $lang;

    if ($lang === null) {
        $lang = mpc_detect_language();
    }

    return $lang;
}

function mpc_translations(): array
{
    static $translations = [];

    $lang = mpc_lang();

    if (!isset($translations[$lang])) {
        $file = __DIR__ . '/../lang/' . $lang . '.php';
        $translations[$lang] = file_exists($file) ? require $file : [];
    }

    return $translations[$lang];
}

function t(string $key, ?string $fallback = null): string
{
    $translations = mpc_translations();

    if (array_key_exists($key, $translations)) {
        return (string) $translations[$key];
    }

    return $fallback ?? $key;
}

function mpc_url(string $path = ''): string
{
    $path = ltrim($path, '/');
    $baseUrl = mpc_base_url();

    if ($path === '') {
        return $baseUrl . '/';
    }

    return $baseUrl . '/' . $path;
}

function mpc_asset(string $path): string
{
    return mpc_url('assets/' . ltrim($path, '/'));
}

function mpc_is_active(string $path): bool
{
    $currentPath = trim(mpc_current_path(), '/');
    $expected = trim($path, '/');

    if ($expected === '' && $currentPath === '') {
        return true;
    }

    return $currentPath === $expected;
}

function mpc_page_meta(string $pageKey, array $overrides = []): array
{
    $defaults = [
        'home' => [
            'title' => 'Premium immigration guidance for international students in Canada',
            'description' => 'A premium editorial platform helping international students understand the path from study permit to PGWP to permanent residence in Canada.',
        ],
        'about' => [
            'title' => 'About the founder and the immigration journey',
            'description' => 'Learn the story behind MyPathwayCanada and the mission to make the immigration journey clearer and more practical.',
        ],
        'pathways' => [
            'title' => 'Explore the main immigration pathways',
            'description' => 'Understand the key immigration stages from study permit to work permit and permanent residence.',
        ],
        'blog' => [
            'title' => 'Immigration guides, stories, and practical articles',
            'description' => 'Editorial immigration content designed to help international students navigate Canada with clarity.',
        ],
        'article' => [
            'title' => 'Immigration article',
            'description' => 'Read an immigration guide on MyPathwayCanada.',
        ],
        'faq' => [
            'title' => 'Frequently asked questions',
            'description' => 'Answers to common questions about the MyPathwayCanada platform and the immigration journey.',
        ],
        'contact' => [
            'title' => 'Contact',
            'description' => 'Get in touch with MyPathwayCanada.',
        ],
        'start-here' => [
            'title' => 'Start here',
            'description' => 'A beginner-friendly starting point for understanding the Canadian immigration journey.',
        ],
        'resources' => [
            'title' => 'Resources and checklists',
            'description' => 'Curated resources, tools, and practical checklists for the immigration journey.',
        ],
    ];

    $meta = $defaults[$pageKey] ?? [
        'title' => MPC_SITE_NAME,
        'description' => 'MyPathwayCanada',
    ];

    return array_merge($meta, $overrides);
}

function mpc_blog_articles(): array
{
    $file = __DIR__ . '/../blog-data/articles.php';

    return file_exists($file) ? require $file : [];
}

function mpc_find_article(?string $slug): ?array
{
    foreach (mpc_blog_articles() as $article) {
        if (($article['slug'] ?? '') === $slug) {
            return $article;
        }
    }

    return null;
}
