<?php

namespace Ucc\Model\UseCase;

use Ucc\Model\UseCase;

/**
 * Class OrdersGetOne
 * @package Ucc\Model\UseCase
 */
class OrdersGetOne extends UseCase
{
    /**
     *
     */
    protected function execute($args)
    {
        //users list coming from the repository/data layer
        $this->result = ['user' => ['id' => $args]];
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