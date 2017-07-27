<?php
/**
 * @file ctrl.php
 * @brief url routing contoroller
 */
namespace rtg;

require_once(__DIR__ . '/../ttr/file/require.php');
require_once(__DIR__ . '/../ttr/rest/responce.php');
require_once(__DIR__ . '/func.php');
require_once(__DIR__ . '/../define/common.php');
require_once 'Net/URL/Mapper.php';

try {
    global $Grtg_api_ret;
    $Grtg_api_ret = null;
    
    $map     = \Net_URL_Mapper::getInstance();
    $map->connect('/' . DCOM_APP_TITLE . '/api/:func/:act');
    $mch_uri = $map->match(
                   getUri($_SERVER['REQUEST_URI'])
               );
    if (null === $mch_uri) {
        throw new \Exception('invalid uri');
    }
    
    $api_pth = __DIR__ . '/../' . $mch_uri['func'] . '/' . $mch_uri['act'] . '.php';
    if (false === \ttr\file\isExists($api_pth) ) {
        throw new \Exception('invalid parameter');
    }
    require_once($api_pth);
    
    \ttr\rest\resp($Grtg_api_ret);
} catch (\Exception $e) {
    \ttr\rest\errResp($e->getMessage());
}
