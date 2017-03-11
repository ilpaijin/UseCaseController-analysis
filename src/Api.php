<?php

namespace Ucc;

use Exception;

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

        if (!class_exists($controller)) {
            header("HTTP/1.1 400 Bad Request");
            ob_end_flush();
            return;
        }

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

        try {
            header("Content-Type: application/json; charset=utf-8;");
            echo json_encode(["data" => $controller->$action($resourceId)]);
        } catch (Exception $e) {
            header("HTTP/1.1 {$e->getCode()} {$e->getMessage()}");
            echo json_encode(["error" => $e->getMessage()]);
        }

        ob_end_flush();
    }
}