<?php 
/**
 * @Author: Javier Cabanillas
 * @Date:   2021-07-21 10:05:45
 * @Last Modified by:   Javier Cabanillas
 * @Last Modified time: 2021-07-21 10:35:34
 */

namespace jcabanillas\yii\ics;

use Exception;

class ICS_Exception extends Exception
{

	   /**
     * 
     *
     * @param string    $message
     * @param int       $code
     * @param Exception $previous
     */
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}