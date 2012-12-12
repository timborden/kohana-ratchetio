<?php defined('SYSPATH') or die('No direct script access.');
 
class Kohana_Exception extends Kohana_Kohana_Exception
{
    public static function handler(Exception $e)
    {
        Ratchetio::report_exception($e);

        parent::handler($e);
    }
}
