<?php
/**
 * @package Data Bucket
 * Whoops - Invalid Null value Error.
 * @author Sathishkumar <sathisha@v2soft.com>
 */
namespace Json\Databucket\Exceptions;

class NullValueException extends \Exception
{
    public function __construct($message = "Null value exception", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
