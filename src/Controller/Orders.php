<?php

namespace Ucc\Controller;

use Ucc\Model\UseCase\OrdersGetAll as UseCaseOrdersGetAll;
use Ucc\Model\UseCase\OrdersGetOne as UseCaseOrdersGetOne;

/**
 * Class Orders
 * @package Ucc\Controller
 */
class Orders
{
    /**
     * @return string
     */
    public function getAll()
    {
        $useCaseOrdersGetAll = new UseCaseOrdersGetAll();

        $result = $useCaseOrdersGetAll->gogogo();

        return json_encode(["data" => ["orders" => $result]]);
    }

    /**
     * @param $id int
     * @return string
     */
    public function getOne($id)
    {
        $useCaseOrdersGetOne = new UseCaseOrdersGetOne($id);

        $result = $useCaseOrdersGetOne->gogogo();

        return json_encode(["data" => ["user" => ["id" => $id]]]);
    }
}