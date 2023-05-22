<?php

class BaseController
{
    const PATH_VIEW = "Views";
    public function View($layout = null, $view = null, $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        $view = $this->getPath($view);
        $layout = $this->getPath($layout);
        require_once $layout;
    }
    private function getPath($path)
    {
        $path = str_replace(".", "/", $path);
        return self::PATH_VIEW . "/" . $path . ".php";
    }

}