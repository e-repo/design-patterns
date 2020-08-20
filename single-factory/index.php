<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\SingleFactory\SingleDoorFactory;



echo '<h2 style="text-align: center;">Простая фабрика</h2>';

$woodenDoor = SingleDoorFactory::makeDoor(900, 2000);
echo $woodenDoor->getWidth();
echo $woodenDoor->getHeight();

?>

<div style="text-align: center;">
    <p>В данном примере показана простая фабрика на примере создание двери. При помощи простой фабрики будет создана дверь с определенными характеристиками</p>
</div>
