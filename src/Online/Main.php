<?php

namespace Online;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\plugin\PluginManager as P;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener as L;
use pocketmine\command\Command;


class Main extends P implements L {
  
  public function onEnable(): void{
    $this->getServer()->getLogger()->info("Simple Online Enable");                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
  }
  
  public function onCommand(CommandSender $pl, Command $cmd, string $label, array $args): bool{
    switch($cmd->getName()){
      case "online":
        if($pl->hasPermission("online.cmd")){
          $online = count(Server::getInstance()->getOnlinePlayers());
          $pl->sendMessage("§l§9Online §r§7» Jugadores En Linea §a$online");
        }else{
          $pl->sendMessage("No Perm");
        }
      break;
    }
    return true;
  }
}