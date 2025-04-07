document.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.querySelector('.toggle');
    const modeSwitch = document.querySelector('.toggle-switch');
    const modeText = document.querySelector('.mode-text');
    const faqItems = document.querySelectorAll('.faq-item');
    const helpSearchInput = document.querySelector('#help-search-input');
    const contactForm = document.querySelector('#contact-form');
    const liveChatBtn = document.querySelector('.live-chat-btn');

    // Sidebar toggle
    if (toggle) {
        toggle.addEventListener('click', () => {
            sidebar.classList.toggle('close');
        });
    }

    // Dark mode toggle
    if (modeSwitch) {
        modeSwitch.addEventListener('click', () => {
            body.classList.toggle('dark');
            modeText.innerText = body.classList.contains('dark') ? "Light mode" : "Dark mode";
        });
    }

    // Profile Popup Toggle
    const profileLink = document.querySelector('.profile-link');
    const profilePopup = document.querySelector('.profile-popup');
    const closePopup = document.querySelector('.close-popup');

    if (profileLink && profilePopup && closePopup) {
        profileLink.addEventListener('click', (e) => {
            e.preventDefault();
            profilePopup.classList.toggle('active');
        });

        closePopup.addEventListener('click', () => {
            profilePopup.classList.remove('active');
        });

        document.addEventListener('click', (e) => {
            if (!profilePopup.contains(e.target) && !profileLink.contains(e.target)) {
                profilePopup.classList.remove('active');
            }
        });
    }

    // FAQ Accordion
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(i => i.classList.remove('active'));
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // Help Search (Simulated)
    if (helpSearchInput) {
        helpSearchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            faqItems.forEach(item => {
                const questionText = item.querySelector('.faq-question-text').textContent.toLowerCase();
                const answerText = item.querySelector('.faq-answer p').textContent.toLowerCase();
                if (questionText.includes(searchTerm) || answerText.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }

    // Contact Form Submission (Simulated)
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const submitBtn = contactForm.querySelector('.submit-btn');
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            setTimeout(() => {
                alert('Your message has been sent! Our team will get back to you soon.');
                contactForm.reset();
                submitBtn.textContent = 'Send Message';
                submitBtn.disabled = false;
            }, 1000); // Simulate sending delay
        });
    }

    // Live Chat Button (Simulated)
    if (liveChatBtn) {
        liveChatBtn.addEventListener('click', () => {
            alert('Live chat is currently unavailable. Please use the contact form to reach us.');
        });
    }
});