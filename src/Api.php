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
    public function run()
    {
        $requestUri = explode("/", ltrim($_SERVER['REQUEST_URI'], "/"));

        $controller = "Ucc\\Controller\\".ucfirst($requestUri[0])."Controller";

        if (!class_exists($controller)) {
            $this->sendError();
            return;
        }

        $controller = new $controller();

        $method = strtolower($_SERVER['REQUEST_METHOD']);

        $request = "";
        $body = ['data' => ''];

        switch ($method) {
            case 'get':
                $request = isset($requestUri[1]) && is_numeric($requestUri[1]) ? $requestUri[1] : "";
                $action = $request ? "getOne" : "getAll";
                $status = "200 OK";
                break;
            case 'post':
                $request = file_get_contents('php://input');
                $action = "post";
                $status = "201 Created";
                break;
            default:
                break;
        }

        ob_start();

        try {
            header("Content-Type: application/json; charset=utf-8;");

            $result = $controller->$action($request);
            $status = isset($result['status']) ? $result['status'] : $status;
            $body = isset($result['data']) && !empty($result['data']) ? $result['data'] : $body;

            header("HTTP/1.1 {$status}");
            echo json_encode(['data' => $body]);

        } catch (Exception $e) {
            header("HTTP/1.1 {$e->getCode()} {$e->getMessage()}");
            echo json_encode(["error" => $e->getMessage()]);
        }

        ob_end_flush();
    }

    /**
     *
     */
    private function sendError()
    {
        header("HTTP/1.1 400 Bad Request");
        ob_end_flush();
    }
}