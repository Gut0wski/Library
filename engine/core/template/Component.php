<?php

namespace Engine\Core\Template;

class Component
{
    public static function load($name, $data = array())
    {
        $templateFile = ROOT_DIR . '/content/' . $name . '.php';
        if (is_file($templateFile)) {
            extract(array_merge($data, Theme::getData()));
            require_once $templateFile;
        } else {
            throw new \Exception(sprintf('Файл шаблона %s не существует!', $templateFile));
        }
    }
}