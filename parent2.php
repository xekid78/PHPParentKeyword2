<?php
class Box {
    function __construct($item) {
        $this->myItem = $item;
    }

    function open() {
        echo "宝箱を開いた。".$this->myItem."を手に入れた。\n";
    }
}

class JewelryBox extends Box {
    function __construct($item) {
        parent::__construct($item);
    }

    function look() {
        echo "宝箱はキラキラと輝いている\n";
    }
}

$box = new Box("鋼鉄の剣");
$box->open();

$jewelryBox = new JewelryBox("魔法の指輪");
$jewelryBox->look();
$jewelryBox->open();
