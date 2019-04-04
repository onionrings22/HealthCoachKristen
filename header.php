<?php
session_start();
?>
<html>
    <head>
        <title>HCK - <?php echo $thisPage; ?></title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>
    <body>
        <div id="title-bar">
            <div id="site-title">
                <a href="index.php" id="title-link">Health Coach Kristen</a>
                <img id="logo" src="img/logo.png" height="100">
            </div>
            <div id="navigation">
                <ul>
                    <li<?php if ($thisPage=="home") echo " id=\"currentpage\""; ?>>
                        <a href="index.php">Home</a></li>
                    <li<?php if ($thisPage=="about") echo " id=\"currentpage\""; ?>>
                        <a href="about.php">About</a></li>
                    <li<?php if ($thisPage=="faq") echo " id=\"currentpage\""; ?>>
                        <a href="faq.php">FAQ</a></li>
                    <li<?php if ($thisPage=="contact") echo " id=\"currentpage\""; ?>>
                        <a href="contact.php">Contact Kristen</a></li>

                    <?php if(isset($_SESSION["user"])) {
                        echo '<li'; if ($thisPage=="goals") {echo " id='currentpage'";}
                            echo'><a href="goals.php">My Goals</a></li>';
                        echo "<li><a href='logout.php'>Log out</a></li>";
                    } else {
                    echo'<li'; if ($thisPage=="login") {echo " id=\"currentpage\"";}
                    echo'><a href="login.php">Log in</a></li>';
                    }?>
                </ul>
                <span id="spacer">I</span>
            </div>
        </div>