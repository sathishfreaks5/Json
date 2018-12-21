<?php
/**
 * @package Data Bucket
 * Whoops - Invalid Node Exception Error.
 * @author Sathishkumar <sathisha@v2soft.com>
 */
namespace Json\Databucket\Exceptions;

class InvalidNodeException extends \Exception
{
    public function __construct($message = "Invalid JSON node exception", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
