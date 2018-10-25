<?php

namespace JblusTheDev\Plugins;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\Player;
use pocketmine\plugin\Pluginbase;
use pocketmine\utils\TextFormat;

class Report extends Pluginbase implements Listener {

	public function onEnable() {

		$this->getLogger()->info(TextFormat::BLUE. "plugins (JblusPlugins) Enable by JblusCode !!!");
		$this->getServer()->getPluginManeger()->registerEvents($this,$this);
	}

	public function onDisable() {
		$this->getLogger()->info(TextFormat::RED . "plugins (JblusPlugins) Disable by JblusCode !!!");
	}

	public function onCCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {
		switch($cmd->getName()) {

			case "jblus":
				$sender->addTitle(TextFormat::YELLOW . "Jblus");
			return true;
		}
	}
}