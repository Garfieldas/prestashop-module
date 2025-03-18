<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class MyModule extends Module
{
    public function __construct()
    {
        $this->name = 'mymodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->need_instance = 0;
        $this->author = 'Dainius Rainys';
        $this->bootstrap = true;

        parent::__construct();
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayExpressCheckout');
    }

    public function uninstall()
    {
        return parent::uninstall()
            && $this->unregisterHook('displayExpressCheckout');
    }

    public function hookDisplayExpressCheckout()
    {
        return $this->display(__FILE__, 'views/templates/cartbutton.tpl');
    }
}