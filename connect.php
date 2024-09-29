<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];  // No hashing as requested
    $gender = $_POST['gender'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '1976', 'test');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); 
    } else {
        // Correct SQL insert statement
        $stmt = $conn->prepare("INSERT INTO ecommerce (fullname, email, phone, password, gender) VALUES (?, ?, ?, ?, ?)");

        // Bind the parameters
        $stmt->bind_param("sssss", $fullname, $email, $phone, $password, $gender);

        // Execute the statement
        if ($stmt->execute()) {
            // Registration success: show alert and redirect to login page
            echo '<script>alert("Registered successfully."); window.location.href = "login.html";</script>';  
        } else {
            // Registration failed: show alert and redirect back to registration page
            echo '<script>alert("Registration failed. Please try again."); window.history.back();</script>';
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }

    // No need for header() because redirection is handled by JavaScript
?>
