<?php

namespace Maslosoft\Guides\Signals\Notifiers;

abstract class AbstractNotifier
{
	public function notify($message)
	{
		echo static::class . PHP_EOL . $message . PHP_EOL;
	}
}