document.addEventListener('DOMContentLoaded', function() {
    // Initialize WOW.js for animations
    new WOW().init();

    // Add form submit event listener
    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Add your login validation logic here
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        
        // Example validation (replace with your own logic)
        if (username === 'admin' && password === 'password') {
            alert('Login successful!');
            // Redirect to the admin dashboard or another page
        } else {
            alert('Login failed. Please check your username and password.');
        }
    });
});
