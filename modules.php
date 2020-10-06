<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Main Modules class
 */
class Modules {

    /**
     * @var Module_Base[]
     */
    private  static $instance = null;

    public static function get_instance() {
        if ( ! self::$instance )
            self::$instance = new self;
        return self::$instance;
    }

    public function init(){
        add_action( 'elementor/widgets/widgets_registered', array( $this, 'widgets_registered' ) ); 
    } 
 
}
Modules::get_instance()->init();

