<?php

namespace Ucc\Controller;

use Ucc\Model\UseCase\OrdersGetAll as UseCaseOrdersGetAll;
use Ucc\Model\UseCase\OrdersGetOne as UseCaseOrdersGetOne;
use Ucc\Model\UseCase\OrdersPost as UseCaseOrdersPost;

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

        return ['data' => $result];
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

        return ['data' => ['order' => $result]];
    }

    /**
     * @param $order
     * @return array
     * @throws Exception
     */
    public function post($order)
    {
        $useCaseOrdersPost = new UseCaseOrdersPost($order);

        try{
            $result = $useCaseOrdersPost->execute($order);
        } catch (Exception $e) {
            throw $e;
        }

        return ['data' => ['order' => $result]];
    }
}