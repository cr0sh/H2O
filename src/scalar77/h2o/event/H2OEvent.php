<?php

namespace scalar77\h2o\event;

use pocketmine\event\Event;
use pocketmine\Player;
use scalar77\h2o\DataPacket;

class H2OEvent extends Event{

	private $packet;

	public function __construct(DataPacket $packet){
		$this->packet = $packet;
	}

	public function getPacket(){
		return $this->packet;
	}

}
