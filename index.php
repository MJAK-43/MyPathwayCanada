<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$pageKey = 'home';
$isFrench = mpc_lang() === 'fr';
$articles = array_slice(mpc_blog_articles(), 0, 4);

function mpc_home_icon(string $icon): string
{
    $icons = [
        'cap' => '<svg viewBox="0 0 64 64" aria-hidden="true"><path d="M8 24 32 13l24 11-24 11z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><path d="M18 30v10c0 4 7 8 14 8s14-4 14-8V30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><path d="M52 28v12" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="3"/></svg>',
        'briefcase' => '<svg viewBox="0 0 64 64" aria-hidden="true"><rect x="10" y="21" width="44" height="26" rx="6" fill="none" stroke="currentColor" stroke-width="3"/><path d="M24 21v-4c0-3 2-5 5-5h6c3 0 5 2 5 5v4" fill="none" stroke="currentColor" stroke-width="3"/><path d="M10 31h44" fill="none" stroke="currentColor" stroke-width="3"/></svg>',
        'maple' => '<svg viewBox="0 0 64 64" aria-hidden="true"><path d="m32 8 4 10 10-4-4 10 10 2-8 6 6 8-10-2v12h-8V38l-10 2 6-8-8-6 10-2-4-10 10 4z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="3"/></svg>',
        'passport' => '<svg viewBox="0 0 64 64" aria-hidden="true"><rect x="16" y="10" width="32" height="44" rx="6" fill="none" stroke="currentColor" stroke-width="3"/><circle cx="32" cy="32" r="9" fill="none" stroke="currentColor" stroke-width="3"/><path d="M24 32h16M32 23c3 3 4 6 4 9s-1 6-4 9c-3-3-4-6-4-9s1-6 4-9Z" fill="none" stroke="currentColor" stroke-width="3"/></svg>',
        'pathway' => '<svg viewBox="0 0 64 64" aria-hidden="true"><path d="M12 48c10-20 30-30 40-32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="3"/><path d="m42 12 10 4-7 8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><circle cx="16" cy="47" r="4" fill="none" stroke="currentColor" stroke-width="3"/></svg>',
        'check' => '<svg viewBox="0 0 64 64" aria-hidden="true"><rect x="14" y="10" width="36" height="44" rx="6" fill="none" stroke="currentColor" stroke-width="3"/><path d="M24 24h16M24 32h16M24 40h10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="3"/><path d="m42 42 4 4 8-10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>',
        'clock' => '<svg viewBox="0 0 64 64" aria-hidden="true"><circle cx="32" cy="32" r="22" fill="none" stroke="currentColor" stroke-width="3"/><path d="M32 20v13l9 5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>',
    ];

    return $icons[$icon] ?? $icons['pathway'];
}

$hero = $isFrench ? [
    'eyebrow' => 'YOUR JOURNEY, STEP BY STEP',
    'title' => 'Start Your Canadian Journey',
    'intro' => 'I m Alex, an international student turned permanent resident in Canada. I share clear, step by step guides to help you understand your options, avoid costly mistakes, and move forward with confidence.',
    'primary_cta' => 'Start Your Plan',
    'secondary_cta' => 'Explore Pathways',
    'proofs' => ['Based on real experience', 'Step-by-step guides', 'Updated regularly'],
    'mission_title' => 'My mission',
    'mission_text' => 'Make Canadian immigration information simple, clear, and actionable for students worldwide.',
    'signature' => 'Alex',
    'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=1400&q=80',
    'image_alt' => 'Student planning a Canadian immigration path',
] : [
    'eyebrow' => 'YOUR JOURNEY, STEP BY STEP',
    'title' => 'Start Your Canadian Journey',
    'intro' => 'I m Alex, an international student turned permanent resident in Canada. I share clear, step by step guides to help you understand your options, avoid costly mistakes, and move forward with confidence.',
    'primary_cta' => 'Start Your Plan',
    'secondary_cta' => 'Explore Pathways',
    'proofs' => ['Based on real experience', 'Step-by-step guides', 'Updated regularly'],
    'mission_title' => 'My mission',
    'mission_text' => 'Make Canadian immigration information simple, clear, and actionable for students worldwide.',
    'signature' => 'Alex',
    'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=1400&q=80',
    'image_alt' => 'Student planning a Canadian immigration path',
];

$journeyHeading = $isFrench
    ? 'Know where you are, know what to do next'
    : 'Know where you are, know what to do next';

$journeyCards = [
    [
        'number' => '01',
        'title' => 'Study Permit',
        'text' => $isFrench
            ? 'Understand the basics, prepare your application, and start your studies in Canada.'
            : 'Understand the basics, prepare your application, and start your studies in Canada.',
        'cta' => 'See the guide',
        'icon' => 'cap',
        'tone' => 'blue',
    ],
    [
        'number' => '02',
        'title' => 'PGWP',
        'text' => $isFrench
            ? 'Learn how to get your Post-Graduation Work Permit and gain valuable Canadian work experience.'
            : 'Learn how to get your Post-Graduation Work Permit and gain valuable Canadian work experience.',
        'cta' => 'See the guide',
        'icon' => 'briefcase',
        'tone' => 'green',
    ],
    [
        'number' => '03',
        'title' => 'Permanent Residence',
        'text' => $isFrench
            ? 'Explore the main pathways to PR and build your long-term plan in Canada.'
            : 'Explore the main pathways to PR and build your long-term plan in Canada.',
        'cta' => 'See the guide',
        'icon' => 'maple',
        'tone' => 'red',
    ],
];

$pathwayCards = [
    [
        'title' => 'Study Permit',
        'text' => 'Your first step to studying in Canada.',
        'cta' => 'Explore',
        'icon' => 'passport',
        'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=900&q=80',
        'tone' => 'blue',
    ],
    [
        'title' => 'PGWP',
        'text' => 'Work in Canada after graduation.',
        'cta' => 'Explore',
        'icon' => 'briefcase',
        'image' => 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=900&q=80',
        'tone' => 'green',
    ],
    [
        'title' => 'Express Entry',
        'text' => 'Apply for PR through the federal system.',
        'cta' => 'Explore',
        'icon' => 'pathway',
        'image' => 'https://images.unsplash.com/photo-1517935706615-2717063c2225?auto=format&fit=crop&w=900&q=80',
        'tone' => 'orange',
    ],
    [
        'title' => 'BC PNP',
        'text' => 'Provincial pathway for British Columbia.',
        'cta' => 'Explore',
        'icon' => 'maple',
        'image' => 'https://images.unsplash.com/photo-1505764706515-aa95265c5abc?auto=format&fit=crop&w=900&q=80',
        'tone' => 'purple',
    ],
    [
        'title' => 'PR Roadmap',
        'text' => 'A complete plan from student to permanent resident.',
        'cta' => 'Explore',
        'icon' => 'check',
        'image' => 'https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=900&q=80',
        'tone' => 'gold',
    ],
];

$checklist = [
    'eyebrow' => $isFrench ? 'FREE CHECKLIST' : 'FREE CHECKLIST',
    'title' => $isFrench ? 'Get the Ultimate Canada Immigration Checklist' : 'Get the Ultimate Canada Immigration Checklist',
    'text' => $isFrench
        ? 'A practical checklist with important documents, timelines, and next steps for each stage.'
        : 'A practical checklist with important documents, timelines, and next steps for each stage.',
    'placeholder' => $isFrench ? 'Your email address' : 'Your email address',
    'cta' => $isFrench ? 'Get the checklist' : 'Get the checklist',
    'note' => $isFrench ? 'No spam. Unsubscribe anytime.' : 'No spam. Unsubscribe anytime.',
];

$faqItems = [
    [
        'q' => $isFrench ? 'Where should I begin if I am still a student?' : 'Where should I begin if I am still a student?',
        'a' => $isFrench ? 'Start with the Study Permit and Start Here sections, then move to PGWP planning before graduation.' : 'Start with the Study Permit and Start Here sections, then move to PGWP planning before graduation.',
    ],
    [
        'q' => $isFrench ? 'Does this platform replace a lawyer or consultant?' : 'Does this platform replace a lawyer or consultant?',
        'a' => $isFrench ? 'No. It is an educational guidance platform designed to help you understand your options and ask better questions.' : 'No. It is an educational guidance platform designed to help you understand your options and ask better questions.',
    ],
    [
        'q' => $isFrench ? 'How do I choose between Express Entry and PNP?' : 'How do I choose between Express Entry and PNP?',
        'a' => $isFrench ? 'It depends on your CRS score, work experience, province, and timeline. The pathway pages are meant to compare those options.' : 'It depends on your CRS score, work experience, province, and timeline. The pathway pages are meant to compare those options.',
    ],
    [
        'q' => $isFrench ? 'Will the content also be available in French?' : 'Will the content also be available in French?',
        'a' => $isFrench ? 'Yes. The project is bilingual and the language switcher is already built into the interface.' : 'Yes. The project is bilingual and the language switcher is already built into the interface.',
    ],
];

$finalCta = [
    'title' => $isFrench ? 'Your future in Canada starts with the right information.' : 'Your future in Canada starts with the right information.',
    'text' => $isFrench ? 'Take the next step with confidence. I ll guide you all the way.' : 'Take the next step with confidence. I ll guide you all the way.',
    'primary' => $isFrench ? 'Start Your Plan' : 'Start Your Plan',
    'secondary' => $isFrench ? 'Explore Guides' : 'Explore Guides',
];

$meta = [
    'title' => $hero['title'],
    'description' => $hero['intro'],
];

require __DIR__ . '/includes/header.php';
?>
<main class="main home-page" id="main-content">
    <section class="home-hero section section--tight">
        <div class="container home-hero__grid">
            <div class="home-hero__content stack-lg" data-reveal>
                <div class="home-hero__intro stack-md">
                    <span class="eyebrow"><?= htmlspecialchars($hero['eyebrow'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <h1 class="display-title home-hero__title"><?= htmlspecialchars($hero['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
                    <p class="lead home-hero__lead"><?= htmlspecialchars($hero['intro'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>

                <div class="cluster-sm home-hero__actions">
                    <a class="button button--primary" href="<?= mpc_url('start-here'); ?>">
                        <?= htmlspecialchars($hero['primary_cta'], ENT_QUOTES, 'UTF-8'); ?>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                    <a class="button button--secondary" href="<?= mpc_url('pathways'); ?>"><?= htmlspecialchars($hero['secondary_cta'], ENT_QUOTES, 'UTF-8'); ?></a>
                </div>

                <ul class="home-hero__trust-list" aria-label="Trust indicators">
                    <?php foreach ($hero['proofs'] as $proof): ?>
                        <li class="home-hero__trust-item">
                            <span class="home-hero__trust-icon" aria-hidden="true"></span>
                            <span><?= htmlspecialchars($proof, ENT_QUOTES, 'UTF-8'); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="home-hero__visual" data-reveal>
                <div class="home-hero__media-wrap">
                    <img class="home-hero__image" src="<?= htmlspecialchars($hero['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($hero['image_alt'], ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="home-hero__mission-card">
                        <h2 class="home-hero__mission-title"><?= htmlspecialchars($hero['mission_title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <p class="home-hero__mission-text"><?= htmlspecialchars($hero['mission_text'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <span class="home-hero__signature"><?= htmlspecialchars($hero['signature'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section home-journey">
        <div class="container">
            <div class="home-journey__panel">
                <div class="home-section-row" data-reveal>
                    <h2 class="heading-xl home-journey__title"><?= htmlspecialchars($journeyHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
                </div>

                <div class="home-journey__grid">
                    <?php foreach ($journeyCards as $card): ?>
                        <article class="home-journey__card" data-reveal>
                            <div class="home-journey__card-top">
                                <span class="home-journey__number"><?= htmlspecialchars($card['number'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="home-journey__icon home-journey__icon--<?= htmlspecialchars($card['tone'], ENT_QUOTES, 'UTF-8'); ?>" aria-hidden="true"><?= mpc_home_icon($card['icon']); ?></span>
                            </div>
                            <h3 class="home-card__title"><?= htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="home-card__text"><?= htmlspecialchars($card['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <a class="home-card__link" href="<?= mpc_url('pathways'); ?>"><?= htmlspecialchars($card['cta'], ENT_QUOTES, 'UTF-8'); ?> <span aria-hidden="true">&rarr;</span></a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--compact home-pathways">
        <div class="container">
            <div class="home-section-row" data-reveal>
                <h2 class="home-section-title">Popular Immigration Pathways</h2>
                <a class="home-section-link" href="<?= mpc_url('pathways'); ?>">View all pathways <span aria-hidden="true">&rarr;</span></a>
            </div>

            <div class="home-pathways__grid">
                <?php foreach ($pathwayCards as $card): ?>
                    <article class="home-pathways__card" data-reveal>
                        <div class="home-pathways__media">
                            <img src="<?= htmlspecialchars($card['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                        <div class="home-pathways__body">
                            <span class="home-pathways__badge home-pathways__badge--<?= htmlspecialchars($card['tone'], ENT_QUOTES, 'UTF-8'); ?>" aria-hidden="true"><?= mpc_home_icon($card['icon']); ?></span>
                            <h3 class="home-card__title"><?= htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="home-card__text"><?= htmlspecialchars($card['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <a class="home-card__link" href="<?= mpc_url('pathways'); ?>"><?= htmlspecialchars($card['cta'], ENT_QUOTES, 'UTF-8'); ?> <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--compact home-guides">
        <div class="container">
            <div class="home-section-row" data-reveal>
                <h2 class="home-section-title">Latest Guides</h2>
                <a class="home-section-link" href="<?= mpc_url('blog'); ?>">View all guides <span aria-hidden="true">&rarr;</span></a>
            </div>

            <div class="home-guides__grid">
                <?php foreach ($articles as $article): ?>
                    <article class="home-guide-card" data-reveal>
                        <div class="home-guide-card__media">
                            <img src="<?= htmlspecialchars($article['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8'); ?>">
                            <span class="home-guide-card__tag"><?= htmlspecialchars($article['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                        <div class="home-guide-card__body">
                            <h3 class="home-card__title"><?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="home-card__text"><?= htmlspecialchars($article['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <p class="home-guide-card__meta"><?= htmlspecialchars($article['display_date'], ENT_QUOTES, 'UTF-8'); ?> <span aria-hidden="true">•</span> <?= htmlspecialchars($article['read_time'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--compact home-checklist">
        <div class="container">
            <div class="home-checklist__panel" data-reveal>
                <div class="home-checklist__book" aria-hidden="true">
                    <div class="home-checklist__book-cover">
                        <span>CANADA</span>
                        <span>IMMIGRATION</span>
                        <span>CHECKLIST</span>
                    </div>
                </div>

                <div class="home-checklist__content">
                    <span class="eyebrow"><?= htmlspecialchars($checklist['eyebrow'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <h2 class="home-checklist__title"><?= htmlspecialchars($checklist['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p class="home-card__text"><?= htmlspecialchars($checklist['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>

                <form class="home-checklist__form" data-placeholder-form>
                    <div class="home-checklist__field">
                        <input class="home-checklist__input" type="email" name="email" placeholder="<?= htmlspecialchars($checklist['placeholder'], ENT_QUOTES, 'UTF-8'); ?>" aria-label="<?= htmlspecialchars($checklist['placeholder'], ENT_QUOTES, 'UTF-8'); ?>">
                        <button class="button button--primary home-checklist__button" type="submit"><?= htmlspecialchars($checklist['cta'], ENT_QUOTES, 'UTF-8'); ?></button>
                    </div>
                    <p class="home-checklist__note" data-form-feedback><?= htmlspecialchars($checklist['note'], ENT_QUOTES, 'UTF-8'); ?></p>
                </form>
            </div>
        </div>
    </section>

    <section class="section section--compact home-faq">
        <div class="container">
            <div class="home-section-row" data-reveal>
                <h2 class="home-section-title">Frequently Asked Questions</h2>
                <a class="home-section-link" href="<?= mpc_url('faq'); ?>">View all FAQs <span aria-hidden="true">&rarr;</span></a>
            </div>

            <div class="home-faq__grid">
                <?php foreach ($faqItems as $item): ?>
                    <details class="home-faq__item" data-reveal>
                        <summary class="home-faq__summary"><?= htmlspecialchars($item['q'], ENT_QUOTES, 'UTF-8'); ?></summary>
                        <div class="home-faq__content">
                            <p><?= htmlspecialchars($item['a'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--compact home-final-cta">
        <div class="container">
            <div class="home-final-cta__panel" data-reveal>
                <div class="home-final-cta__compass" aria-hidden="true"></div>
                <div class="home-final-cta__content">
                    <h2 class="home-final-cta__title"><?= htmlspecialchars($finalCta['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p class="home-final-cta__text"><?= htmlspecialchars($finalCta['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <div class="home-final-cta__actions">
                    <a class="button button--primary" href="<?= mpc_url('start-here'); ?>"><?= htmlspecialchars($finalCta['primary'], ENT_QUOTES, 'UTF-8'); ?></a>
                    <a class="button button--secondary button--light" href="<?= mpc_url('blog'); ?>"><?= htmlspecialchars($finalCta['secondary'], ENT_QUOTES, 'UTF-8'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
