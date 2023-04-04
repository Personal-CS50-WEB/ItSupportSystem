<!DOCTYPE html>
<html>

<head>
    <title>Halifax Canoe and Kayak</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Linking to external CSS stylesheet -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/main.css'>

    <!-- Linking to jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='./js/main.js'></script>
</head>

<body>
    <?php include('./includes/header.php'); ?>

    <main>

        <section class="image-background">
            <h1>Come Experience Canada</h1>
        </section>

        <!-- Adding a section with information about upcoming adventures -->
        <section>
            <h2>Upcoming adventures</h2>
            <hr>
            </hr>

            <!-- Adding an article for each adventure -->
            <article>
                <h3><a href="#">Halifax</a></h3>
                <p><strong>Date:</strong> February 25, 2023</p>
                <p><strong>Duration:</strong> 4 days</p>
                <h4>Summary</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    unt in culpa qui officia deserunt mollit anim id est laborum
                </p>
            </article>

            <article>
                <h3><a href="#">Sydney</a></h3>
                <p><strong>Date:</strong> March 25, 2023</p>
                <p><strong>Duration:</strong> 4 days</p>
                <h4>Summary</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    unt in culpa qui officia deserunt mollit anim id est laborum
                </p>
            </article>
        </section>
    </main>
    <?php include('./includes/footer.html'); ?>