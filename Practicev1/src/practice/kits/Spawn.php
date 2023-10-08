<?php

namespace practice\kits;

use practice\api\ItemFactory;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat as CL;

final class Spawn {
  
  public static function select(Player $player) : void {
    $diamond = ItemFactory::getInstance()->get(276, 0, 1);
    $diamond->setCustomName(CL::colorize("&r&l&aFFA&r&7 (Right-Click)"));
    $diamond->setLore([
      "&r&7Use Right-Click To Open.",
      "&r&7The FFA Menu.",
      "&r&bpractice.vaultmcpe.com"
      ]);
      
    $iron = ItemFactory::getInstance()->get(267, 0, 1);
    $iron->setCustomName(CL::colorize("&r&l&aDuel&r&7 (Right-Click)"));
    $iron->setLore([
      "&r&7Use Right-Click To Open.",
      "&r&7The Duel Menu.",
      "&r&bpractice.vaultmcpe.com"
      ]);
      
    $book = ItemFactory::getInstance()->get(387, 0, 1);
    $book->setCustomName(CL::colorize("&r&l&aSettings&r&7 (Right-Click)"));
    $book->setLore([
          "&r&7Use Right-Click To Open.",
          "&r&7The Settingd Menu.",
          "&r&bpractice.vaultmcpe.com"
          ]);
          
    $player->sendMessage(CL::GREEN . "You have recibed item.");
    $inv = $player->getInventory();
    $inv->setItem(0, $diamond);
    $inv->setItem(1, $iron);
    $inv->setItem(8, $book);
  }
}
?>