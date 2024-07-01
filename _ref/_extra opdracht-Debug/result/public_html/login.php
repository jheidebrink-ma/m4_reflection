<?php

require_once('./inc/settings.php');
require_once('./inc/functies.php');
require_once('./inc/nieuws_functies.php');


include_once('./inc/header.php');
?>

	<div id="content">
	
	<!--<h1>Gebruiker en/of wachtwoord niet gevonden</h1>-->
	<h1>Login:</h1>

	<form method="post" id="loginform">
        <table>
        <tr>
            <td>login naam:</td>
            <td><input type="text" name="gebruikersnaam" value="" /></td>
        </tr>
        <tr>
            <td>wachtwoord:</td>
            <td><input type="password" name="wachtwoord" value="" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="login" /></td>
        </tr>
        </table>
    </form>

    
	</div>
    
	<div id="footer">nieuwsbericht systeem PhP MySQL</div>
</div>
</body>
</html>