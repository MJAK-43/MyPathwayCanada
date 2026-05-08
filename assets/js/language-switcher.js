document.addEventListener('DOMContentLoaded', () => {
    const baseUrl = document.body.dataset.baseUrl || '';
    const switcher = document.querySelector('[data-language-switcher]');

    if (!switcher) {
        return;
    }

    const button = switcher.querySelector('.language-switcher__button');
    const menu = switcher.querySelector('.language-switcher__menu');
    const options = switcher.querySelectorAll('[data-language-option]');

    if (!button || !menu) {
        return;
    }

    button.addEventListener('click', () => {
        const expanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', String(!expanded));
        menu.hidden = expanded;
    });

    options.forEach((option) => {
        option.addEventListener('click', async () => {
            const lang = option.getAttribute('data-language-option');

            if (!lang) {
                return;
            }

            try {
                const response = await fetch(`${baseUrl}/language/switch`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: new URLSearchParams({ lang }).toString()
                });

                const result = await response.json();

                if (result.success) {
                    window.location.href = result.redirect || window.location.href;
                }
            } catch (error) {
                window.location.search = `?lang=${encodeURIComponent(lang)}`;
            }
        });
    });

    document.addEventListener('click', (event) => {
        if (!switcher.contains(event.target)) {
            button.setAttribute('aria-expanded', 'false');
            menu.hidden = true;
        }
    });
});
