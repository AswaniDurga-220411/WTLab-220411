<?php
// 1. Start session
session_start();

// 2. Database connection (XAMPP)
$conn = new mysqli("localhost", "root", "", "registration_db");

// 3. Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// 4. Check form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email    = $_POST['email'];
    $password = $_POST['password'];

    // 5. Fetch user by email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    // 6. Check if user exists
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // 7. Verify password
        if (password_verify($password, $row['password'])) {

            // 8. Store session
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];

            echo "✅ Login successful! Welcome " . $row['name'];

            // Optional redirect
            // header("Location: dashboard.php");
            // exit;

        } else {
            echo "❌ Incorrect password!";
        }
    } else {
        echo "❌ Email not registered!";
    }
}

// 9. Close connection
$conn->close();
?>
