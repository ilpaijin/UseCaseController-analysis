<?php

namespace Ucc\Model\UseCase;

use Ucc\Exception\NotFoundException;
use Ucc\Model\UseCase\Contract\UseCaseBase;

/**
 * Class OrdersGetOne
 * @package Ucc\Model\UseCase
 */
class OrdersGetOne extends UseCaseBase
{
    /**
     * @param $id
     * @throws NotFoundException
     * @return void
     */
    protected function performSteps($id)
    {
        // $this->actionA();
        // $this->actionB();
        // $this->actionC();

        if ((int)$id !== 1) {
            throw new NotFoundException();
        }

        //users list coming from the repository/data layer
        $this->result = [
            'id' => 123,
            'customer' => [
                'username' => 'fab4',
                'name' => 'The Beatles'
            ],
            "item" => "bla bla "
        ];
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