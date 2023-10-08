<?php

namespace practice\listeners;

use practice\kits\Spawn;
use practice\utils\Utils;
use practice\player\User;

use pocketmine\event\Event;
use pocketmine\event\Listener;
use pocketmine\event\player\{PlayerJoinEvent, PlayerCreationEvent, PlayerQuitEvent};

class EventHandler implements Listener {
  
  /**
   * @priority LOW
   **/
   public function onJoin(PlayerJoinEvent $ev) : void {
     $p = $ev->getPlayer();
     Spawn::select($p);
     Utils::teleport("lobby", $p);
   }
   
   /**
    * @priority HIGH
    **/
    public function onCreation(PlayerCreationEvent $ev) : void {
      $event->setPlayerClass(User::class);
    }
}
?>