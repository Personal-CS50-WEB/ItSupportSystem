<?php
session_start();
?>
<!-- Creating the header section, which includes the navigation bar -->
<header>
    <nav role="navigation">
        <ul>
            <li>
                <button id="hamburger-btn"><img
                        src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png"
                        alt="logo" /></button>
            </li>
            <li><a href="#">Halifax Canoe and Kayak</a></li>
            <li>
                <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" alt="logo" />
            </li>
        </ul>
    </nav>
</header>

<!-- creating side navbar -->
<aside id="sidenav">
    <a href="./">Home</a>
    <a href="#">Book Tripe</a>
    <a href="/ItSupportSystem/pages/index.php" >Admin Login</a>
</aside>