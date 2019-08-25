<?php
/**
 * Created by PhpStorm.
 * User: st.kevich
 * Date: 25.03.18
 * Time: 18:05
 */
namespace stkevich\ckeditor5;

use yii\web\AssetBundle;

class ClassicAssets extends AssetBundle
{
    public $sourcePath = "@vendor/harunmahfud";

    public $css = [
    ];

    public $js = [
        'yii2-ckeditor5/assets/classic/ckeditor.js',
    ];

    public $depends = [
    ];
}