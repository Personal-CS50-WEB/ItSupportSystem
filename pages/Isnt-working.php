<!DOCTYPE html>
<html>

<head>
    <title>Is not working</title>
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
    } ?>

    <main class='paddingTop'>
        <h2>Your Computer Is Not working</h2>
        <hr>
        </hr>
        <!-- render gif -->
        <img src="../Img/giphy.gif" alt="not working" loading="lazy">
        <h4><a href="./Problem.php">Back</a></h4>
    </main>
    <?php include('../includes/footer.html'); ?>