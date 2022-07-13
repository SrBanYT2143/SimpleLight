<?php

# ∆ Iniciando projeto √

namespace BanzinhoDev\Light;


# ∆ especificando as uses base do plugin

use pocketmine\plugin\PluginBase;

# ∆ especificando as uses de comandos

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\command\PluginCommand;

# ∆ especificando as uses aleatórias a adicionar a o decorrer do plugin

use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\Effect;
use pocketmine\entity\effect\VanillaEffects;
use pocketmine\entity\effect\EffectManager;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use pocketmine\world\Position;

class Main extends PluginBase implements Listener{

    public function onEnable() : void{
        
        }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {
        switch($cmd->getName()) {
            case "luz":
                if(!$sender instanceof Player) {
                    $sender->sendMessage("§l§cERROR: §r§a Você deve estar no jogo para executar este comando");
                    return true;
                }
               $effect = new EffectInstance(VanillaEffects::NIGHT_VISION(), 20*99999, 2);
        if(!$sender->getEffects()->has(VanillaEffects::NIGHT_VISION())){
            $sender->getEffects()->add($effect);
            $sender->sendTitle("§bLUZ ATIVA!");
return true;
        }else{
            $sender->getEffects()->remove(VanillaEffects::NIGHT_VISION());
           $sender->sendTitle("§cLUZ APAGADA");
return true;
        }
}
}
}
