<!DOCTYPE html>
<html>

<head>
    <title>Create New Account</title>
    <?php include('../includes/head.html'); ?>
</head>
<body>
    <!-- include header -->
    <?php include('../includes/header.php');
    // include logout button if any user logged in
    include('../includes/logoutbutton.php');

    // check if not admin redirect to main page
    if (!isset($_SESSION["role"])) {
        header('Location: ./index.php');
    } 
    else if ($_SESSION["role"] != "Admin") {
        header('Location: ./problem.php');
    } ?>

    <main class='paddingTop'>
        <h2>Create New Account</h2>
        <hr></hr>
        <!-- form sends newAccount as a value of emailType -->
        <form action="send-email.php" method="GET">

            <input class="input-field" type="text" name="emailType" value="newAccount">

            <input class="btn-blue" name="submit" type="submit" value="Submit">
        </form>
        <h4><a href="./problem.php">Back</a></h4>
    </main>
    <?php include('../includes/footer.html'); ?>