<?php

namespace practice\listeners;

use practice\kits\Spawn;

use pocketmine\event\Event;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class EventHandler implements Listener {
  
  /**
   * @priority LOW
   **/
   public function onJoin(PlayerJoinEvent $ev) : void {
     $p = $ev->getPlayer();
     Spawn::select($p);
   }
}
?>