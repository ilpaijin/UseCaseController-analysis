<?php

namespace Ucc\Model\UseCase;

use Ucc\Model\UseCase\Contract\UseCaseBase;

/**
 * Class OrdersGetOne
 * @package Ucc\Model\UseCase
 */
class OrdersPost extends UseCaseBase
{
    /**
     * @param $order
     * @throws NotFoundException
     * @return void
     */
    protected function performSteps($order)
    {
        $newOrder = json_decode($order, true);
        $newOrder['id'] = bin2hex(openssl_random_pseudo_bytes(3));

        $this->result = $newOrder;
    }

    /**
     * @return mixed
     */
    public function addPreconditions()
    {
        // TODO: Implement addPreconditions() method.
    }

    /**
     * @return mixed
     */
    public function addPostconditions()
    {
        // TODO: Implement addPostconditions() method.
    }
}