<?php

$username = "";
$email = "";
$gender = "";
$mobile = "";
$country = "";

$username_error = "";
$email_error = "";
$gender_error = "";
$mobile_error = "";
$country_error = "";
$password_error = "";
$confirm_password_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $mobile = $_POST["mobile"];
    $country = $_POST["country"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    
    if (empty($username)) {
        $username_error = "Username is required";
    } elseif (!preg_match("/^[a-zA-Z0-9 ]+$/", $username)) {
        $username_error = "Only letters, numbers and spaces are allowed";
    }

    
    if (empty($email)) {
        $email_error = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
    }

    
    if (empty($gender)) {
        $gender_error = "Gender must be selected";
    }

    
    if (empty($mobile)) {
        $mobile_error = "Mobile number is required";
    } elseif (!preg_match("/^\+?[0-9]+$/", $mobile)) {
        $mobile_error = "Only numbers and + symbol are allowed";
    }

    
    if (empty($country)) {
        $country_error = "Country must be selected";
    }

    
    if (strlen($password) < 8) {
        $password_error = "Password must be at least 8 characters";
    }

    
    if ($password != $confirm_password) {
        $confirm_password_error = "Passwords do not match";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Validation</title>

<style>

.error {
    color: red;
}

</style>

</head>

<body>

<h2>Registration Form</h2>

<form method="post" action="registration_validation.php">

Username:
<input type="text" name="username"
value="<?php echo $username; ?>">

<span class="error">
<?php
if ($username_error != "") {
    echo "* " . $username_error;
}
?>
</span>

<br><br>

Email:
<input type="text" name="email"
value="<?php echo $email; ?>">

<span class="error">
<?php
if ($email_error != "") {
    echo "* " . $email_error;
}
?>
</span>

<br><br>

Gender:

<input type="radio" name="gender" value="m"> Male

<input type="radio" name="gender" value="f"> Female

<input type="radio" name="gender" value="o"> Other

<span class="error">
<?php
if ($gender_error != "") {
    echo "* " . $gender_error;
}
?>
</span>

<br><br>

Mobile No:
<input type="text" name="mobile"
value="<?php echo $mobile; ?>">

<span class="error">
<?php
if ($mobile_error != "") {
    echo "* " . $mobile_error;
}
?>
</span>

<br><br>

Country:

<select name="country">

<option value="">Select Country</option>

<option value="India">India</option>
<option value="USA">USA</option>
<option value="UK">UK</option>
<option value="Canada">Canada</option>

</select>

<span class="error">
<?php
if ($country_error != "") {
    echo "* " . $country_error;
}
?>
</span>

<br><br>

Password:
<input type="password" name="password">

<span class="error">
<?php
if ($password_error != "") {
    echo "* " . $password_error;
}
?>
</span>

<br><br>

Confirm Password:
<input type="password" name="confirm_password">

<span class="error">
<?php
if ($confirm_password_error != "") {
    echo "* " . $confirm_password_error;
}
?>
</span>

<br><br>

<input type="checkbox" name="terms">

I agree to the terms and condition

<br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>