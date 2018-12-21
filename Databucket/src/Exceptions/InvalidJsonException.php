<?php
/**
 * @package Data Bucket
 * Whoops - Invalid Json Error.
 * @author Sathishkumar <sathisha@v2soft.com>
 */
namespace Json\Databucket\Exceptions;

class InvalidJsonException extends \Exception
{
    public function __construct($message = "Invalid JSON format", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
