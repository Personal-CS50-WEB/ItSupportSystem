<section class="paddingTop">
    <!-- Button to logout.php if someone is logged in -->
    <?php
    if (isset($_SESSION["role"])) {
        printf('<div class="link-container"><a href="../pages/logout.php">logout</a></div>');
    }
    ?>
</section>