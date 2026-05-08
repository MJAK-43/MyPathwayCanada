document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
    const header = document.querySelector('[data-site-header]');
    const toggle = document.querySelector('[data-nav-toggle]');
    const menu = document.querySelector('[data-nav-menu]');
    const dropdown = document.querySelector('[data-nav-dropdown]');
    const dropdownToggle = document.querySelector('[data-nav-dropdown-toggle]');
    const dropdownPanel = document.querySelector('[data-nav-dropdown-panel]');
    const desktopQuery = window.matchMedia('(min-width: 64rem)');

    const closeMenu = () => {
        if (!toggle || !menu) {
            return;
        }

        menu.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        body.classList.remove('nav-open');
    };

    const openMenu = () => {
        if (!toggle || !menu) {
            return;
        }

        menu.classList.add('is-open');
        toggle.setAttribute('aria-expanded', 'true');
        body.classList.add('nav-open');
    };

    const closeDropdown = () => {
        if (!dropdown || !dropdownToggle || !dropdownPanel) {
            return;
        }

        dropdown.classList.remove('is-open');
        dropdownToggle.setAttribute('aria-expanded', 'false');
        dropdownPanel.setAttribute('aria-hidden', 'true');
    };

    const openDropdown = () => {
        if (!dropdown || !dropdownToggle || !dropdownPanel) {
            return;
        }

        dropdown.classList.add('is-open');
        dropdownToggle.setAttribute('aria-expanded', 'true');
        dropdownPanel.setAttribute('aria-hidden', 'false');
    };

    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            const isOpen = menu.classList.contains('is-open');

            if (isOpen) {
                closeMenu();
                closeDropdown();
            } else {
                openMenu();
            }
        });
    }

    if (dropdown && dropdownToggle && dropdownPanel) {
        dropdownToggle.addEventListener('click', () => {
            const isOpen = dropdown.classList.contains('is-open');
            if (isOpen) {
                closeDropdown();
            } else {
                openDropdown();
            }
        });

        dropdown.addEventListener('focusin', openDropdown);
        dropdown.addEventListener('focusout', (event) => {
            if (!dropdown.contains(event.relatedTarget)) {
                closeDropdown();
            }
        });

        dropdown.addEventListener('mouseenter', () => {
            if (desktopQuery.matches) {
                openDropdown();
            }
        });

        dropdown.addEventListener('mouseleave', () => {
            if (desktopQuery.matches) {
                closeDropdown();
            }
        });
    }

    document.addEventListener('click', (event) => {
        if (dropdown && !dropdown.contains(event.target)) {
            closeDropdown();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeDropdown();
            closeMenu();
        }
    });

    desktopQuery.addEventListener('change', () => {
        closeDropdown();
        closeMenu();
    });

    let previousY = window.scrollY;
    const syncHeaderState = () => {
        if (!header) {
            return;
        }

        const currentY = window.scrollY;
        header.classList.toggle('is-scrolled', currentY > 12);
        header.classList.toggle('is-condensed', currentY > previousY && currentY > 140);
        previousY = currentY;
    };

    syncHeaderState();
    window.addEventListener('scroll', syncHeaderState, { passive: true });
});
