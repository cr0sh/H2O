<?php

namespace scalar77\h2o\template;

use pocketmine\utils\Config;
use scalar77\h2o\DataPacket;
use scalar77\h2o\Info;

class EnumPacket extends DataPacket{ 
	
	private $decoded;

	public function pid(){
		return Info::PKHEAD_ENUM;
	}

	public function toArray(){
		return ($this->decoded = NULL ? ($this->decoded = json_decode(substr($this->data, 1))) : $this->decoded);
	}

	public static function fromConfig($address, $port, Config $cfg){
		return new Base64Packet($address, $port, json_encode($cfg->getAll()));
	}

	public static function fromArray($address, $port, $array){
		return new Base64Packet($address, $port, json_encode($array));		
	}
}