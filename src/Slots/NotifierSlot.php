<?php

namespace Maslosoft\Guides\Signals\Slots;

use Maslosoft\Signals\Interfaces\SlotInterface;
use Maslosoft\Signals\ISignal;

class NotifierSlot implements SlotInterface
{
	private $notifier = null;

	public function setSignal(ISignal $signal)
	{
		$this->notifier = $signal;
	}

	public function result()
	{
		return $this->notifier;
	}
}