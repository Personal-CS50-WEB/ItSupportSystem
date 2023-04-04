<!DOCTYPE html>
<html>

<head>
    <title>Halifax Canoe and Kayak</title>
    <?php include('../includes/head.html'); ?>
</head>
<body>
    <!-- include header -->
    <?php include('../includes/header.php');
    // include logout button if any user logged in
    include('../includes/logoutbutton.php'); 
    ?>

    <section>
        <!-- form for logging in -->
        <div class="container">
            <h2>Welcome To Your IT Support System</h2>
            <form action="problem.php" method="POST">
                <select name="title" class="input-field" id="title">
                    <option value="" disabled selected>Title</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                </select>
                <input class="input-field" type="text" id="fname" name="fName" placeholder="First Name" required>
                <input class="input-field" type="text" id="lname" name="lName" placeholder="Last Name" required>
                <select class="input-field" id="role" name="role" required>
                    <option value="" disabled selected>Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="CEO">CEO</option>
                </select>
                <input class="btn-blue" name="submit" type="submit" value="Submit">
            </form>
    </section>
    <?php include('../includes/footer.html'); ?>