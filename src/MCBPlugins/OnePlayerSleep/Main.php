<?php
namespace MCBPlugins\OnePlayerSleep;
    
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\level\format\io\LevelProvider;
use pocketmine\level\format\io\BaseLevelProvider;
use pocketmine\level\{Level,Position,ChunkManager};
use pocketmine\event\player\PlayerBedEnterEvent;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        @mkdir($this->getDataFolder());
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onEnterBed(PlayerBedEnterEvent $event) {
        $user = $event->getPlayer();
        $level = $user->getLevel();
        $level->setTime("1000");
    }

}
