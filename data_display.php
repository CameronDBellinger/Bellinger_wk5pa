<?php
// Cameron Bellinger
// SDC310
// 9/28/2026

session_start();

// Get Name from cookie
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name = "No name stored";
}

// Get Date of Birth from session
if (isset($_SESSION['dob'])) {
    $dob = $_SESSION['dob'];
} else {
    $dob = "No date of birth stored";
}
?>

<html>
<head>
    <title>Cameron Bellinger Wk 5 Performance Assessment</title>
</head>
  
<body>

<h2>Cameron Bellinger 5 Performance Assessment</h2>

<p>
    <strong>Name:</strong>
    <?php echo htmlspecialchars($name); ?>
</p>

<p>
    <strong>Date of Birth:</strong>
    <?php echo htmlspecialchars($dob); ?>
</p>

<br>

<a href="data_entry.php">Back to Data Entry Page</a>

</body>
</html>