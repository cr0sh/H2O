<?php

namespace scalar77\h2o;

use pocketmine\scheduler\PluginTask;

class H2O_Task extends PluginTask {
	function __construct(MainLoader $owner) {
		parent::__construct ( $owner );
	}
	public function onRun($currentTick) {
		/**
		 * @var $owner MainLoader
		 */
		$owner = $this->getOwner();
		$owner->update ();
	}
}

?>
