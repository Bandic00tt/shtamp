<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/font-awesome.css',
        'prettyPhoto/css/prettyPhoto.css',
        'spoiler/spoiler.css',
        'css/style.css',
        'css/widgets/spoiler.css'
    ];
    public $js = [
        'prettyPhoto/js/jquery.prettyPhoto.js',
        'spoiler/spoiler.js',
        'js/script.js',
        'js/widgets/spoiler.js',
        'js/fixes.js',
        'ckeditor/ckeditor.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
