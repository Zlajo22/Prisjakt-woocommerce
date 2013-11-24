<?php

namespace rendom\prisjakt\admin;
class Prisjakt {
    private static $instance = null;

    public function __construct(){
        $this->registerHooks();
        $this->registerActions();
    }

    public static function getInstance(){
        if( self::$instance == null ) self::$instance = new self;
        return self::$instance;
    }


    private function registerHooks() {

    }

    private function registerActions() {
        add_action('admin_init', array($this, 'settingsInit') );
        add_action('admin_menu', array($this, 'settingsPage'));
    }

    public function settingsPage(){
        add_plugins_page(
            'Prisjakt WooCommerce',
            'Prisjakt',
            'administrator',
            'wc-prisjakt',
            array($this, 'settingsDisplay')
        );
    }

    public function settingsDisplay() {
        include('views/settings.php');
    }

    public function settingsInit() {

    }
}