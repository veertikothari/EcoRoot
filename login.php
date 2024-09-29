<?php
    // Get login details
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '1976', 'test');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); 
    } else {
        // Check if the user exists in the database
        $stmt = $conn->prepare("SELECT password FROM ecommerce WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        // Check if the user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($stored_password);
            $stmt->fetch();

            // Directly compare the entered password with the one in the database
            if ($password === $stored_password) {
                echo '<script>alert("Login successful!"); window.location.href = "index.php";</script>';
                session_start();
                $_SESSION['user'] = $email; // Example session
            } else {
                echo '<script>alert("Incorrect password. Please try again."); window.history.back();</script>';
            }
        } else {
            echo '<script>alert("User doesn\'t exist. Please register."); window.location.href="register.html";</script>';
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
?>
