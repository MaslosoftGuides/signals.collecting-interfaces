<?php

namespace Maslosoft\Guides\Signals\Notifiers;

use ReflectionClass;

abstract class AbstractNotifier
{
	public function notify($message)
	{
		$name = (new ReflectionClass(static::class))->getShortName();
		$name = str_pad(str_replace('Notifier', '', $name), 8);
		echo $name . ": " . $message . PHP_EOL;
	}
}