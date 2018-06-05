<?php

namespace Engine\Core\Template;

class Theme
{
    const RULES_NAME_FILE = [
        'header' => 'header-%s',
        'footer' => 'footer-%s',
        'sidebar' => 'sidebar-%s'
    ];

    protected static $url = '';

    protected static $data = array();

    public $asset;

    public static $title;

    public function __construct()
    {
        $this->asset = new Asset();
    }

    public static function title()
    {
        echo self::$title;
    }

    public static function setTitle($title)
    {
        self::$title = $title;
    }

    public function header($name = null)
    {
        $name = (string)$name;
        $file = self::detectNameFile($name, __FUNCTION__);
        Component::load($file);
    }

    public function footer($name = '')
    {
        $name = (string)$name;
        $file = self::detectNameFile($name, __FUNCTION__);
        Component::load($file);
    }

    public function sidebar($name = '')
    {
        $name = (string)$name;
        $file = self::detectNameFile($name, __FUNCTION__);
        Component::load($file);
    }

    public function block($name = '', $data = array())
    {
        $name = (string)$name;
        if ($name !== '') {
            Component::load($name, $data);
        }
    }

    private static function detectNameFile($name, $function)
    {
        return empty(trim($name)) ? $function : sprintf(self::RULES_NAME_FILE[$function], $name);
    }

    public static function getData()
    {
        return static::$data;
    }

    public function setData($data)
    {
        static::$data = $data;
    }


}