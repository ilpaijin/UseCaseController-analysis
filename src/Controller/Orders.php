<?php

namespace Ucc\Controller;

use Ucc\Model\UseCase\OrdersGetAll as UseCaseOrdersGetAll;
use Ucc\Model\UseCase\OrdersGetOne as UseCaseOrdersGetOne;
use Ucc\Exception\NotFoundException;
use Exception;

/**
 * Class Orders
 * @package Ucc\Controller
 */
class Orders
{
    /**
     * @return string
     * @throws Exception
     */
    public function getAll()
    {
        $useCaseOrdersGetAll = new UseCaseOrdersGetAll();

        try{
            $result = $useCaseOrdersGetAll->gogogo();
        } catch (NotFoundException $e) {
            throw new Exception("404 Not Found");
        }

        return ["orders" => $result];
    }

    /**
     * @param $id int
     * @return string
     */
    public function getOne($id)
    {
        $useCaseOrdersGetOne = new UseCaseOrdersGetOne($id);

        $result = $useCaseOrdersGetOne->gogogo($id);

        return ["order" => $result];
    }
}