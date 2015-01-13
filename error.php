<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);
 
if (! $error) {
    $error = 'Oops! Pojavila se je neznana napaka.';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zašèitena prijava: Napaka</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <h1>Nastal je problem</h1>
        <p class="error"><?php echo $error; ?></p>  
    </body>
</html>