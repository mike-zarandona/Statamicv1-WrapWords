<?php
/**
 * Modifier_wrapwords
 * A Statamic v1 variable modifier to wrap individual words with a specified tag
 *
 * @author     Mike Zarandona <mike@zarandona.com>
 * @copyright  2018
 * @link       https://github.com/mike-zarandona/Statamicv1-WrapWords
 * @license    http://opensource.org/licenses/MIT
 *
 * Versions
 * 1.0.0       Initial release
 */

class Modifier_wrapwords extends Modifier {
    public function index($value, $parameters=array()) {
        $pieces = explode(" ", $value);
        $result = "";

        for ( $i = 0; $i < count($pieces); $i++ ) {
            $result .= "<" . $parameters[0] . ">" . $pieces[$i] . "</" . $parameters[0] . "> ";
        }

        return $result;
    }
}
