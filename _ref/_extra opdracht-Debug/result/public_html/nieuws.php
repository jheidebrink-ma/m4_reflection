<?php

require_once('./inc/settings.php');
require_once('./inc/functies.php');
require_once('./inc/nieuws_functies.php');

$siteTitle = "Overzicht";

// wel of niet ingelogd
// hier komt straks een controle
$ingelogd = true;
define( "INGELOGD", true );


include_once('./inc/header.php');
?>
<div id="content">
<?php
	//sendError($_POST);
	echo getMessages( );
?>
</div>

<?php
include_once("./inc/footer.php");