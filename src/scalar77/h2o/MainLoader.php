<?php

namespace scalar77\h2o;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class MainLoader extends PluginBase implements Listener {
	/** @var SocketInterface */
	private static $interface = null;

	public function onEnable(){
		self::$interface = new SocketInterface($this->getServer(), 19131);

		$this->getServer()->getScheduler()->scheduleRepeatingTask(new H2O_Task($this), 1);
		$this->getLogger()->info("Registered H2O tick schedule.");
	}

	public function update(){
		self::$interface->process();
	}

	/**
	 * @return SocketInterface
	 */
	public static function getInterface(){
		return self::$interface;
	}
}
