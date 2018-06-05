<?php

namespace Engine\Core\Template;

class View
{
    protected $theme;

    public function __construct()
    {
        $this->theme = new Theme();
    }

    public function render($template, $vars = array())
    {
        $functions = ROOT_DIR . '/content/functions.php';
        if (file_exists($functions)) {
            include_once $functions;
        }
        $templatePath = ROOT_DIR . '/app/view/' . $template . '.php';
        if (!is_file($templatePath)) {
            throw new \InvalidArgumentException(
                sprintf('Шаблон "%s" не найден в "%s"', $template, $templatePath)
            );
        }
        //$this->theme->setData($vars);
        extract($vars);
        ob_start();
        ob_implicit_flush(0);
        try {
          require $templatePath;
        } catch (\Exception $e) {
            throw $e;
        }
        echo ob_get_clean();
    }
}