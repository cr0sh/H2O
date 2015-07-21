<?php

namespace scalar77\h2o\event;


class H2OReceiveEvent extends H2OEvent{

	public static $handlerList = null;
	public static $eventPool = [];
	public static $nextEvent = 0;

}
