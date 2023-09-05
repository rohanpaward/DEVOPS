<?php
$email = $_POST['email'];
$password = $_POST['password'];

// db conn
$con = new mysqli("localhost", "root", "", "signup");

if ($con->connect_error) {
    die('failed to connect ' . $conn->$connect_error);
} else {
    // Select all rows from the table
    $stmt = $con->prepare("SELECT * FROM signupp WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    $login_success = false;

    while ($row = $stmt_result->fetch_assoc()) {
        if ($row['password'] === $password) {
            $login_success = true;
            // Store the username in a session variable
            session_start();
            $_SESSION['username'] = $row['username'];
            break;
        }
    }

    if ($login_success) {
        // Redirect to index.html
        header("Location: rohan_redirect.html");
        exit;
    } else {
        echo "<h2>INVALID EMAIL OR PASSWORD</h2>";
    }
}
?>
