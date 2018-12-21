<?php
/**
 * @package Data Bucket
 * Whoops - php errors If file is not found.
 * @author Sathishkumar <sathisha@v2soft.com>
 */
namespace Json\Databucket\Exceptions;

class FileNotFoundException extends \Exception
{
    public function __construct($message = "File not found exception", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
