<?php

namespace scalar77\h2o;

use pocketmine\Server;

class H2O{

    private static $interface;

    public static function sendPacket(DataPacket $packet){
        return MainLoader::getInterface()->sendPacket($packet);
    }

    public static function matchPlayer($ip){
        foreach(Server::getInstance()->getOnlinePlayers() as $p){
            if($p->getAddress() === $ip) return $p;
        }
        return null;
    }

    public static function blockAddress($address, $seconds){
        MainLoader::getInterface()->blockAddress($address, $seconds);
    }

    public static function unblockAddress($address){
        MainLoader::getInterface()->unblockAddress($address);
    }

}
