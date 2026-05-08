<?php

declare(strict_types=1);

$switcherId = $switcherId ?? 'language-switcher-menu';
$switcherMode = $switcherMode ?? 'header';

$languageLabels = [
    'en' => ['label' => 'EN'],
    'fr' => ['label' => 'FR'],
];
?>
<div class="language-switcher language-switcher--<?= htmlspecialchars($switcherMode, ENT_QUOTES, 'UTF-8'); ?>" data-language-switcher>
    <button
        class="language-switcher__button"
        type="button"
        aria-expanded="false"
        aria-controls="<?= htmlspecialchars($switcherId, ENT_QUOTES, 'UTF-8'); ?>"
    >
        <span><?= $languageLabels[mpc_lang()]['label']; ?></span>
    </button>
    <div class="language-switcher__menu" id="<?= htmlspecialchars($switcherId, ENT_QUOTES, 'UTF-8'); ?>" hidden>
        <?php foreach (MPC_SUPPORTED_LANGS as $langOption): ?>
            <button
                class="language-switcher__option<?= $langOption === mpc_lang() ? ' is-active' : ''; ?>"
                type="button"
                data-language-option="<?= htmlspecialchars($langOption, ENT_QUOTES, 'UTF-8'); ?>"
            >
                <span><?= $languageLabels[$langOption]['label']; ?></span>
            </button>
        <?php endforeach; ?>
    </div>
</div>
