document.querySelector('.login-container form').addEventListener('submit', function(event) {
    var email = document.querySelector('input[name="email"]').value;
    var password = document.querySelector('input[name="password"]').value;

    if (email === '' || password === '') {
        alert("Veuillez remplir tous les champs.");
        event.preventDefault(); // Prevent form submission
    }
});
