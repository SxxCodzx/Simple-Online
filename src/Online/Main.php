<?php

namespace Online;

use pocketmine\Server;
use pocketmine\plugin\PluginBase as P;

use Online\Command\OnlineCommand;


class Main extends P {

  public function onEnable(): void{
    $this->getServer()->getLogger()->info("Simple Online Enable");                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    $cmd = Server::getInstance()->getCommandMap();
    $cmd->register("online", new OnlineCommand());
  }
}
