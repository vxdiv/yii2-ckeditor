<?php
/**
 * Date: 17.01.14
 * Time: 1:06
 */

namespace vxdiv\ckeditor;

use yii\web\AssetBundle;

class Assets extends AssetBundle{
	public $sourcePath = '@vxdiv/ckeditor/editor';

    public $js = [
        'ckeditor.js',
		'js.js',
    ];

	public $depends = [
		'yii\web\YiiAsset',
	];
}
