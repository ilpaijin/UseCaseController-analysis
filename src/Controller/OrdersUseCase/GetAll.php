<?php

namespace Ucc\Controller\OrdersUseCase;

use Ucc\Controller\OrdersUseCase\Contract\UseCaseBase;

/**
 * Class OrdersGetAll
 * @package Ucc\Controller\OrdersUseCase
 */
class GetAll extends UseCaseBase
{
    /**
     * @param $args
     * @return void
     */
    protected function performSteps($args)
    {
        // $this->actionA();
        // $this->actionB();
        // $this->actionC();

        //users list coming from the repository/data layer
        $this->result = [
            1 => [
                'id' => 123,
                'customer' => [
                    'username' => 'fab4',
                    'name' => 'The Beatles'
                ],
                "item" => "bla bla "
            ],
            2 => [
                'id' => 456,
                'customer' => [
                    'username' => 'cottonballs',
                    'name' => 'Tom Waits'
                ],
                "item" => "bla bla "
            ],
            3 => [
                'id' => 789,
                'customer' => [
                    'username' => 'thevoice',
                    'name' => 'Frank Sinatra'
                ],
                "item" => "bla bla "
            ],
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