function displayPaymentForm() {
    var modal = document.getElementById("payment-modal");
    modal.style.display = "block";
}

function closePaymentModal() {
    var modal = document.getElementById("payment-modal");
    modal.style.display = "none";
}

function handlePayment(event) {
    event.preventDefault(); // Prevent form submission
    var successMessage = document.getElementById("success-message");
    successMessage.style.display = "block"; // Display success message
}