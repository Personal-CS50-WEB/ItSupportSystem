<!DOCTYPE html>
<html>
<head>
    <title>Lost Password</title>
    <?php include('../includes/head.html'); ?>
</head>
<body>
    <!-- include header -->
    <?php include('../includes/header.php');
    // include logout button if any user logged in
    include('../includes/logoutbutton.php');

    // check if not manager redirect to main page
    if (!isset($_SESSION["role"])) {
        header('Location: ./index.php');
    } 
    else if ($_SESSION["role"] != "Manager") {
        header('Location: ./Problem.php');
    } 
    ?>

    <main class='paddingTop'>
        <h2>Reset Password</h2>
        <hr></hr>
        <!-- form sends lostPassword as a value of emailType -->
        <form action="Send-email.php" method="GET">
            <input class="input-field" type="text" name="emailType" value="lostPassword">
            <input class="btn-blue" name="submit" type="submit" value="Submit">
        </form>
        <h4><a href="./Problem.php">Back</a></h4>
    </main>
    <?php include('../includes/footer.html'); ?>