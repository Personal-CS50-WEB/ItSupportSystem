<!DOCTYPE html>
<html>

<head>
    <title>Need Help</title>
    <?php include('../includes/head.html'); ?>
</head>
<body>
    <!-- include header -->
    <?php include('../includes/header.php');
    // include logout button if any user logged in
    include('../includes/logoutbutton.php');

    // check if not CEO redirect to main page
    
    if (!isset($_SESSION["role"])) {
        header('Location: ./index.php');
    } 
    else if ($_SESSION["role"] != "CEO") {
        header('Location: ./Problem.php');
    } ?>
    ?>
    <main class='paddingTop'>
        <div class="contact-info">
            <h2>Need Help?</h2>
            <br>
            <ul>
                <li><i class="fa fa-phone"></i><Strong>Call: </Strong>(123) 456-7890</li>
                <li><i class="fa fa-envelope"></i><Strong>Email: </Strong>info@example.com</li>
            </ul>
        </div>
    </main>
    <?php include('../includes/footer.html'); ?>