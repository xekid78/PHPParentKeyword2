# PHPParentKeyword2
parentキーワードその２（super）

## 処理
parentキーワードを使って、JewelryBoxクラスから親クラスのコンストラクタの変数を出力。

## コード
```
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
```

## 出力結果  
```
宝箱を開いた。鋼鉄の剣を手に入れた。
宝箱はキラキラと輝いている
宝箱を開いた。魔法の指輪を手に入れた。
```
  
## 開発環境
| 開発ツール |  |
|:-|:-|
| OS | Windows10 |
| 仮想化ソフト | Oracle VM VirtualBox 5.2 |
| 構築ソフト | Vagrant 2.0.2 |
| 仮想化上OS | CentOS 6.9 |
| SSHクライアント | PuTTY 0.6.8 |
| FTPクライアント | Cyberduck 6.3.5 |
| エディタ | Atom 1.24.0 |
| 開発言語 | PHP 7.1.15 |
