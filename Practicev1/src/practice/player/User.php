<?php

declare(strict_types=1);

namespace practice\player;

use pocketmine\entity\effect\VanillaEffects;
use pocketmine\entity\Entity;
use pocketmine\entity\Location;

use pocketmine\form\Form;
use pocketmine\item\Armor;
use pocketmine\item\enchantment\VanillaEnchantments;
use pocketmine\math\Vector3;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\NetworkSession;
use pocketmine\network\mcpe\protocol\MovePlayerPacket;
use pocketmine\player\Player;
use pocketmine\player\PlayerInfo;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use function mt_getrandmax;
use function mt_rand;
use function sqrt;

class User extends Player {
  public function __construct(Server $server, NetworkSession $session, PlayerInfo $playerInfo, bool $authenticated, Location $spawnLocation, ?CompoundTag $namedtag) {
		parent::__construct($server, $session, $playerInfo, $authenticated, $spawnLocation, $namedtag);
		$this->xuid = 'veltpvp.com';
	}
}