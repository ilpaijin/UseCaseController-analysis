<?php

namespace Ucc\Model\UseCase;

use Ucc\Model\UseCase;

/**
 * Class OrdersGetAll
 * @package Ucc\Model\UseCase
 */
class OrdersGetAll extends UseCase
{
    protected function execute($args)
    {
        //users list coming from the repository/data layer
        $this->result = [1,2,3];
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