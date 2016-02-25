<?php
/**
 * Date: 18.01.14
 * Time: 22:16
 */

namespace vxdiv\widget;

use yii\web\AssetBundle;


class AssetsJQueryAdapter extends AssetBundle{

	public $sourcePath = '@vxdiv/ckeditor/editor/adapters';

    public $js = [
        'jquery.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'vxdiv\ckeditor\Assets'
    ];
}
