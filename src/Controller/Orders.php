<?php

namespace Ucc\Controller;

use Ucc\Model\UseCase\OrdersGetAll as UseCaseOrdersGetAll;
use Ucc\Model\UseCase\OrdersGetOne as UseCaseOrdersGetOne;
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
            $result = $useCaseOrdersGetAll->execute();
        } catch (Exception $e) {
            throw $e;
        }

        return ["orders" => $result];
    }

    /**
     * @param $id
     * @return array
     * @throws Exception
     */
    public function getOne($id)
    {
        $useCaseOrdersGetOne = new UseCaseOrdersGetOne($id);

        try{
            $result = $useCaseOrdersGetOne->execute($id);
        } catch (Exception $e) {
            throw $e;
        }

        return ["order" => $result];
    }
}