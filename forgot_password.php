<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    <p>Enter your email address to reset your password.</p>

    <form id="forgotPasswordForm" action="reset_password.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Reset Password</button>
    </form>

    <div id="message"></div>

    <script>
        // Handle form submission
        document.getElementById('forgotPasswordForm').addEventListener('submit', function (e) {
            e.preventDefault();
            var email = document.getElementById('email').value;

            // You can perform AJAX request to send the email for password reset
            // For simplicity, we'll just display a message here
            var messageDiv = document.getElementById('message');
            messageDiv.innerHTML = 'A password reset email has been sent to ' + email;
            // Clear the form
            document.getElementById('forgotPasswordForm').reset();
        });
    </script>
</body>
</html>

    