<?php

namespace login;
/**
 * check wether access user is logged in.
 * 
 * @return (boolean) true : access user is logged in
 * @return (boolean) false : access user is not logged in
 */
function isLoggedIn () {
    try {
        return false;
    } catch (\Exception $e) {
        throw new \Exception(
                   PHP_EOL   .
                   'File:'   . __FILE__   . ',' .
                   'Line:'   . __line__   . ',' .
                   'Func:' . __FUNCTION__ . ',' .
                   $e->getMessage()
              );
    }
}

