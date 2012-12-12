<?php defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'ratchetio', 'php');

Kohana::$log->attach(new Log_Ratchetio());