<?php

namespace Amy\JoinUI;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

	public function onJoin(PlayerJoinEvent $event){

	$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null) {
            $result = $data;
            if ($result === null) {
                return true;
            }
            switch($result){
                case 0:
                break;
            }

        });
        $form->setTitle("JoinUI");
		$form->setContent("JoinUI");
        $form->addButton("Close");
        $form->sendToPlayer($player);
        return true;

	}
}
