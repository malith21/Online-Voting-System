document.getElementById("votingForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    const nominee = document.getElementById("nominee").value;
    const message = document.getElementById("message");

    message.textContent = `Thank you for voting for ${nominee}!`;
    message.style.color = "green";
});

