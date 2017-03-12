<?php

namespace Ucc\Controller\OrdersUseCase\Contract;

use Exception;

/**
 * Class IUseCase
 * @package Ucc\Model
 */
abstract class UseCaseBase
{
    /**
     * @var $result \Ucc\Model\UseCase\VO\UseCaseResult
     */
    protected $result;

    /**
     * @param null $args
     * @return \Ucc\Model\UseCase\VO\UseCaseResult
     * @throws Exception
     */
    public function execute($args = null)
    {
        $this->addPreconditions();

        try {
            $this->performSteps($args);
        } catch (Exception $e) {
            throw $e;
        }

        $this->addPostconditions();
        $this->finalize();

        return $this->result;
    }

    /**
     * @return mixed
     */
    abstract public function addPreconditions();

    /**
     * @param $args
     * @return mixed
     */
    abstract protected function performSteps($args);

    /**
     * @return mixed
     */
    abstract public function addPostconditions();

    /**
     * @return mixed
     */
    private function finalize()
    {
        // no code yet
    }
}