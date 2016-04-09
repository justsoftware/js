<?php
/**
 * jsCMS bootstrap file.
 */

$vendorRoot = dirname(dirname(__DIR__));

require($vendorRoot . '/yiisoft/yii2/BaseYii.php');

class Yii extends \yii\BaseYii
{
}

spl_autoload_register(['Yii', 'autoload'], true, true);

Yii::$classMap = require(__DIR__ . '/classes.php');
Yii::$container = new yii\di\Container();