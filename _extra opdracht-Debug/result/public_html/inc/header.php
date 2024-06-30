<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="nl" xml:lang="nl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $siteTitle; ?></title>
	<link rel="stylesheet" href="<?php echo SITE_PATH; ?>/main.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>

<body>
<div id="container">
	<div id="header">	
		<div id="login"><a href="login.php">Login</a></div>

		<ul id="menu">
			<li><a href="<?php echo SITE_PATH; ?>">Home</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="<?= SITE_PATH ?>nieuws.php" class="active">Nieuws</a></li>
			<?php if ( defined("INGELOGD") && true === INGELOGD ) {
				// laat het nieuw linkje alleen zien als je niet een nieuwe toevoegd.
				echo "<li><a href='". SITE_PATH."new/?mode=new' style='float:right;'>Nieuw bericht</a></li>\n";
			}?>
		</ul>	
	</div>
