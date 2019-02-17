<html>
    <header>
        <title>HCK - <?php echo $thisPage; ?></title>
        <link rel="stylesheet" href="css/style.css">
    </header>
    <body>
        <div id="title-bar">
            <div id="site-title">
                <a href="index.php" id="title-link">Health Coach Kristen</a>
                <img id="logo" src="img/Snoot.jpg" height="100">
            </div>
            <div id="navigation">
                <span id="spacer">I'm invisible!</span>
                <ul>
                    <li<?php if ($thisPage=="home") echo " id=\"currentpage\""; ?>>
                        <a href="index.php">Home</a></li>
                    <li<?php if ($thisPage=="about") echo " id=\"currentpage\""; ?>>
                        <a href="about.php">About</a></li>
                    <li<?php if ($thisPage=="faq") echo " id=\"currentpage\""; ?>>
                        <a href="faq.php">FAQ</a></li>
                    <li<?php if ($thisPage=="contact") echo " id=\"currentpage\""; ?>>
                        <a href="contact.php">Contact Kristen</a></li>
                    <li<?php if ($thisPage=="goals") echo " id=\"currentpage\""; ?>>
                        <a href="goals.php">My Goals</a></li>
                    <li<?php if ($thisPage=="login") echo " id=\"currentpage\""; ?>>
                        <a href="login.php">Log in/Sign up</a></li>
                </ul>
            </div>
        </div>