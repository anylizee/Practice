<?php

namespace practice\api;

use pocketmine\utils\SingletonTrait;
use pocketmine\item\Item;
use pocketmine\item\LegacyStringToItemParser;

class ItemFactory {
  use SingletonTrait;
  
  public function __contruct() {
    self::setInstance($this);
  }
  
  public function get($id, $meta = 0, $count = 1): Item {
        return LegacyStringToItemParser::getInstance()->parse("{$id}:{$meta}")->setCount($count);
    }
}