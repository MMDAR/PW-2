<?php
class Hero
{
    //Attribute / property
    public $nama;
    public $health;
    public $damage;
    public $level;
    public $xp;


    public function __construct($nama, $health, $damage, $level)
    {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
        $this->level = $level;
    }

    public function getInfo()
    {
        echo "<hr>Nama: " . $this->nama;
        echo "<br> HP: " . $this->health;
        echo "<br> Damage: " . $this->damage;
        echo "<br> XP: " . $this->xp;
        echo "<br> Level: " . $this->level;
    }
    public function levelUp()
    {
        if ($this->xp >= 100) {
            $this->level = $this->level + 1;
            $this->health = $this->health + 150;
            $this->damage = $this->damage + 50;
            $this->xp = $this->xp - 100;
        }
    }
    public function farming()
    {
        $this->xp = $this->xp + 55;

        if ($this->xp >= 100) {
            $this->levelUp();
        }
        echo "<br> === $this->nama Telah melakukan farming === ";
    }
    public function attack($target)
    {
        $target->health = $target->health - $this->damage;
    }
}
$hero1 = new Hero("Alucard", 3200, 250, 1);
$hero2 = new Hero("Franco", 5000, 50, 1);



$hero1->getInfo();
$hero2->getInfo();
$hero2->farming();

$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();

echo "<br>";
$hero1->getInfo();


$hero1->attack($hero2);
$hero2->getInfo();
