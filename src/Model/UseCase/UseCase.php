<?php

namespace Ucc\Model;

use Exception;

/**
 * Class IUseCase
 * @package Ucc\Model
 */
abstract class UseCase
{
    /**
     * @var $result \Ucc\Model\UseCase\VO\UseCaseResult
     */
    protected $result;

    /**
     * @param null $args
     * @return UseCase\VO\UseCaseResult
     * @throws Exception
     */
    public function gogogo($args = null)
    {
        $this->addPreconditions();

        try {
            $this->execute($args);
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
    abstract protected function execute($args);

    /**
     * @return mixed
     */
    abstract public function addPostconditions();

    /**
     * @return mixed
     */
    public function finalize()
    {
        // no code yet
    }
}