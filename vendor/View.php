<?php

class view
{

    public $layout;
    public $page;

    public function __construct($page = 'index',$layout = 'main')
    {
        $this->layout = $layout;
        $this->page = $page;
    }
    public function render()
    {
        include_once 'vendor'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR. $this->layout.'.php';
    }
}