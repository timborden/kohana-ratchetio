<?php defined('SYSPATH') or die('No direct script access.');

class Log_Ratchetio extends Log_Writer {

	public function write(array $messages)
	{
		foreach ($messages as $message)
		{
			Ratchetio::report_message($message['body'], $this->_log_levels[$message['level']]);
		}
	}

}