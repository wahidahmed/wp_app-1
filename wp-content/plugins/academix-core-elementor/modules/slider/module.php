<?php
namespace AcademixCoreElementor\Modules\Slider;

use AcademixCoreElementor\Base\Module_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Module extends Module_Base {

    public function get_name() {
        return 'ace-slider';
    }

    public function get_widgets() {
        return [
            'Slider',
        ];
    }
}