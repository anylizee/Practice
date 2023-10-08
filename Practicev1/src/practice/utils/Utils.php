<?php

namespace practice\utils;

use practice\Main;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\math\Vector3;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

final class Utils {
  
  public static function teleport(String $arena, Player $player) : void {
    $core = Main::getInstance();
    $config = new Config(Main::getInstance()->getDataFolder()."arena.yml");
    
    switch ($arena) {
      case 'lobby':
        $x = $config->get("lobby")["X"];
        $y = $config->get("lobby")["Y"];
        $z = $config->get("lobby")["Z"];
        
        $player->teleport(new Vector3($x, $y, $z));
        break;
      
      default:
        $player->sendMessage(TextFormat::RED . "We could not transfer you report!");
        break;
    }
  }
}
?>