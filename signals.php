<?php

use Maslosoft\Guides\Signals\Interfaces\NotifierInterface;
use Maslosoft\Guides\Signals\Slots\NotifierSlot;
use Maslosoft\Signals\Signal;

require 'vendor/autoload.php';


// More information available here:
// https://maslosoft.com/blog/2018/08/11/collecting-interface-implementations-with-signals/
// https://maslosoft.com/signals/docs/
// 
$results = (new Signal)->gather(new NotifierSlot);
/* @var $results NotifierInterface[] */
foreach($results as $notifier)
{
	$notifier->notify('Hello Signals!');
}

var_dump($results);
