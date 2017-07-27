<?php
/**
 * @file func.php
 * @brief function for routing
 */
namespace rtg;

function getUri( $upath ) {
    try {
        $ret_val = '';
        $uexp    = explode( '/' , $upath );
        for ( $loop=0 ; $loop < count($uexp) ; $loop++ ) {
            if( $loop == count($uexp)-1 ) {
                $gexp     = explode( '?' , $uexp[$loop] );
                $ret_val .= $gexp[0];
            } else {
                $ret_val .= $uexp[$loop] . '/';
            }
        }
        return $ret_val;
    } catch( \Exception $e ) {
        throw new \Exception(
                  PHP_EOL   .
                  'File:'   . __FILE__   . ',' .
                  'Line:'   . __line__   . ',' .
                  'Func:' . __FUNCTION__ . ',' .
                  $e->getMessage()
              );
    }
}


