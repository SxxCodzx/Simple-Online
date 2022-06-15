<?php

namespace Online\Command;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\command\{Command, CommandSender};          

use Online\Utils\Sounds;

class OnlineCommand extends Command {
  
  public function __construct(){
    parent::__construct("online", "Counter Online Players", null, ["players"]);
  }
  
  public function execute(CommandSender $pl, string $label, array $args){
    if($pl instanceof Player){
      $count = count(Server::getInstance()->getOnlinePlayers());
      $pl->sendMessage("§8[§eCounter§8] §7» Hay §a". $count ." §7Jugadores en Linea");
      Sounds::addSound($pl, 'random.pop', 50, 1);
    }else{
      
    }
  }
}
