<!DOCTYPE html>
<html>

<head>
    <title>A decision page</title>
    <?php include('../includes/head.html'); ?>
</head>

<body>
    <!-- include header -->
    <?php include('../includes/header.php');

    function myHtmlspecialchars($s, $flags = null)
    {
        if (is_string($s)) {
            return ($flags === null) ?
                htmlspecialchars($s) :
                htmlspecialchars($s, $flags);
        } else {
            return "";
        }
    }
    if (!isset($_SESSION['role'])) {
        // set  user info as session variable
        $_SESSION['title'] = myHtmlspecialchars($_POST["title"] ?? "", ENT_QUOTES);
        $_SESSION['fName'] = myHtmlspecialchars(trim($_POST["fName"]) ?? "", ENT_QUOTES);
        $_SESSION['lName'] = myHtmlspecialchars(trim($_POST["lName"]) ?? "", ENT_QUOTES);
        $_SESSION['role'] = myHtmlspecialchars($_POST["role"] ?? "", ENT_QUOTES);
    }

    // include logout button if any user logged in
    include('../includes/logoutbutton.php'); ?>
    <main>
        <?php

        if (isset($_SESSION['role'])) {
            printf('<h2>Hello ' . $_SESSION['role'] . '</h2>');
            printf('<h4>' . $_SESSION['title'] . ucfirst($_SESSION['fName']) . ' ' . ucfirst($_SESSION['lName']) . '</h4><hr></hr>');
            printf('<h3>Here is your options:</h3>');

            //render not working link to all who signed in
            printf('<h3><a href="./Isnt-working.php">My Computer is not working</a></h3>');

            // if admin: render the admin's link
            if ($_SESSION['role'] == "Admin") {
                printf('<h3><a href="./New-account.php">Create new account</a></h3>');

                // if manager: render the manager's link
            } else if ($_SESSION['role'] == "Manager") {
                printf('<h3><a href="./Lost-password.php">Reset your password</a></h3>');
            }

            // if CEO : render the CEO's link
            else {
                printf('<h3><a href="./Need-help.php">Need help</a></h3>');
            }
        }
        ?>

    </main>
    <?php include('../includes/footer.html'); ?>