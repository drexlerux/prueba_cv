<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Type4Next <info@type4next.com>
 * @since 2.0
 */
class BowerAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    //public $baseUrl = '@web';
    public $css = [
        'font-awesome/css/font-awesome.css',
    ];

    public $publishOptions = [
            'except' => [
                "less",
                "scss",
                "src",
            ],
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}