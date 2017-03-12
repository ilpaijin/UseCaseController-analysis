<?php

namespace Ucc\Controller\OrdersUseCase;

use Ucc\Controller\OrdersUseCase\Contract\UseCaseBase;

/**
 * Class OrdersGetOne
 * @package Ucc\Controller\OrdersUseCase
 */
class Post extends UseCaseBase
{
    /**
     * @param $order
     * @throws NotFoundException
     * @return void
     */
    protected function performSteps($order)
    {
        // $this->actionA();
        // $this->actionB();
        // $this->actionC();

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