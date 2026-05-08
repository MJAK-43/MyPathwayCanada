document.addEventListener('submit', (event) => {
    const form = event.target;

    if (!(form instanceof HTMLFormElement)) {
        return;
    }

    if (!form.matches('[data-placeholder-form]')) {
        return;
    }

    event.preventDefault();
    const feedback = form.querySelector('[data-form-feedback]');

    if (feedback) {
        feedback.textContent = 'Form integration placeholder. Brevo wiring will be added later.';
    }
});
