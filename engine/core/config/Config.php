<?php

namespace Engine\Core\Config;

class Config
{
    public static function item($key, $group = 'main')
    {
        $groupItems = static::file($group);
        return isset($groupItems[$key]) ? $groupItems[$key] : null;
    }

    public static function file($group)
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/app/config/' . $group . '.php';
        if (file_exists($path)) {
            $items = require_once $path;
            if (!empty($items)) {
                return $items;
            } else {
                throw new \Exception(sprintf('Файл конфигурации %s не является валидным.', $path));
            }
        } else {
            throw new \Exception(sprintf('Невозможно загрузить файл конфигурации %s.', $path));
        }
        return false;
    }
}