<?php

namespace Ucc\Exception;

use Exception;

/**
 * Class NotFoundException
 */
class NotFoundException extends \Exception
{
    /**
     * NotFoundException constructor.
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    function __construct($message = "Not Found", $code = 404, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}