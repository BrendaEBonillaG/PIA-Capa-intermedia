
document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault();  

    const formData = new FormData(this);

    fetch('Api.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        alert(result);  
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
