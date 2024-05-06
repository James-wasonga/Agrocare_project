fetch('paymentform.html').then(response => response.text()).then(data => {
    document.getElementById('imported-content').innerHTML = data;
});