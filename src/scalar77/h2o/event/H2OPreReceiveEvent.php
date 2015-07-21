<?php

namespace scalar77\h2o\event;

use pocketmine\event\Cancellable;

class H2OPreReceiveEvent extends H2OEvent implements Cancellable{

	public static $handlerList = null;
	public static $eventPool = [];
	public static $nextEvent = 0;

}
