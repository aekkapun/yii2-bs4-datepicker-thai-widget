<?php
/**
 * @copyright Copyright (c) 2018 Akaranan Naree
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace littleboy\datepicker;

use yii\web\AssetBundle;

/**
 * DatePickerAsset
 *
 * @author Akaranan Naree
 * @package karatae99\datepicker
 */
class DatePickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-datepicker/dist';

    public $css = [
        'css/bootstrap-datepicker.css',
    ];

    public $js = [
        'js/bootstrap-datepicker.js'
    ];

    public $depends = [
        'yii\bootstrap4\BootstrapPluginAsset'
    ];
}
