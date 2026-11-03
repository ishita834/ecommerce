<?php

require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $gender = $_POST["gender"] ?? "";
    $mobile = trim($_POST["mobile"] ?? "");
    $country = $_POST["country"] ?? "";
    $password = $_POST["password"] ?? "";
    $confirm_password = $_POST["confirm_password"] ?? "";

    // Check required fields
    if (
        empty($username) ||
        empty($email) ||
        empty($mobile) ||
        empty($country) ||
        empty($password)
    ) {
        die("Please fill in all required fields.");
    }

    // Check terms
    if (!isset($_POST["terms"])) {
        die("You must agree to the terms and conditions.");
    }

    // Check password
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data
    $sql = "INSERT INTO users 
            (username, email, gender, mobile, country, password)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param(
        "ssssss",
        $username,
        $email,
        $gender,
        $mobile,
        $country,
        $hashed_password
    );

    if ($stmt->execute()) {
        echo "<h2>Registration Successful!</h2>";
        echo "Welcome, " . htmlspecialchars($username) . "!";
    } else {
        if ($stmt->errno == 1062) {
            echo "This email is already registered.";
        } else {
            echo "Registration failed: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();

} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>

<body>

<h2>Registration Form</h2>

<form method="post" action="registration.php">

Username:
<input type="text" name="username" required>
<br><br>

Email Address:
<input type="email" name="email" required>
<br><br>

Gender:
<input type="radio" name="gender" value="m"> Male
<input type="radio" name="gender" value="f"> Female
<input type="radio" name="gender" value="o"> Other
<br><br>

Mobile No:
<input type="text" name="mobile" required>
<br><br>

Country:
<select name="country" required>
    <option value="">Select Country</option>
    <option value="India">India</option>
    <option value="USA">USA</option>
    <option value="UK">UK</option>
    <option value="Canada">Canada</option>
</select>
<br><br>

Password:
<input type="password" name="password" required>
<br><br>

Confirm Password:
<input type="password" name="confirm_password" required>
<br><br>

<input type="checkbox" name="terms" value="yes" required>
I agree to the terms and condition
<br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>

<?php
}
?>