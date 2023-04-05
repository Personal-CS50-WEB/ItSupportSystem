<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <?php include('../includes/head.html'); ?>
</head>
<body>
    <?php include('../includes/header.php');
    // clear session variable and display a message
    $_SESSION = [];

    session_destroy();
    header("Location: ./index.php?message=You are signed out");

    include('../includes/footer.html'); 
    ?>