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
    ?>
    <main class='paddingTop'>

        <h2>You are signed out</h2>
        
        <h3><a href="./index.php">Back to homepage</a></h3>
    </main>
    
    <?php include('../includes/footer.html'); ?>