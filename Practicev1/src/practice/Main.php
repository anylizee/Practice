<?php

namespace practice;

use practice\utils\Composer;
use practice\listeners\EventHandler;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;
use pocketmine\scheduler\ClosureTask;

class Main extends PluginBase {
  use SingletonTrait;
  
  protected function onLoad() : void {
    self::setInstance($this);
    @mkdir($this->getDataFolder() . 'players/');
    
    $this->getLogger()->notice("Create By Stellics#0001");
  }
  
  protected function onEnable() : void {
    // configuración
    $this->saveResource("config.yml");
    $this->saveResource("arena.yml");
    
    // events
    $this->getServer()->getPluginManager()->registerEvents(new EventHandler(), $this);
    
    // server
    $this->getScheduler()->scheduleRepeatingTask(new ClosureTask(function (): void {
      
        }), 300 * 20);
  }
}
?>