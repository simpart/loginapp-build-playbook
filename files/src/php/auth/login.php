<?php
/**
 * @file login.php
 * @brief login function
 */
namespace auth;

require_once(__DIR__ . '/../ttr/require.php');
require_once(__DIR__ . '/func/define.php');

try {
    global $Grtg_api_ret;
    $jsn_post = file_get_contents('php://input');
    $post     = json_decode($jsn_post);
    $auth_ret = false;

    $user = $post->user;
    $pass = $post->pass;
    
    /******************************/
    /* please add here            */
    /* about login authentication */
    /******************************/

    $Grtg_api_ret = array(
        'login' => $auth_ret
    );
} catch (\Exception $e) {
    throw $e;
}
/* end of file */
