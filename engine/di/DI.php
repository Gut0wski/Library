<?php

namespace Engine\DI;

class DI
{
    private $container = array();

    public function set($key, $value)
    {
        $this->container[$key] = $value;
        return $this;
    }

    public function get($key)
    {
        return $this->has($key);
    }

    public function has($key)
    {
        return isset($this->container[$key]) ? $this->container[$key] : null;
    }

    public function push($key, $element = array())
    {
        if ($this->has($key) !== null) {
            $this->set($key, array());
        }
        if (!empty($element)) {
            $this->container[$key][$element['key']] = $element['value'];
        }
    }
}
