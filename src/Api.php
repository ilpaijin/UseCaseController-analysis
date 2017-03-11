<?php

namespace Ucc;

/**
 * Class Api
 * @package Ucc
 */
class Api
{
    /**
     *
     */
    public function run() {
        $request = explode("/", ltrim($_SERVER['REQUEST_URI'], "/"));

        $controller = "Ucc\\Controller\\".ucfirst($request[0]);
        $controller = new $controller();

        $method = strtolower($_SERVER['REQUEST_METHOD']);

        $resourceId = "";

        switch ($method) {
            case 'get':
                $resourceId = isset($request[1]) && is_numeric($request[1]) ? $request[1] : "";
                $action = $resourceId ? "getOne" : "getAll";
                break;
            default:
                break;
        }

        ob_start();

        echo $controller->$action($resourceId);

        header("Content-Type: application/json; charset=utf-8;");

        ob_end_flush();
    }
}