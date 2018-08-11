<?php

namespace Maslosoft\Guides\Signals\Interfaces;

use Maslosoft\Addendum\Interfaces\AnnotatedInterface;
use Maslosoft\Guides\Signals\Slots\NotifierSlot;
use Maslosoft\Signals\Interfaces\SignalInterface;

/**
 * @SlotFor(NotifierSlot)
 * @see NotifierSlot
 */
interface NotifierInterface extends AnnotatedInterface, SignalInterface
{
	public function notify($message);
}