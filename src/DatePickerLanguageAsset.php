<?php
/**
 * @copyright Copyright (c) 2018 Akaranan Naree
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace littleboy\datepicker;

use yii\web\AssetBundle;

/**
 * DatePickerLanguageAsset
 *
 * @author Akaranan Naree
 * @package karatae99\datepicker
 */
class DatePickerLanguageAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-datepicker/dist/locales';

    public $depends = [
        'littleboy\datepicker\DateRangePickerAsset'
    ];
}
