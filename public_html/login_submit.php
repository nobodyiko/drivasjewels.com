<?php
require('connection.inc.php');
require('functions.inc.php');

$email = get_safe_value($con, $_POST['email']);
$password = get_safe_value($con, $_POST['password']);

// Use prepared statement to prevent SQL injection
$stmt = mysqli_prepare($con, "SELECT * FROM users WHERE email = ?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    // Email exists in the database
    $password1 = $row['password'];

    if ($password === $password1) {
        // Password is correct
        $_SESSION['USER_LOGIN'] = 'yes';
        $_SESSION['USER_ID'] = $row['id'];
        $_SESSION['USER_NAME'] = $row['name'];

        if (isset($_SESSION['WISHLIST_ID']) && $_SESSION['WISHLIST_ID'] != '') {
            wishlist_add($con, $_SESSION['USER_ID'], $_SESSION['WISHLIST_ID']);
            unset($_SESSION['WISHLIST_ID']);
        }

        echo "valid";
    } else {
        // Password is incorrect
        echo "wrong";
    }
} else {
    // Email does not exist in the database
    echo "not_exist";
}

mysqli_stmt_close($stmt);
?>
