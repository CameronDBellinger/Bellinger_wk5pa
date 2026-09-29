<?php
// Cameron Bellinger
// SDC310
// 9/28/2026
   
session_start();

// Get saved values
$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : "";
$dob = isset($_SESSION['dob']) ? $_SESSION['dob'] : "";

// When Submit is clicked
if (isset($_POST['submit'])) {

    // Store Name in cookie
    $name = $_POST['name'];
    setcookie("name", $name, time() + 3600, "/");

    // Store Date of Birth in session
    $_SESSION['dob'] = $_POST['dob'];

    // Update DOB variable
    $dob = $_POST['dob'];
}
?>

<html>
<head>
    <title>Cameron Bellinger Wk 5 Performance Assessment</title>
</head>

<body>

<h2>Cameron Bellinger Wk 5 Performance Assessment</h2>

<form method="POST">

    <p>
        Name:
        <input type="text"
               name="name"
               value="<?php echo htmlspecialchars($name); ?>">
    </p>

    <p>
        Date of Birth:
        <input type="date"
               name="dob"
               value="<?php echo htmlspecialchars($dob); ?>">
    </p>

    <input type="submit" name="submit" value="Submit">

</form>

<br>

<a href="data_display.php">Go to Data Display Page</a>

</body>
</html>
