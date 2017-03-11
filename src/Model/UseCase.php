<?php

namespace Ucc\Model;

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
     * @var $errors \Ucc\Model\UseCase\VO\UseCaseError
     */
    protected $error;

    /**
     * @param $args
     * @return UseCase\VO\UseCaseResult
     */
    public function gogogo($args)
    {
        $this->addPreconditions();
        $this->execute($args);
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