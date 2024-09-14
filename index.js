document.addEventListener('DOMContentLoaded', () => {
    const openRegistrationFormBtn = document.getElementById('openRegistrationFormBtn');
    const registrationPopup = document.getElementById('registrationPopup');
    const closeRegistrationPopup = document.getElementById('closeRegistrationPopup');

    openRegistrationFormBtn.addEventListener('click', () => {
        registrationPopup.style.display = 'flex';
    });

    closeRegistrationPopup.addEventListener('click', () => {
        registrationPopup.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === registrationPopup) {
            registrationPopup.style.display = 'none';
        }
    });
});
