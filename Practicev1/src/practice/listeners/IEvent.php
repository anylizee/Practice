<?php

namespace practice\listeners;

use practice\Main;

use practice\listeners\EventHandler;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;

final class IEvent {
  
  public static function setup() : void {
    IEvent::register(new EventHandler(), "EventHandler");
    
    
  }
  
  public static function register(Listener $listener, String $name) : void {
    $core = Main::getInstance();
    
    $core->getServer()->getPluginManager()->registerEvents($listener, $core);
    $core->getLogger()->notice("[Events] | RegisterEvent: " . $name);
  }
}
?>