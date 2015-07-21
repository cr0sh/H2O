<?php

namespace scalar77\h2o;

use scalar77\h2o\Info;
use scalar77\h2o\DataPacket;

class InvalidPacket extends DataPacket{ //DO NOT CREATE THIS WITH ANY PURPOSE
	
	public function pid(){
		return Info::PKHEAD_INVALID;
	}
}