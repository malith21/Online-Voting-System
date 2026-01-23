document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Collect form data
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let subject = document.getElementById('subject').value;
    let message = document.getElementById('message').value;

    // Simulate form submission (You can integrate with your backend API here)
    if (name && email && subject && message) {
        alert('Thank you for contacting us, ' + name + '! We will get back to you shortly.');
        document.getElementById('contactForm').reset(); // Clear the form
    } else {
        alert('Please fill in all fields.');
    }
});

