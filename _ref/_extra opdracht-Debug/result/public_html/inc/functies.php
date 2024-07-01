<?php

/**
 * Functie om een error te mailen of weer te geven
 * Als in settings.php 'DEBUG' is gedefineerd dan verschijnt er een error
 * anders word er een mail verstuurd
 *
 * @param   Anny    $str    De variabele die weergegeven moet worden
*/
function sendError ( $str=false ) {
	
    // is er wel een variabele meegegeven?
	if ( $str === false ) exit();
	

    if ( ! defined('DEBUG') || DEBUG !== true ) {
        
        // mail de error
        $sitename = ( defined('SITE_NAME') )? SITE_NAME : '';
        mail('debug@dragoent.nl', 'Error van site: ' . $sitename , $out);
    } else {

        // laat de error zien
        echo '<pre class="debug">';
        print_r($str);
        echo "</pre>";
    }

}

