<?php
require_once( 'settings.php' );


// Met dit mysqli object kun je straks queries uitvoeren
// deze kan ik straks gebruiken om mysql queryies uit te voeren
$mysqli_link = mysqli_init();

// Maak verbinding met een mysql server. Host, Username, Password, Database
$success = mysqli_real_connect( $mysqli_link, DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE );
if ( mysqli_connect_error() ) {
	die("Kan geen verbinding met de database maken");
}