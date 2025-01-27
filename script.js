// Handle contact form submission
document.getElementById('contact-form').addEventListener('submit', function (event) {
    event.preventDefault();
    alert('Message sent! We will get back to you soon.');
    document.getElementById('contact-form').reset();
});

// Handle feedback form submission
document.getElementById('feedback-form').addEventListener('submit', function (event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const feedbackMessage = document.getElementById('feedback-message').value;

    if (name && feedbackMessage) {
        const feedbackList = document.getElementById('feedback-list');
        const newFeedback = document.createElement('div');
        newFeedback.classList.add('feedback-item');
        newFeedback.innerHTML = `<strong>${name}</strong>: <p>${feedbackMessage}</p>`;
        feedbackList.appendChild(newFeedback);

        // Clear the form
        document.getElementById('feedback-form').reset();
    } else {
        alert('Please fill out the feedback form.');
    }
});
