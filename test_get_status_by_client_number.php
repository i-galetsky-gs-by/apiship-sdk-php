<?php
require('vendor/autoload.php');
use Apiship\Adapter\GuzzleAdapter;
use Apiship\Apiship;
use Apiship\Exception\ResponseException;

try {
    $adapter = new GuzzleAdapter('admin', 'admin', true);
    $apiship = new Apiship($adapter);

    $statusResult = $apiship->orders()->getStatusByClientNumber('testNumber1');

    print_r($statusResult);exit;

} catch (ResponseException $e) {
    echo $e->getErrorApishipCode() . PHP_EOL;
    echo $e->getErrorMessage() . PHP_EOL;
    echo $e->getErrorDescription() . PHP_EOL;
    echo $e->getErrorMoreInfo() . PHP_EOL;
    print_r($e->getErrors());
    exit;
} catch (Exception $e) {
    print_r($e->getMessage());
    exit;
}