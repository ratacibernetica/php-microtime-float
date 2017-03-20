<?php
/**
 * As seen in the php documentation
 * http://php.net/manual/es/function.microtime.php
 *
 */

namespace ratacibernetica;

class MicroTimeFloat {
    public static function microtime_float()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
}

?>