<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zašèitena prijava: Registracijska forma</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Registrirajte se</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Uporabniska imena lahko vsebujejo le stevila, velike in male crke in podcrtaje</li>
            <li>Email mora imeti validni format</li>
            <li>Geslo mora biti vsaj 6-mestno</li>
            <li>Geslo mora vsebovati
                <ul>
                    <li>Vsaj eno veliko crko(A..Z)</li>
                    <li>Vsaj eno malo crko (a..z)</li>
                    <li>Vsaj eno stevilo (0..9)</li>
                </ul>
            </li>
            <li>Geslo in potrditev gesla se morata popolnoma ujemati</li>
        </ul>
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form">
            Username: <input type='text' 
                name='username' 
                id='username' /><br>
            Email: <input type="text" name="email" id="email" /><br>
            Password: <input type="password"
                             name="password" 
                             id="password"/><br>
            Confirm password: <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br>
            <input type="button" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
        <p>Vrnite se na <a href="index.php">prijavno stran</a>.</p>
    </body>
</html>