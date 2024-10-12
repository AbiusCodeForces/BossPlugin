<?php

namespace Abius\Boss;

use pocketmine\plugin\PluginBase;

class Boss extends PluginBase {

    public static $instance;

    public static function getInstance(): self{
        return self::$instance;
    }

    public function onEnable(): void{
        self::$instance = $this;
    }
}