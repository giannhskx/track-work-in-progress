<?php
// Function to validate email address
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Function to check if the domain has MX records
function domainExists($domain) {
    return checkdnsrr($domain, 'MX');
}

// Function to validate email address and domain
function isEmailValid($email) {
    if (!isValidEmail($email)) {
        return false;
    }

    $domain = substr(strrchr($email, "@"), 1);
    return domainExists($domain);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);

    if (isEmailValid($email)) {
        echo "<p>The email address <strong>$email</strong> is valid.</p>";
    } else {
        echo "<p>The email address <strong>$email</strong> is not valid.</p>";
    }
} else {
    echo "<p>No email address provided.</p>";
}
?>
