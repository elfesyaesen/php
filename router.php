<?php

class Router
{
    public function get(string $name, string $url, string $controller, string $method)
    {
        call_user_func_array([new $controller, $method], []);
    }
}
