<?php

namespace Ucc\Controller;

use Ucc\Controller\OrdersUseCase\GetAll as UseCaseOrdersGetAll;
use Ucc\Controller\OrdersUseCase\GetOne as UseCaseOrdersGetOne;
use Ucc\Controller\OrdersUseCase\Post as UseCaseOrdersPost;

use Exception;

/**
 * Class OrdersController
 * @package Ucc\Controller
 */
class OrdersController
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