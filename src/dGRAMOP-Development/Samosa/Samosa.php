<?php

namespace dGRAMOP-Development\Samosa;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command

class Samosa extends PluginBase{
    public function onEnable(){
        $this->getLogger()->info("----------------- Samosa has Started --------------------");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    if(strtolower($command->getName()) === "/samosa"){
        
        if(strtolower($args[0]) === "server-send"){
            $everything=array_shift($args);
            $this->getLogger()->info("Incomming Message from ". $sender." >>> ". implode($everything, " "));
            return true;
        }
        if(strtolower($args[0]) === "server-send"){
            $everything=array_shift($args);
            $this->getLogger()->info("Incomming Message from ". $sender." >>> ". implode($everything, " "));
            return true;
        }
        
    }
    }
    

    return false;
    }
    
    public function onDisable(){
        $this->getLogger()->info("---------------- Samosa has been stopped ---------------");
    }
}
?>
