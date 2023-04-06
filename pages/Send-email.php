<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
    <?php include('../includes/head.html'); ?>
</head>
<body>
    <!-- include header -->
    <?php include('../includes/header.php');
    // include logout button if any user logged in
    include('../includes/logoutbutton.php');

    // check if not logged in redirect to index page
    if (!isset($_SESSION["role"])) {
        header('Location: ./index.php');
    }
    ?>
    <main>
        <?php
        // if emailType = newAccount
        if (isset($_GET['emailType']) && trim($_GET['emailType']) == "newAccount") {
            printf('<h3>You sent email for:</h3><h2>Create New account !</h2>');
        }
        // if emailType = lostPassword
        else if (isset($_GET['emailType']) && trim($_GET['emailType']) == "lostPassword") {
            printf('<h3>You sent email for:</h3><h2>Reset Password!</h2>');
        } else {
            printf('<h2 class="wrong">Something went wrong!</h2>');
        }
        printf('<h3><a href="./Problem.php">Back</a></h3>');
        ?>
    </main>
    <?php include('../includes/footer.html'); ?>