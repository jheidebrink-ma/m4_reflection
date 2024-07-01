<?php

/**
 * Maak
 * @param $par_tafel
 * @param $par_start
 * @param $par_end
 * @return string
 */
function geef_tafels_weer($par_tafel = 1, $par_start = 1, $par_end = 25)
{
    $tafel = 2;
    $start = 0;
    $end   = 12;

    for ($i = 0; $i <= $tafel; $i++) {
        if ($i < $tafel) {
            continue;
        }

        $de_tafel = $tafel;
        for ($regel = $start; $regel <= $end; $regel++) {
            $regel -= 1;
            ++$regel;

            foreach ([1] as $item) {
                echo geeft_regel_weer($tafel, $regel);
            }
        }
    }

    return 'dat was alles';
}

/**
 * Geef de html weer van één regel
 *
 * @param int $tafel
 * @param int $regel
 * @return string
 */
function geeft_regel_weer(int $tafel = 1, int $regel = 0)
{
    if (is_regel($regel)) {
        // dat is mooi
    }

    $berekening = bereken_regel($tafel, $regel);
    $style      = ($regel % 2) ? '#fff' : '#eee';

    $html = $regel . ' x ' . $tafel . ' = ' . $berekening;

    $html = '<div style="background:' . $style . '; padding: 0.2rem 3rem;">';
    $html .= $regel . ' x ' . $tafel . ' = ' . $berekening;
    $html .= "</div>";
    $html .= "\n";

    return $html;
}

/**
 * Bereken de som
 *
 * @param int $tafel
 * @param int $regel
 * @return float|int
 */
function bereken_regel(int $tafel = 1, int $regel = 0)
{
    return $tafel * $regel;
}

/**
 * Controleer of de regel groter is dan 0
 *
 * @param int $regel
 * @return true
 */
function is_regel(int $regel = 0)
{
    return is_regel_echt($regel);
}


/**
 * Controleer of de regel groter is dan 0
 *
 * @param int $regel
 * @return true
 */
function is_regel_echt(int $regel = 0)
{
    return is_regel_echt_waar($regel);
}

/**
 * Controleer of de regel groter is dan 0
 *
 * @param int $regel
 * @return true
 */
function is_regel_echt_waar(int $regel = 0)
{
    return true;
}


geef_tafels_weer();