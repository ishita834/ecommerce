<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h2>Registration Details</h2>";

    echo "Username: " . $_POST["username"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Gender: " . $_POST["gender"] . "<br>";
    echo "Mobile No: " . $_POST["mobile"] . "<br>";
    echo "Country: " . $_POST["country"] . "<br>";
    echo "Password: " . $_POST["password"] . "<br>";
    echo "Confirm Password: " . $_POST["confirm_password"] . "<br>";

    if (isset($_POST["terms"])) {
        echo "Terms and Condition: Agreed";
    } else {
        echo "Terms and Condition: Not Agreed";
    }

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
<input type="text" name="username">
<br><br>

Email Address:
<input type="email" name="email">
<br><br>

Gender:
<input type="radio" name="gender" value="m"> Male
<input type="radio" name="gender" value="f"> Female
<input type="radio" name="gender" value="o"> Other
<br><br>

Mobile No:
<input type="text" name="mobile">
<br><br>

Country:
<select name="country">
    <option value="">Select Country</option>
    <option value="India">India</option>
    <option value="USA">USA</option>
    <option value="UK">UK</option>
    <option value="Canada">Canada</option>
</select>
<br><br>

Password:
<input type="password" name="password">
<br><br>

Confirm Password:
<input type="password" name="confirm_password">
<br><br>

<input type="checkbox" name="terms" value="yes">
I agree to the terms and condition
<br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>

<?php
}
?>