<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zašèitena prijava: Zašèitena stran</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>
                To je primer zašèitene strani. Za dostop do strani, morajo biti 
                uporabniki prijavljeni.
            </p>
            <p>Vrnite se na <a href="login.php">prijavno stran</a></p>
        <?php else : ?>
            <p>
                <span class="error">Niste pooblašèeni, da vstopite v to stran.</span> Prosim <a href="index.php">prijavite se</a>.
            </p>
        <?php endif; ?>
    </body>
</html>