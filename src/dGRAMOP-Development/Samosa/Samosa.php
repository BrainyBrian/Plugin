<?php

namespace dGRAMOP-Development\Samosa;

use pocketmine\plugin\PluginBase;

class MyPlugin extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info("----------------- Samosa has Started --------------------");
    }

    public function onDisable(){
        $this->getLogger()->info("---------------- Samosa has been stopped ---------------");
    }
}
?>
